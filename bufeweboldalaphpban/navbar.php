<body>
<div class="container-fluid" id="megjelenites">
	<header class="d-flex">	
				<a href="/">
					<img id="megallo" src="/megallo.jpg" alt="megallo" width="130px" height="130px">
				</a>
			<div class="align-self-end">	
				<a href="/" style="text-decoration: none;">
					<h1  id="headerfelirat">
						Ankor Buszbüfé
					</h1>
				</a>
			</div>
	<?php
		if (!isset($_COOKIE['azonosito'])){
			setcookie('azonosito', 123);
			$file = fopen("szamlalo.txt", "r");
			$szam = fgets($file);
			if (!isset($szam)){
				$szam = 0;
			}
			fclose($file);
			$file = fopen("szamlalo.txt", "w");
			$szam = $szam + 1;
			fwrite($file, $szam);
			fclose($file);
			echo '<h3 id="szamlalo" class="ml-auto">Látogatók száma: '. $szam .'</h3>';
		}else{
			$file = fopen("szamlalo.txt", "r");
			$szam = fgets($file);
			echo '<h3 id="szamlalo" class="ml-auto">Látogatók száma: '. $szam .'</h3>';
			fclose($file);
		}
	?>
	</header>
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<a class="navbar-brand" href="/">
			Kezdőlap
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="/pizzak">
					Pizza
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/egyebek">
					Gyros, Hamburger, Hot-Dog...
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/velemenyek">
					Vélemények
				</a>
			</li>
		</ul>
		</div>
	</nav>
