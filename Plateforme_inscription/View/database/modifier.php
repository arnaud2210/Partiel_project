<?php  

	require_once('connexion.php');

	$modifier = $db->prepare("update contenu set titre=?, description=?  where idcontent = ?");

	$modifier->execute(array(htmlspecialchars($_POST['titre']), htmlspecialchars($_POST['description']),  $_GET['idcontent']));

	header('location:../Posts.php');