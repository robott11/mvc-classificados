<?php

class Core {
	
	public function start() {

		$url = "/";
		if(isset($_GET["url"])) {

			$url .= $_GET["url"];

		}

		$params = array();

		if(!empty($url) && $url != "/") {

			$url = explode("/", $url);
			array_shift($url);

			$currentController = $url[0];
			array_shift($url);

			$currentAction = $url[0];

			if(isset($url[0]) && !empty($url[0])) {

				$currentAction = $url[0];
				array_shift($url);

			} else {

				$currentAction = "index";

			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {

			$currentController = "homeController";
			$currentAction = "index";

		}

		echo "CONTROLLER: ".$currentController. "<br>ACTION: ".$currentAction."<br>PARAMS: ".print_r($params, true);

	}

}