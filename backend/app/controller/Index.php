<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\Config;

class Index extends BaseController
{
    public function index()
    {
		$this->checkConnection();
        return '<style>*{ padding: 0; margin: 0; }</style><iframe src="https://www.thinkphp.cn/welcome?version=' . \think\facade\App::version() . '" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>';
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }

	public function checkConnection()
	{
		try {
			// 尝试连接数据库
			$re = Db::query('SELECT * from test limit 1');print_r($re);die;
			return json(['status' => 'success', 'message' => 'Database connection is successful.']);
		} catch (\Exception $e) {
			// 捕获异常并返回错误信息
			return json(['status' => 'error', 'message' => 'Database connection failed: ' . $e->getMessage()]);
		}
	}
}
