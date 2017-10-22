<?php
/************************************************************
** @Description: 测试
** @Author: haodaquan
** @Date:   2016-11-07
** @Last Modified by:   haodaquan
** @Last Modified time: 2016-11-07
*************************************************************/
namespace Application\Api\Model;
use Pipi\Library\Model as Model;

class UserModel extends Model
{
	protected $m;

	public function __construct()
	{
		$this->m = M('pp_user');
	}

	public function addData($data)
	{
		return $this->m->data($data)->add();
	}


	public function getList($limit,$where)
	{
		return  $this->m->where($where)->limit($limit)->select();
	}

	public function updateData($data,$where)
	{
		return $this->m->data($data)->where($where)->save();
	}

	public function deleteData($where)
	{
		return $this->m->where($where)->delete();
	}

	public function getOne($where)
	{
		$result = $this->m->where($where)->select();
		if (isset($result[0])) {
			return $result[0];
		}
		return null;
	}

}