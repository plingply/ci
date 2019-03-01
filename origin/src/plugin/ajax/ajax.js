import axios from 'axios';
import tokenFun from '../token'

let Promise = require('es6-promise').Promise;
const Axios = axios.create({
    baseURL: '',
    // baseURL: "https://api-test.imxyb.com",
    timeout: 60000,
    withCredentials: false, //带上 cookie
})


// 添加一个请求拦截器
Axios.interceptors.request.use(config => {


    //POST传参序列化
    if (config.method === 'post') {
        // 数据序列化成表单
        if (config.data && config.data.data) {
            const formData = new FormData()
            Object.keys(config.data.data).forEach(key => formData.append(key, config.data.data[key]))
            config.data = formData
        }
    }

    if (config.method === 'put' || config.method == 'delete') {
        let url = ''
        for (let key in config.data) {
            url += key + '=' + config.data[key] + '&'
        }
        url = url.slice(0, url.length - 1)
        config.data = url
    }

    if (config.method === 'get' && config.url.indexOf('/api/') != -1 && config.data) {
        let url = '?'
        for (let key in config.data) {
            url += key + '=' + config.data[key] + '&'
        }
        url = url.slice(0, url.length - 1)
        config.url += url
    }

    // 存储 token
    if (tokenFun.getToken('token')) {
        config.headers.authorization = tokenFun.getToken('token')
    } 
    return config
}, error => {
    return Promise.reject(error)
})

//添加一个返回拦截器
Axios.interceptors.response.use(res => {
    const { data } = res
    return data

}, error => {
    return Promise.reject(error)
})

export default Axios