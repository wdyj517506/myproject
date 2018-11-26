<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\User; 

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
}