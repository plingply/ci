

import api from "../api/index"
export default {
    getMenu(context, next) {
        api.getMenu().then(data => {
            if (data.status == 'ok') {
                data.data.forEach(item => {
                    item.url =  '/#' + item.url
                });
                context.commit('setMenu', data.data)
                next ? next() : ''
            }
        })
    }
}