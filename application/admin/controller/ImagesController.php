<?php
namespace app\admin\controller;
use think\Request;

class ImagesController
{
	/**
	*单张图片上传
	**/
	public function first()
	{
        $request = new Request( );
        $postData = $request->post();
        var_dump($postData);
        return ;    // 提前返回  
	}
}