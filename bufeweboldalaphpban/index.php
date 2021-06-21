<?php
	$query = explode("/", $_SERVER['REQUEST_URI']);
	if ($query[1] == null){
		unset($query);
	}
	
	if(isset($query[2])){
		$page = $query[2];
	}
	
	$head = "head1";
	if (isset($query) && !preg_match("/velemenyek/", $query[1])){
		$head = "head2";
	}

	include $head . ".php";
	if (isset($query) && preg_match("/velemenyek/", $query[1])){
		echo '<link rel="stylesheet" href="/melleklapok/
		velemenyek/velemenyek.css" type="text/css">';
	}
	echo '</head>';

	include "navbar.php";
	
	$oldal = "kezdolap";
	if (isset($query)){
		$oldal = $query[1];
	}
	include "oldalak/". $oldal .".php";
?>