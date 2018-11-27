<?php
namespace app\admin\controller;
use think\Controller;

class ListController extends Controller
{
	/**
	*内容列表
	**/
	public function index()
	{
		return $this->fetch();
	}

    /**
    *添加文章分类
    **/
    public function add_stro()
    {
         return $this->fetch();
    }

    /**
    *添加文章
    **/
    public function add()
    {
         return $this->fetch();
    }
}