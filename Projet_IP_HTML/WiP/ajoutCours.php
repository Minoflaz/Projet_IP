<?php
	require_once('header.php');
	require_once('nav.php');
?>
			
			<div id="content">
		
				<div id="welcome">
					<h1>Enregistrer un nouveau cours</h1>
					<p>Ici vous pouvez ajouter votre cours. Il sera enregistré et consultable immédiatement après.</p>
				</div>
				


				<form id="ajoutCours" method="post" action="index.html">
					<aside>
						<h4> Nom du Chapitre ? </h4>
					   	<select id="selectChapitre" name="select"> 
						    <option value="1" selected>Chapitre 1</option> 
						    <option value="2">Chapitre 2</option>
						    <option value="3">Chapitre 3</option>
					   </select>					
					</aside>

					<section>
						<article>
							<header>
								<h1><label for="texte">Nom du cours : </label></h1>
	      						<input name="nom" type="text">
								<hr>
							</header>

							<p>
								<textarea name="contenu" rows="50" cols="75">Saisir un texte ici.</textarea>
							</p>

							<footer>
								<p id="validCours"><input id="btnValidCours" type="submit" value="Valider le cours"/></p>
							</footer>
						</article>
					</section>
				</form>
			</div>
		
<?php
	require_once('footer.php');
?>
