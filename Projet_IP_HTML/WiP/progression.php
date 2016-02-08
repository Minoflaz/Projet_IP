<?php
	require_once('header.php');
	require_once('nav.php');
?>
<script src="Chart.js"></script>

<div id="content">
	<div id="welcome">
		<h1> [Nom de L'exo] Consigne / Enonce : </h1>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. </p>
	</div>
	
	<aside id = "chapter">
	<h1>Chapitres</h1>
	<ul>
		<li><a href="#">Chapitre 1</a></li>
		<li><a href="#">Chapitre 2</a></li>
		<li><a href="#">Chapitre 3</a></li>
		<li><a href="#">Chapitre 4</a></li>
		<li><a href="#">Chapitre 5</a></li>
		<li><a href="#">Chapitre 6</a></li>
		<li><a href="#">Chapitre 7</a></li>
	</ul>
	</aside>

		
	<section>
		<article>
			<header>
				<h1>Votre progression</h1>
				<hr>
			</header>
			<div class="content">
				<div style="width:100%">
					<canvas id="canvas" height="450" width="600"></canvas>
				</div>
		
		
			<script>
					var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
					var lineChartData = {
						labels : ["January","February","March","April","May","June","July"],
						datasets : [
							{
								label: "My First dataset",
								fillColor : "rgba(220,220,220,0.2)",
								strokeColor : "rgba(220,220,220,1)",
								pointColor : "rgba(220,220,220,1)",
								pointStrokeColor : "#fff",
								pointHighlightFill : "#fff",
								pointHighlightStroke : "rgba(220,220,220,1)",
								data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),			randomScalingFactor(),randomScalingFactor()]
							},
							{
								label: "My Second dataset",
								fillColor : "rgba(151,187,205,0.2)",
								strokeColor : "rgba(151,187,205,1)",
								pointColor : "rgba(151,187,205,1)",
								pointStrokeColor : "#fff",
								pointHighlightFill : "#fff",
								pointHighlightStroke : "rgba(151,187,205,1)",
								data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),			randomScalingFactor(),randomScalingFactor()]
							}
						]
			
					}
			
				window.onload = function(){
					var ctx = document.getElementById("canvas").getContext("2d");
					window.myLine = new Chart(ctx).Line(lineChartData, {
						responsive: true
					});
				}
			
			
				</script>
			</div>
		</article>
	</section>
</div>

<?php
	require_once('footer.php');
?>
	
