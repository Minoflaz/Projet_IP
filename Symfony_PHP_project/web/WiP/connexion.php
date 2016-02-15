<?php
	require_once('header.php');
	require_once('nav.php');
?>
			
			<div id="content">
		
				<div id="welcome" class="identification">
					<h1>Consolide tes bases en Reseau avec IP13</h1>
					
					<form id="identification" method="post">
						<table>
							<tr>
								<td id="nom">
									<label for="nom">Login : </label>
								</td>
								<td class="fields">
									<input type="text" id="nom" name="nom"/>
								</td>
							</tr>
							<tr>
								<td id="mdp">
									<label for="mdp">Mot de passe : </label>
								</td>
								<td class="fields">
									<input type="password" id="mdp" name="mdp"/>
								</td>
							</tr>
						</table>

						<p id="btns">
							<input id="btnConnexion" type="submit" value="Connexion"/>
							<input id="btnInscription" type="submit" value="Inscription"/>
						</p>
					</form>

				</div>
				
			</div>
<?php
	require_once('footer.php');
?>
	