<?php
	error_reporting(0);
	$db = new mysqli('127.0.0.1','root','','kecskejatek');
	if($db->connect_errno){
		$db = new mysqli('127.0.0.1','kecskejatek','Gabor120','kecskejatek');

	if($db->connect_errno){
		echo "Hiba az oldal betolteseben";
		die();
	}
	};
?>