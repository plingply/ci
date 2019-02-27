

import index from '../views/index.vue'
import home from '../views/home.vue'


var routes = [{
    path: '/',
    redirect: '/index/main'
}, {
    path: '/main',
    name: 'main',
    component: index,
    children: [
        {
            path: 'home',
            name: 'home',
            component: home,
        }
    ]
}]

export default routes