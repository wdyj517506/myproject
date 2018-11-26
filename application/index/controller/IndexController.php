<?php
namespace app\index\controller;
use app\common\model\User; 
use think\Controller;
use think\Request;			// 引用Request

class IndexController extends Controller
{
    public function index()
    {
        $User = new User;
        $user = $User->select();
        $this->assign('user',$user);
        $htmls = $this->fetch();
        return $htmls;
    }

    // public function hello($name = 'ThinkPHP5')
    // {
    //     return 'hello,' . $name;
    // }

    //插入数据
    public function insert()
    {
        // 接收传入数据
        $request = new Request( );
        $postData = $request->post();       
        // var_dump($postData);
        // return ;    // 提前返回 
        //实例化User对象
        $User = new User();
        $User->username = $postData['username'];
        $User->password = md5($postData['password']);
        $User->city = $postData['city'];
        $like = implode(',', array_keys($postData['like']));
        $User->lovely = $like;
        $User->create_time = $postData['create_time'];
        $User->update_time = $postData['create_time'];
        $User->status = 0;

        $User->save();
        return  '新增成功。新增ID为:' . $User->id;
    }
}
