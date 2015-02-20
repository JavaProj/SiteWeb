<?php 

$cnx=mysqli_connect('localhost','root','','paintball') or die ("Erreur".mysqli_error($cnx));

if(!empty($_POST['loginconnexion']) && !empty($_POST['passwordconnexion']))
{
	$login = mysqli_real_escape_string($cnx, $_POST['loginconnexion']);
	$password = mysqli_real_escape_string($cnx, $_POST['passwordconnexion']);
	$passwordMd5 = md5($password);
	$verificationID = mysqli_query($cnx, "SELECT * FROM utilisateur WHERE login = '$login' AND password = '$passwordMd5'"); 
	$resultat = mysqli_num_rows($verificationID);

	if($resultat == 1)
	{
		echo $login;		
	}
		


	else
	{
		echo "invalide";
	}
	
}

else
{
	echo "invalide";
}

?>