

项目启动地址:
主页：
http://127.0.0.1:7111?merchant_id=&token=
查询状态页
http://127.0.0.1:7111?trade_id=&token=


路由地址：src = config.ROOTDOMAIN + 'apps/?token=' + token + '&code=' + type + '&mid=' + merchant.id

code未应用的code，传过来的是小写
mid商户ID 暂时没有使用
token登录的token

进入到index页面通过code判断进入对应应用的页面
此页面下CODE 未大写，type有两种值，apps未应用，server未会员