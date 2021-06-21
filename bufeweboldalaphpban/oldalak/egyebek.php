	<div>
		<div class="body d-flex flex-column">
			<table>
				<tr class="tableHeader">
					<th colspan="2" class="pizzaNev">
						Gyros, Hamburger, Hot-Dog...
					</th>
					<th class="pizzaAra">
						Normál
					</th>
					<th class="pizzaAra">
						Nagy
					</th>
				</tr>
				<?php
					$pizzak = file("oldalak/egyebek.txt");
					foreach($pizzak as $pizza){
						$record = explode(";",$pizza);
						$pizzanev = $record[0];
						$pizzatartalma = $record[1];
						$pizzaara1 = $record[2];
						$pizzaara2 = $record[3];
						
						echo '<tr>
								<td class="pizzaNev">
									<strong>'
										. $pizzanev .
									'</strong>
								</td>
								<td class="tartalma">
									<i>'
										. $pizzatartalma .
									'</i>
								</td>
								<td class="pizzaAra">'
									. $pizzaara1 .
								'</td>
								<td class="pizzaAra">'
									. $pizzaara2 .
								'</td>
							</tr>';
					}
				?>
			</table>
			<div class="alsoszoveg">
				Sütemények, üdítők </br>
				nagy választékban!
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