<?php 

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