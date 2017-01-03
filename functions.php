<?php
function i($code) {
	$icon = '<i class="fa fa-' . $code . '"></i>';
	return $icon;
		
}

function date_nice($date) {
	return date('M j Y h:i A', $date);
}

function time_nice($seconds) {
	$h = floor($seconds/3600);	
	$m = round(($seconds/60) - ($h * 60));
	return $h . 'hrs : ' . $m . 'minutes';
}

function save($data) {
	$ajson = json_encode($data);
	file_put_contents('data.json', $ajson);	
}


?>