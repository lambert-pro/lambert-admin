<?php

namespace app\controller;

use think\facade\Request;
use think\facade\Validate;

class Login
{

	public function login(Request $request)
	{
		// 获取输入的用户名和密码
		$username = $request->post('username');
		$password = $request->post('password');

		// 简单的验证
		$validate = Validate::rule([
			                           'username' => 'require',
			                           'password' => 'require',
		                           ]);

		if (!$validate->check(compact('username', 'password'))) {
			return json(['error' => '用户名或密码不能为空'], 400);
		}

		// 示例的用户验证
		if ($username === 'admin' && $password === '123456') {
			// 生成一个随机token并存储在Session中
			$token = bin2hex(random_bytes(16));
			Session::set('user', $username);
			Session::set('token', $token);

			return json(['message' => '登录成功', 'token' => $token]);
		} else {
			return json(['error' => '用户名或密码错误'], 401);
		}
	}

	public function logout()
	{
		Session::delete('user');
		Session::delete('token');

		return json(['message' => '已注销']);
	}
}