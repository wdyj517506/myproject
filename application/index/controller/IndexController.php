<?php
namespace app\index\controller;
use app\common\model\User; 
use think\Controller;

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
    	return "This is 数据添加处理流程";
    }
}
