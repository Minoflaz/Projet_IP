<?php
	require_once('header.php');
	require_once('nav.php');
?>

<script src="Chart.js"></script>
	
	<div id="content">

		<div id="welcome">
			<h1>Votre compte</h1>
			<p>Vous pouvez trouver ici la progression de vos élèves.</p>
		</div>
		
		<aside id="infos">
			<h1>Informations</h1>
			<ul>
				<li><a href="#">[Elève 1]</a></li>
				<li><a href="#">[Elève 2]</a></li>
				<li><a href="#">[Elève 3]</a></li>
				<li><a href="#">[Elève 4]</a></li>
				<li><a href="#">[Elève 5]</a></li>
				<li><a href="#">[Elève 6]</a></li>
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


				<script src="doughnut.js"></script>

			</article>
		</section>
		</div>				
	</div>

</div>
			
<?php
	require_once('footer.php');
?>
	
