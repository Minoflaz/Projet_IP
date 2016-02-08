<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		{% block stylesheets %}
		<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">
		{% endblock %}
		<title>IP13</title>
	</head>

	<body>
	
		<div id="container">
			
			<header>
				<img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"><span>IP13</span>
			</header>
			
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
							<tr>
								<td id="mdp">
									<label for="mdp">Mot de passe : </label>
								</td>
								<td class="fields">
									<input type="password" id="mdp" name="mdp"/>
								</td>
							</tr>
							<tr>
								<td id="classe">
									<label for="classe">Classe : </label>
								</td>
								<td class="fields">
									<input type="text" id="classe" name="classe"/>
								</td>
							</tr>
							<tr>
								<td id="prof">
									<label for="prof">Professeur : </label>
								</td>
								<td class="fields">
									<input type="password" id="prof" name="prof"/>
								</td>
							</tr>						
						</table>
						
						<p id="btns">
							<input id="btnInscription" type="submit" value="Inscription"/>
						</p>
					</form>

				</div>
				
			</div>
		<?php
	require_once('footer.php');
?>
	
