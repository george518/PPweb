<?php
/************************************************************
** @Description: 基础视图类
** @Author: haodaquan
** @Date:   2016-11-09
** @Last Modified by:   haodaquan
** @Last Modified time: 2017-10-09
*************************************************************/

namespace Pipi\Library;

class View 
{
	public $view;
	public $viewData;

	public function __construct($module="Home")
	{
		$filePath = APP_PATH.$module."/View";
		$loader     = new \Twig_Loader_Filesystem($filePath);
		$this->view = new \Twig_Environment($loader,[
				"cache"=>"/tmp/twig",
				"debug"=>true,
			]);
	}

	/**
	 * [display 显示模板]
	 * @param  string $htmlPath [模板地址]
	 * @return [type]           [description]
	 */
	public function display($htmlPath='index.html')
	{
		$this->view->loadTemplate($htmlPath)
					->display($this->viewData['data']);

		exit();
	}
	/**
	 * [assign 变量赋值]
	 * @param  string $tag  [description]
	 * @param  string $data [description]
	 * @return [type]       [description]
	 */
	public function assign($tag="",$data=""){
		$tag = $tag ? $tag : "default";
		return $this->viewData['data'][$tag]=$data;
	}


}