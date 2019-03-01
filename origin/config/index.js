
module.exports = {
	// 打包相对路径的项目 解决样式中资源的路径问题
	publicPath: "../../",
	// 开发环境
	development: {
		// 端口
		port: 7111,
		// 静态资源路径
		publicPath: '/',
		//api 代理地址
		apiURL: 'http://127.0.0.1:5000',
		// 打开地址
		host: '127.0.0.1'
	},
	// 生产环境
	production: {
		// 端口
		port: 7770,
		// 静态资源路径
		publicPath: '',
		//api 代理地址
		apiURL: 'http://127.0.0.1:5000'
	},
	// 打包地址
	distUrl:'../../public/apps/',
	// 清空原项目文件
	removeDist:'../../public/',
	// 清空文件夹
	removeDistName: 'apps'
}