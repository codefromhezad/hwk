<?php

namespace Hwk;

use Philo\Blade\Blade;

class View {
	public static $folders = [
		'views' => 'app/views',
		'cache' => 'cache/views',
	];

	public static $blade;

	public static function boot() {
		self::$blade = new Blade(self::$folders['views'], self::$folders['cache']);
	}

	public static function render($view_name, $data = null) {
		return self::$blade->view()->make($view_name, $data)->render();
	}
}