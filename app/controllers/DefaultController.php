<?php

class DefaultController {
	function index() {
		$locations = Location::all();

		echo view('index', ['locations' => $locations]);
	}

	function one($id) {
		$location = Location::find($id);

		echo '<h2>'.$location->name.'</h2>';
	}
}