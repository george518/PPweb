<?php
/************************************************************
** @Description: 项目配置
** @Author: haodaquan
** @Date:   2016-11-06
** @Last Modified by:   hadoaquan
** @Last Modified time: 2016-11-06
*************************************************************/

return [
	'FETCH_TYPE' => 2,//数据查询返回的形式，2-关联数组，3-索引数组，4-组合，5-对象
	'URL_MODULE' => 2, #1-/module/controller/action 2-自定义路由
	'APP_SIGN'   => [
						'1001'=>'ed7f8b373db9b733dc0dee62a6d184e8',
						'1002'=>'ed7f8b373db9b733dc0dee62a6eer3e8'
					],
	'APP_TYPE'   => 1,#1-接口 #2-WEB
	"APP_AUTH_CHECK" => 0,#api是否需要验证，仅支持url传参验证，1-需要，0-不需要
];