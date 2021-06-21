	<div class="body" style="overflow: hidden; box-sizing: border-box;">
			<h2>Vélemények</h2>
			<hr style="width: 80%; border-width: 3px; margin-top: 0; padding: 0">
 <?php
	include_once('connect.php');
	if (isset($csatlakozas)){
		$sql = "INSERT INTO kommentek(nev, email, ertekeles, komment, ido)
				VALUES (:nev, :mail, :ertekeles, :komment, :ido)";
		
		$nameErr = $emailErr = $ertekErr = "";
		$nev = $mail = $ertek = $komment = $ido = "";
		$hiba = false;
		for($i=0; $i<5; $i++){
			$selected[$i] = "";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['name'])){
				$nameErr = "Kötelező megadni a nevet";
				$hiba = true;
			} else {
				$nev = test_input($_POST["name"]);
			}
			if (empty($_POST['email'])){
				$emailErr = "Kötelező megadni az emailt";
				$hiba = true;
			} else {
				$mail = test_input($_POST["email"]);
				if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Érvénytelen emailcím formátum";
					$hiba = true;
				}
			}
			if (empty($_POST['ertekeles'])){
				$ertekErr = "Kötelező megadni az értékelést";
				$hiba = true;
			} else {
				$ertek = test_input($_POST["ertekeles"]);
				for($i=0; $i<5; $i++){
					if ($i == $ertek-1){
						$selected[$i] = "checked";
					}
				}
			}

			$komment = test_input($_POST["comment"]);
				
			if ($hiba == false){
				$ido = date('Y:m:d H:m:s');				
				$adat = [
					'nev' => $nev,
					'mail' => $mail,
					'ertekeles' => $ertek,
					'komment' => $komment,
					'ido' => $ido
				];
				
				$query = $csatlakozas->prepare($sql);
				$query->execute($adat);
				header("Refresh:0");
			}
			
		}

		echo '<div class="flex-container">
			<div id="formtarto">
				<form method="post">
					<label class="felirat" for="name">Név</label>
					<span class="error">* '. $nameErr .'</span>
					<br>
					<input type="text" id="name" name="name" maxlength="30" value="'. $nev .'"
					autofocus>
					<br>
					
					<label class="felirat" for="email">Email cím</label>
					<span class="error">* '. $emailErr .'</span>
					<br>
					<input type="text" id="email" name="email" maxlength="30" value="'. $mail .'">
					<br>
					
					<label class="felirat" for="ertekeles">Értékelés</label>
					<span class="error">* '. $ertekErr .'</span>
					<br>
					<span class="star-rating star-5">
					  <input type="radio" name="ertekeles" value="1" '.$selected[0].'><i></i>
					  <input type="radio" name="ertekeles" value="2" '.$selected[1].'><i></i>
					  <input type="radio" name="ertekeles" value="3" '.$selected[2].'><i></i>
					  <input type="radio" name="ertekeles" value="4" '.$selected[3].'><i></i>
					  <input type="radio" name="ertekeles" value="5" '.$selected[4].'><i></i>
					</span>
					<br>

					<label class="felirat" for="comment">Komment</label><br>
					<textarea name="comment" rows="3" cols="50">'. $komment .'</textarea>
					<br>
					
					<input type="submit" value="Küldés!">
				</form>
				
				<div>
					<h3>Köszönjük a visszajelzést!</h3>
				</div>
				
			</div>
			<div id="eredmenytarto">';
		$sqlpage = "";
		if (isset($page) && $page != null) {
			$sqlpage = "LIMIT ". 5 * ($page-1) . ", 5";
		}else{
			$page = 1;
		}
		$sql = "SELECT nev, ertekeles, komment, ido FROM kommentek ORDER BY ID desc 
		". $sqlpage;
		$query = $csatlakozas->query($sql);
		$results = $query->fetchAll(PDO::FETCH_ASSOC);
		$db = 0;
		if ($results == null){
			echo '<div style="text-align: center; font-weight: bold">
			Nem található több komment</div>';
		} else {
			foreach($results as $result){
				if($db < 5){
					echo '<div class="kommentek">&nbsp;'. $result['nev'] .' | '. $result['ido'] .
					'<div class="ertek">'. $result['ertekeles'] .'/5
					<img src="/melleklapok/velemenyek/star.png" width="20" height="20"
					style="vertical-align: text-top;"></div><br>
						<hr style="margin: 0">
						'. $result['komment'] .'</div>';
					$db++;
				}
			}
		}
		if ($page != 1){
			echo '<span class="irany" style="float: left">
				<a href="/velemenyek/'. $page-1 .'">&lt;-vissza</a>
			</span>';
		}
		if ($db == 5){
			echo '<span class="irany" style="float: right">
					<a href="/velemenyek/'. $page+1 .'">előre-&gt;</a>
				</span>';
		}
	}
				
	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	}		
?>
			</div>
		</div>
	</div>
	<footer>
		<a href="https://www.facebook.com" target="blank" class="fa fa-facebook"></a>
		<div style="display: inline-block; color: white;">
			H-Szo: 11:00 - 22:00<br>
			V: 11:00 - 20:00
		</div>
		<div style="color: white; position:absolute;                 
                bottom: 8px; right: 10px;">
			Copyright &copy; 2021 buszbufe.hu
		</div>
	</footer>
 </div>
</body>
