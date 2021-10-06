<?php

class controller {

	public function loadView($viewName, $data = array()) {
		extract($data);
		require "view/".$viewName.".php";
	}

	public function loadTemplate($viewName, $data = array()) {
		require "view/template.php";
	}

	public function loadViewInTemplate($viewName, $data = array()) {
		extract($data);
		require "view/".$viewName.".php";
	}

}