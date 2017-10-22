<?php
/************************************************************
** @Description: 测试
** @Author: haodaquan
** @Date:   2016-11-07
** @Last Modified by:   haodaquan
** @Last Modified time: 2016-11-07
*************************************************************/

namespace Application\Home\Controller;
use \Pipi\Library\Controller;
use \Pipi\Library\View as View;
use Application\Home\Model\UserModel as User;

class Index extends Controller
{
	public $user_model;
	public $view;
	public function __construct()
	{
		parent::__construct();
		$this->user_model = new User();
		$this->view = new view();
	}

	public function index()
	{
		$this->view->assign("web_name","PPWeb");
		$this->view->display("index.html");
	}

	public function test()
	{
		echo "yes";
	}

	
} 