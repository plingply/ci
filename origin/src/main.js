import vue from 'vue'
import vueRouter from 'vue-router'
import App from './app'
import axios from './plugin/ajax/index'
import store from './store'
import filters from "./plugin/flites/index"
import util from "./utils/util"

import './less/index.less'

vue.use(vueRouter)
vue.use(axios)
vue.use(util)
filters(vue)

//实例化VueRouter
import routes from './router/index'
let router = new vueRouter({
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    }
})

router.beforeEach(function (to, from, next) {
    if(store.state.menu.length > 0){
        next()
    }else{
        store.dispatch('getMenu',next)
    }
})


new vue({
    store,
    router,
    render: h => h(App)
}).$mount('#app')