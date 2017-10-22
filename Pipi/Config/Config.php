<?php
/************************************************************
** @Description: 全局配置加载项
** @Author: haodaquan
** @Date:   2015-11-06
** @Last Modified by:   hadoaquan
** @Last Modified time: 2015-11-06
*************************************************************/

return [
	'MODULE'         => 'Home',     #默认模块
	'CONTROLLER'     => 'Index',    #默认控制器
	'ACTION'         => 'Index',

	'APP_TYPE'       => 1, #1-接口 #2-WEB
	'URL_MODULE'     => 1, #1-/module/controller/action 2-自定义路由
	'API_AUTH_CHECK' => 1, #api是否需要验证，仅支持url传参验证，1-需要，0-不需要


	'URI_VERSION'    => 'v0',
	'APP_NAME'       => 'Application',

	#传输
	'HTTP_HEAD_PREFIX' => 'PIPI'

	
];