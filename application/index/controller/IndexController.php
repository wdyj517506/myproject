<?php
namespace app\index\controller;
use app\common\model\User; 

class IndexController
{
    public function index()
    {
        $User = new User;
        $user = $User->select();
        var_dump($user);
    }

    // public function hello($name = 'ThinkPHP5')
    // {
    //     return 'hello,' . $name;
    // }
}
