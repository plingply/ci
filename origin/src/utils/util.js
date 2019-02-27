let obj = {
	priceFormat(val, num = 5, float = 2) {
		if (val.indexOf(".") != -1) {
			let s = parseInt(val.split(".")[0])?parseInt(val.split(".")[0]) + "":'0';
			if (s.length > num) {
				s = s.substr(0, num);
			}
			let f = val.split(".")[1];
			if (val.split(".")[1] && val.split(".")[1].length > float) {
				f = val.split(".")[1].substr(0, float);
			}
			return s + "." + f;
		} else {
			if (val && val != "") {
				let result = parseInt(val) + "";
				if (result.length > num) {
					result = result.substr(0, num);
				}
				return result;
			}
			return val;
		}
	}
}

export default {
	install: function (Vue, name = '$util') {
		Object.defineProperty(Vue.prototype, name, { value: obj });
	}
}