<?php
	//error_reporting(0);
	try{
		$csatlakozas = new PDO('mysql:host=localhost;dbname=bufe_kommentek;
			charset=utf8mb4','root','');
		$csatlakozas->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "<h4 style='text-align:center;'>Sikertelen csatlakozás az adatbázishoz</h4>";
	}
?>