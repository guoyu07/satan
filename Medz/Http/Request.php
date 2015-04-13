<?php
namespace Http;
class Request {

	// # 构造方法
	public function __construct() {
		// # 判断是否存在get_magic_quotes_gpc 以及存在是否有传参
		if (function_exists('get_magic_quotes_gpc') and get_magic_quotes_gpc()) {
			// # 转义为安全的get方式数据
			isset($_GET)     and $_GET     = $this->_stripSlashes($_GET);

			// # 转义为安全的post方式数据
			isset($_POST)    and $_POST    = $this->_stripSlashes($_POST);

			// # 转义为安全的reuqest数据
			isset($_REQUEST) and $_REQUEST = $this->_stripSlashes($_REQUEST);

			// # 转义为安全的coookie数据
			isset($_COOKIE)  and $_COOKIE  = $this->_stripSlashes($_COOKIE);
		}
	}

	// # 获取请求的参数
	public function get($key = null, $defaultValue = null) {
		if(!$key) {
			return array_merge($_GET, $_POST);
		} else if(isset($_GET[$key])) {
			return $_GET[$key];
		} else if(isset($_POST[$key])) {
			return $_POST[$key];
		} else if(isset($_REQUEST[$key])) {
			return $_REQUEST[$key];
		}
		return $defaultValue;
	}

	// # 设置request全局变量
	public function set(string $key, $value = null) {
		$_REQUEST[$key] = $this->_stripSlashes($value);
		return $this;
	}

	// # 采用stripslashes反转义特殊字符
	private function _stripSlashes(&$data) {
		return is_array($data) ? array_map(array($this, '_stripSlashes'), $data) : stripslashes($data);
	}
}