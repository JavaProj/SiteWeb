<?php

function connexion()
{
/**
*Fonction de connexion � la bdd
*/
$cnx=mysql_connect('localhost','root','');
mysql_select_db('paintball',$cnx);
   
?>

