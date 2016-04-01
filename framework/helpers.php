<?php

/* ROUTING HELPERS */
function route($verb, $endpoint, $handler) {
	Hwk\Router::add(strtoupper($verb), $endpoint, $handler);
}

/* CONFIG/ENV HELPERS */
function getconf($conf) {
	return include('app/config/'.$conf.'.php');
}

function env($envvar, $placeholder) {
	if( isset($_ENV[$envvar]) ) {
		return $_ENV[$envvar];
	} else {
		return $placeholder;
	}
}

/* VIEWS/TEMPLATING HELPERS */
function view($view_name, $data) {
	return Hwk\View::render($view_name, $data);
}