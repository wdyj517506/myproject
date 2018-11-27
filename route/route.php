<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::rule('/', 'index/index/index');
Route::rule('insert', 'index/index/insert');

//后台路由
Route::rule('admin', 'admin/index/index');
Route::rule('adminuser', 'admin/index/user');
Route::rule('admin_info', 'admin/index/info');
Route::rule('admin_list', 'admin/list/index');
Route::rule('admin_list_add', 'admin/list/add');
Route::rule('admin_list_add_stro', 'admin/list/add_stro');

//后台数据处理路由
Route::rule('admin_insert', 'admin/insert/index');