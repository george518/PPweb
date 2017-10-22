<?php
/************************************************************
** @Description: 设置url映射,建议使用API
** @Author: haodaquan 41352963@qq.com
** @Date:   2017-03-17
** @Last Modified by:   haodaquan
** @Last Modified time: 2017-03-17
*************************************************************/

$routesMap = [
	'/api/user' 	=> '/Api/Index/index',#控制器方法名的实际地址
	'/api/user/:id' => '/Api/Index/index',
	// '/api/v0/product/:id'   => '/Home/v0/Index/index'
];