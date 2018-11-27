<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\User; 
use think\Request;

class IndexController extends Controller
{
	/**
	*后台首页
	**/
	public function index()
	{
		return $this->fetch();
	}

	/**
	*系统参数
	**/
	public function info()
	{
		return $this->fetch();
	}

	/**
	*管理员列表
	**/
    public function user()
    {
        $User = new User;
        $user = $User->select();
        $this->assign('user',$user);
        $htmls = $this->fetch();
        return $htmls;
    }
}