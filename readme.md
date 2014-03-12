用laravel框架写v2ex
==========================
前端用的 bootstarp ps:不太会用<br/>
暂时只写出登陆注册静态页面没涉及到业务逻辑 <br/>
遇到的问题：注册的时候不会写 验证码图片 框架不自带吗？ <br/>
update：2014/3/9 1:51

### 登陆注册完成
知道 migrations seeds 的用法 <br/>
路由routes的配置 <br/>
Validator的验证<br/>
数据库的基本用法<br/>
Session错误提示的输出<br/>
前段构建From HTML<br/>
layout布局<br/>
update 2014/3/9 18:40<br/>


###重写登陆注册route ;
[http://www.golaravel.com/docs/4.1/controllers/] 路由控制器用法 <br/>
之前要写Route::get  Route::post 写一大串 <br/>
现在只要用Route::controller就搞定了 <br/>
update 2014/3/11/ 0:05

模板修改 bootstrap  <br/>
update 2014/3/11 1:00<br/>

后台程序 遇到问题：前台和后台的验证Auth 不能验证两张表 默认是users表 还好找到了解决的办法
[https://github.com/ollieread/multiauth]  支持4.1<br/>
update 2014/3/13 1:17