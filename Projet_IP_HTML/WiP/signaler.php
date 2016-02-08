<?php
	require_once('header.php');
	require_once('nav.php');
?>
<div id="content">
	<div id="welcome">
			<h1>Signaler une erreur</h1>
		<section id="signaler">
			<article>
				<header>
					<h1>Message</h1>
					<hr>
				</header>
				<form action="post" id="signalement">
						<textarea rows="15" cols="70" name="signalement" form="signalement">Ecrivez votre message.</textarea>
				<footer>
					<p id="btns">
						<input id="btnValider" type="submit" value="Valider"/>
					</p>
				</footer>
				</form>
			</article>
			</section>
	</div>
	
</div>
<?php
	require_once('footer.php');
?>
	
