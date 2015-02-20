<?php 
$cnx=mysqli_connect('localhost','root','','paintball') or die ("Erreur".mysqli_error($cnx));

$x = FALSE;

if(!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]))
{

	if($x == 0 && strlen($_POST["login"]) > 3 && strlen($_POST["login"]) <= 32)
	{
		$login = mysqli_real_escape_string($cnx, $_POST["login"]);
	}	
	else
	{
		$x = TRUE;	
	}

	if($x == 0 && strlen($_POST["password"]) > 4 && strlen($_POST["password"]) <= 32 )
	{
		$password = mysqli_real_escape_string($cnx, $_POST["password"]);
		$passwordMd5 = md5($password);
	}
	
	else
	{
		$x = TRUE;
	}


	if($x == 0 && strlen($_POST["nom"]) <= 32 )
	{
		$nom = mysqli_real_escape_string($cnx, $_POST["nom"]);
	}
	
	else
	{
		$x = TRUE;
	}


	if($x == 0 && strlen($_POST["prenom"]) <= 32 )
	{
		$prenom = mysqli_real_escape_string($cnx, $_POST["prenom"]);
	}
	
	else
	{
		$x = TRUE;
	}


	if($x == 0 && strlen($_POST["email"]) <= 32 )
	{
		$email = mysqli_real_escape_string($cnx, $_POST["email"]);
	}
	
	else
	{
		$x = TRUE;
	}


	if($x == 0 && strlen($_POST["telephone"]) <= 12 )
	{
		$telephone = mysqli_real_escape_string($cnx, $_POST["telephone"]);
	}
	
	else
	{
		$x = TRUE;
	}
	
	if($x == FALSE)
{
	mysqli_query($cnx, "INSERT INTO utilisateur VALUES ('', '$login', '$passwordMd5', '$nom', '$prenom', '$email', '$telephone', 'membre')");

	echo "valide";
}

}

else
{	
	$x = TRUE;
	echo "invalide";
}



?>
