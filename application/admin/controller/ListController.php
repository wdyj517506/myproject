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
}