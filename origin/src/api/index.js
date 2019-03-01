import http from "../plugin/ajax/ajax"
export default {
	//存放后台 api 统一管理
	getMenu(data){
		return http.get("/api/menu", {
			data
		})
	}
}