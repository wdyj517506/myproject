<?php
namespace app\admin\controller;
use app\common\model\Info; 
use think\Request;

class InsertController
{
	/**
	*存储系统基本参数数据
	**/
	public function index()
	{
        $request = new Request( );
        $postData = $request->post();       
        // var_dump($postData);
        // return ;    // 提前返回 

        $Info = new Info();
        $Info->title = $postData['title'];
        $Info->keywords = $postData['keywords'];
        $Info->description = $postData['description'];
        $Info->url = $postData['url'];
        $Info->icp = $postData['icp'];
        $Info->create_time = $postData['create_time'];
        $Info->update_time = $postData['create_time'];
        $Info->save();
        return "系统基本参数数据保存成功！";
	}
}