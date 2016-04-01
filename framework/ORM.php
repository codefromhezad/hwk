<?php

namespace Hwk;

use Illuminate\Database\Capsule\Manager as Capsule; 

class ORM {
	public static $capsule;

	public static function boot($config) {
		self::$capsule = new Capsule();
		self::$capsule->addConnection($config);
		self::$capsule->bootEloquent();
	}
}
