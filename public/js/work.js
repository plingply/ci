self.addEventListener('message', function (e) {
    console.log('子进程打印：')
    console.log(e.data)
    let count = 100
    
    self.postMessage('我是子进程发送来的消息');
    // self.close(); // Terminates the worker.
    for (let i = 0; i < count; i++) {
        console.log('children:', i)
    }
}, false);