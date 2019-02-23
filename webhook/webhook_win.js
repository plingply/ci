var http = require('http')
var createHandler = require('coding-webhook-handler')
var handler = createHandler({
    path: '/',
    token: 'plingply' // 在 coding 上面可以填写一个 token
})

http.createServer(function(req, res) {
    handler(req, res, function(err) {
        res.statusCode = 404
        res.end('no such location')
    })
}).listen(7777, function() {
    console.log("the server start at:7777")
})

handler.on('error', function(err) {
    console.error('Error:', err.message)
})

handler.on('push', function(event) {
    rumCommand('cmd.exe', ['/c', './auto_build.sh'], function(txt) {
        console.log(txt)
    })
})

function rumCommand(cmd, args, callback) {
    var spawn = require('child_process').spawn;
    var child = spawn(cmd, args)
    var response = ''
    child.stdout.on('data', function(buffer) {
        response += buffer.toString()
    })
    child.stdout.on('end', function() {
        callback(response)
    })
}