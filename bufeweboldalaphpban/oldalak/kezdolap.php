<div class="body">
	<div class="d-flex justify-content-center">	
		<!-- Bal carousel -->
		<div class="oldalcarousel">
			<div id="carouselkepek1" class="carousel slide" data-ride="carousel" data-interval="false">
				<div class="carousel-inner shadow">
					<div class="carousel-item active">
						<img class="carouselkepek2" src="kezdolap/pizza1.jpg" alt="pizza" width="200px" height="600px">
					</div>
					<div class="carousel-item">
						<img class="carouselkepek2" src="kezdolap/hamburger1.jpg" alt="hambruger" width="200px" height="600px">
					</div>
					<div class="carousel-item">
						<img class="carouselkepek2" src="kezdolap/gyros1.jpg" alt="gyros" width="200px" height="600px">
					</div>
				</div>
			</div>
		</div>

		<!-- Kozepso carousel -->
		<div class="kozepsocarousel">
			<div id="carouselkepek" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li id="elso" data-target="#carouselkepek" data-slide-to="0" class="active"></li>
					<li id="masodik" data-target="#carouselkepek" data-slide-to="1"></li>
					<li id="harmadik" data-target="#carouselkepek" data-slide-to="2"></li>
				</ul>
	
				<div class="carousel-inner shadow">
					<div class="carousel-item active">
						<a href="/pizzak">
							<div class="carouselfelirat">
								<h1>Pizza</h1>
							</div>
							<img class="carouselkepek" src="kezdolap/pizza.jpg" alt="pizza" width="1000px" height="600px">
						</a>
					</div>
					<div class="carousel-item">
						<a href="/egyebek">
							<div class="carouselfelirat">
								<h1>Hamburger</h1>
							</div>
							<img class="carouselkepek" src="kezdolap/hamburger.jpg" alt="hambruger" width="1000px" height="600px">
						</a>
					</div>
					<div class="carousel-item">
						<a href="/egyebek">
							<div class="carouselfelirat">
								<h1>Gyros</h1>
							</div>
							<img class="carouselkepek" src="kezdolap/gyros.jpg" alt="gyros" width="1000px" height="600px">
						</a>
					</div>
				</div>
	
				<a class="carousel-control-prev" href="#carouselkepek" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#carouselkepek" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
		
		<!-- Jobb carousel -->
		<div class="oldalcarousel">
			<div id="carouselkepek2" class="carousel slide" data-ride="carousel" data-interval="false">
				<div class="carousel-inner shadow">
					<div class="carousel-item active">
						<img class="carouselkepek2" src="kezdolap/pizza2.jpg" alt="pizza" width="200px" height="600px">
					</div>
					<div class="carousel-item">
						<img class="carouselkepek2" src="kezdolap/hamburger2.jpg" alt="hambruger" width="200px" height="600px">
					</div>
					<div class="carousel-item">
						<img class="carouselkepek2" src="kezdolap/gyros2.jpg" alt="gyros" width="200px" height="600px">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<h1 class="tel">
		<i class="fa fa-phone"></i> Tel.: 06 (22) 123 5123
		<div><a id="hivas" href="tel:06 (22) 123 5123">Hívás</a></div>
	</h1>
	
	<div>
		<h2 id="szallitas">
			Ingyenes kiszállítás!
		</h2>
	</div>
	
		<table>
			<tr>
				<th colspan="2">
					Nyitvatartási idő
				</th>
			</tr>
			<tr>
				<td>
					Hétfő
				</td>
				<td class="ido">
					11:00 - 22:00
				</td>
			</tr>
			<tr>
				<td>
					Kedd
				</td>
				<td class="ido">
					11:00 - 22:00
				</td>
			</tr>
			<tr>
				<td>
					Szerda
				</td>
				<td class="ido">
					11:00 - 22:00
				</td>
			</tr>
			<tr>
				<td>
					Csütörtök
				</td>
				<td class="ido">
					11:00 - 22:00
				</td>
			</tr>
			<tr>
				<td>
					Péntek
				</td>
				<td class="ido">
					11:00 - 22:00
				</td>
			</tr>
			<tr>
				<td>
					Szombat
				</td>
				<td class="ido">
					11:00 - 22:00
				</td>
			</tr>
			<tr>
				<td>
					Vasárnap
				</td>
				<td class="ido">
					11:00 - 20:00
				</td>
			</tr>
		</table>
		<?php
			$nap = date('l');
			$ido = date('H');
			$open = "nyitva";
			if ($nap != "Friday" && ($ido < 11 || $ido >= 22)){
					$open = "zárva";
			} else {
				if ($ido < 11 || $ido >= 20){
					$open = "zárva";
				}
			}
			echo '<h4 id="'.  str_replace('á', 'a', $open) .'">Jelenleg '. $open .' vagyunk!</h4>';
		?>
	</div>
	<footer>
		<a href="https://www.facebook.com" target="blank" class="fa fa-facebook"></a>
		<div style="display: inline-block; color: white;">
			H-Szo: 11:00 - 22:00<br>
			V: 11:00 - 20:00
		</div>
		<div id="alkotodiv">
			A weboldalt készítette: <a id="alkoto" target="blank" href="https://www.facebook.com/gabor.szucs.7967/">Szücs Gábor Bálint</a>
		</div>
		<div id="copyright">
			Copyright &copy; 2021 buszbufe.hu
		</div>
	</footer>
</div>

</div>
<script>
	$("#elso").click(function(){
   		$("#carouselkepek1").carousel(0);
   		$("#carouselkepek2").carousel(0);
  	});
	$("#masodik").click(function(){
   		$("#carouselkepek1").carousel(1);
   		$("#carouselkepek2").carousel(1);
  	});
	$("#harmadik").click(function(){
   		$("#carouselkepek1").carousel(2);
   		$("#carouselkepek2").carousel(2);
  	});

	$(".carousel-control-prev").click(function(){
   		$("#carouselkepek1").carousel("prev");
   		$("#carouselkepek2").carousel("prev");
  	});
	$(".carousel-control-next").click(function(){
   		$("#carouselkepek1").carousel("next");
   		$("#carouselkepek2").carousel("next");
  	});
	
	$("#carouselkepek").on('slide.bs.carousel', function (){
    	$("#carouselkepek1").carousel("next");
   		$("#carouselkepek2").carousel("next");
 	});
</script>
</body>