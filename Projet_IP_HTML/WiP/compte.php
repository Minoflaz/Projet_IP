<?php
	require_once('header.php');
	require_once('nav.php');
?>

<script src="Chart.js"></script>
	
	<div id="content">

		<div id="welcome">
			<h1>Votre compte</h1>
			<p>Vous pouvez trouver ici les détails de votre progression.</p>
		</div>
		
		<aside id="infos">
			<h1>Informations</h1>
			<ul style="margin-top: 2em;">
				<li>[LOGIN]</li>
				<li>[CLASSE]</li>
				<li>[PROFESSEUR]</li>
				<li id="modifier"><input type="button" id="modifier" name="modifier" value="Modifier" onclick="self.location.href='modifier.html'"></li>
			</ul>
		</aside>
		
		<section>
			<article>
				<header>
					<h1>Details</h1>
					<hr>
				</header>

				<table id="progression">
					<tbody>
						<tr>
							<td>
								<div class="canvas" id="canvas-chapitre">
									<canvas id="chart-chapitre" width="500" height="500"/>
								</div>
							</td>
							<td>
								<div class="canvas" id="canvas-cours">
									<canvas id="chart-cours" width="500" height="500"/>
								</div>
							</td>
							<td>
								<div class="canvas" id="canvas-exos">
									<canvas id="chart-exos" width="500" height="500"/>
								</div>
							</td>
						</tr>
						<tr>
							<td><span class="doughnut_name">Chapitre 1</span></td>
							<td><span class="doughnut_name">Cours</span></td>
							<td><span class="doughnut_name">Exercices</span></td>
						</tr>

						<tr>
							<td>
								<div class="canvas" id="canvas-chapitre2">
									<canvas id="chart-chapitre2" width="500" height="500"/>
								</div>
							</td>
							<td>
								<div class="canvas" id="canvas-cours2">
									<canvas id="chart-cours2" width="500" height="500"/>
								</div>
							</td>
							<td>
								<div class="canvas" id="canvas-exos2">
									<canvas id="chart-exos2" width="500" height="500"/>
								</div>
							</td>
						</tr>
						<tr>
							<td><span class="doughnut_name">Chapitre 2</span></td>
							<td><span class="doughnut_name">Cours</span></td>
							<td><span class="doughnut_name">Exercices</span></td>
						</tr>
					</tbody>
				</table>


				<script src="../../Symfony_PHP_project/web/doughnut.js"></script>

			</article>
		</section>
		</div>				
	</div>

</div>
			
<?php
	require_once('footer.php');
?>
	
