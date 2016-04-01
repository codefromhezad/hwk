<?php

namespace Hwk;

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

class Router {
	public static $collector;

	public static function boot() {
		 self::$collector = new RouteCollector();
	}

	public static function add($method, $route, $handler) {
		self::$collector->addRoute($method, $route, $handler);
	}

	public static function dispatch() {
		$dispatcher = new Dispatcher(self::$collector->getData());
		return $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
	}
}
