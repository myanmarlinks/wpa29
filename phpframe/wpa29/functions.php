<?php

function _config_get($query) {
	$e_query = explode(".", $query);
	$file = DD . "/app/config/" . $e_query[0] . ".php";
	if(file_exists($file)) {
		$config_data = require $file;
		return $config_data[$e_query[1]];
	} else {
		trigger_error("Config file not found!", E_USER_ERROR);
	}
} 

/**
*	@require app/view folder
*/

function _load_view($view, $data = null) {
	$view_file = DD . "/app/view/" . $view . ".php";
	if (file_exists($view_file)) {
		ob_start();
		if($data != null) {
			extract($data);	
		}
		require $view_file;
		ob_end_flush();
	} else {
		trigger_error("View file မရွိပဲ ဘာျဖစ္လို႔ ေခၚေနတာလဲ ငတံုး", E_USER_ERROR);
	}
}

 ?>