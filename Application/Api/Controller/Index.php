<?php
/************************************************************
** @Description: 测试
** @Author: haodaquan
** @Date:   2016-11-07
** @Last Modified by:   haodaquan
** @Last Modified time: 2016-11-07
*************************************************************/

namespace Application\Api\Controller;
use \Pipi\Library\Controller;
use Application\Api\Model\UserModel as User;

class Index extends Controller
{
	public $user_model;
	public function __construct()
	{
		parent::__construct();
		$this->user_model = new User();
	}

	public function index()
	{
		$requestMethod = strtolower($this->method);

		$this->$requestMethod();
	}

	/**
	 * [post post方法]
	 * @return [type] [description]
	 */
	protected function post()
	{
		$data = $this->post;
		$id   = $this->user_model->addData($data);
		$header = $this->header;
		$header['lastId'] = $id;
		$this->ajaxReturn($header);
	}

	/**
	 * [get get方法]
	 * @return [type] [description]
	 */
	protected function get()
	{
		if ($this->keyId > 0) {
			$where = " id=".(int)($this->keyId);
			$data = $this->user_model->getOne($where);
			#TODO：添加总数，sql条件
			$this->ajaxReturn($data);
		}
		$size = isset($this->get['pageSize']) ? $this->get['pageSize'] : 10;
		$current = isset($this->get['pageCurrent']) ?  $this->get['pageCurrent'] : 1;
		$limit = ($current-1)*$size.','.$size;
		if (isset($this->get['gender'])) {
			$where = 'gender='.$this->get['gender'];
		}else
		{
			$where = 'gender=1';
		}
		
		$data = $this->user_model->getList($limit,$where);
		#TODO：添加总数，sql条件
		$this->ajaxReturn($data);
	} 

	
	/**
	 * [put 修改方法]
	 * @return [type] [description]
	 */
	protected function put()
	{
		$id = $this->keyId;
		$where = ' id='.$id;
		parse_str(file_get_contents('php://input'),$data);
		$res = $this->user_model->updateData($data,$where);
		$this->ajaxReturn($res);
	}

	/**
	 * [delete 删除方法]
	 * @return [type] [description]
	 */
	protected function delete()
	{
		$id = $this->keyId;
		$where = ' id='.$id;
		$res = $this->user_model->deleteData($where);
		$this->ajaxReturn($res);
	}
}