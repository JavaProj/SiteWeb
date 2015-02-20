<?php 
session_start();

if(isset($_GET['page'])){
$page = $_GET['page'];
}
else
{
$page = 'accueil';
}

if(isset($_GET['login'])){

$_SESSION['login'] = $_GET['login'];
$login = $_GET['login'];
$status = 'Log';

}
else 
{
	$status = 'Unlog';
}

?>
<html>

	<head>

		<meta charset="utf-8" />
		<link rel="shortcut icon" href="image/logo.ico" type="image/x-icon"/> 
		<link rel="icon" href="image/logo.ico" type="image/x-icon"/>		
		<link rel="stylesheet" href="util/PaintBall.css" type="text/css" media="screen" />
		<title>PaintBall Layout Manager</title>
		<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
		<script>

			function verification_inscription()
			{	
				
				if(confirm("Etes vous sur de vouloir enregistrer ces informations ?"))
				{
					$.ajax({
						url : 'verification_inscription.php',
						type : 'POST',
						data : "login=" + document.getElementById("login").value + "&password=" + document.getElementById("password").value + 
						"&nom=" + document.getElementById("nom").value + "&prenom=" + document.getElementById("prenom").value +
						"&email=" + document.getElementById("email").value + "&telephone=" + document.getElementById("telephone").value,
						
						success : function(DataInscription)
						{
							
							if(DataInscription == "valide")
							{
								document.location.href = "index.php?page=accueil";
								alert("Inscription réussie ! ");
							}
							else if(DataInscription == "invalide")
							{
								alert("Echec lors de l'inscription, veuillez remplir tous les champs correctement !");
							}	
						}
					});
				}
			}
			
			
			
			

			function verification_connexion()
			{
				
				$.ajax({
					url : "verification_connexion.php",
					type : "POST",
					data : "loginconnexion=" + document.getElementById("loginconnexion").value + "&passwordconnexion=" + document.getElementById("passwordconnexion").value,

					success : function(DataConnexion)
					{
						if(DataConnexion != "invalide")
						{
							alert("Success");
							document.location.href = "index.php?page=accueil&status=Log&login="+DataConnexion;
							
						}
						else 
						{
							alert("Identifiants invalides");
						}
					}

				});
			}
		</script>
		
	</head>

	<body>

		
		<?php

		include("vue/header.php"); 
		
				if ($status == 'Log'){
					echo'<center>
						<div style=" background-color:#002B82;" id="btn_op">
							<table  style="background-color:#4787F4;">
								<tr>						
									<td>
									<a id="btn" href="index.php?page=accueil&status='.$status.'&login='.$login.'"">Accueil</a>
									</td>	
									<td>
										<a id="btn" href="index.php?page=carte&status='.$status.'&login='.$login.'"">Cartes</a>
									</td>	
									<td>
										<a id="btn" href="index.php?page=plugin&status='.$status.'&login='.$login.'"">Plugins</a>
									</td>		
									<td>
										<a id="btn" href="index.php?page=ami&status='.$status.'&login='.$login.'"">Amis</a>
									</td>	
									<td>
										<a id="btn" href="index.php?page=equipe&status='.$status.'&login='.$login.'"">Equipe</a>
									</td>	
									<td>
										<a id="btn" href="index.php?page=forum&status='.$status.'&login='.$login.'"">Forum</a>
									</td>
									<td>
										<a id="btn" href="index.php?page=deconnexion&status='.$status.'&login='.$login.'"">Deconnexion</a>
									</td>
									</tr>
								</table>
							</div>
						</center>';							
				}
				else {
			echo'<center>
					<div style=" background-color:#002B82;" id="btn_op">
						<table  style="background-color:#4787F4;">
							<tr>						
								<td>
								<a id="btn" href="index.php?page=accueil">Accueil</a>
								</td>	
								<td>
									<a id="btn" href="index.php?page=carte">Cartes</a>
								</td>	
								<td>
									<a id="btn" href="index.php?page=plugin">Plugins</a>
								</td>		
								<td>
									<a id="btn" href="index.php?page=ami">Amis</a>
								</td>	
								<td>
									<a id="btn" href="index.php?page=equipe">Equipe</a>
								</td>	
								<td>
									<a id="btn" href="index.php?page=forum">Forum</a>
								</td>
								<td>
										<a id="btn" href="index.php?page=connexion">Connexion</a>
									</td>
									<td>
										<a id="btn" href="index.php?page=inscription">Inscription</a>
									</td>
									</tr>
							</table>
						</div>
					</center>';
				}
				

			
	if(isset($_GET['page'])){
		switch($_GET['page']){
			case"accueil":
			if($status == 'Unlog'){
				include_once('vue/accueil.vue.php');
			}
			else{
				include_once('vue/accueil.vue.php');
			}
			
			break;

			case"carte":
			if($status == 'Unlog'){
				include_once('vue/unlog.vue.php');
			}
			else{
				include_once('vue/map.vue.php');
			}
			break;

			case"plugin":
			if($status == 'Unlog'){
				include_once('vue/unlog.vue.php');
			}
			else{
				include_once('vue/plugin.vue.php');
			}
			break;

			case"ami":
			if($status == 'Unlog'){
				include_once('vue/unlog.vue.php');
			}
			else{
				include_once('vue/ami.vue.php');
			}
			break;

			case"equipe":
			if($status == 'Unlog'){
				include_once('vue/unlog.vue.php');
			}
			else{
				include_once('vue/equipe.vue.php');
			}
			break;

			case"forum":
			if($status == 'Unlog'){
				include_once('vue/unlog.vue.php');
			}
			else{
				include_once('vue/test.php');
			}
			break;

			case"connexion":
			include_once('vue/connexion.vue.php');
			break;

			case"inscription":
			include('vue/inscription.vue.php');
			break;

			case"deconnexion":
			include_once('util/logout.php');
			break;
		}

	}
			
		
?>
	</body>


</html>

	


