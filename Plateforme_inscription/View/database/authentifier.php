<?php  

	require_once('connexion.php');

	$log = $db->prepare("select * from administrateur where login =? and password =?") or die($bdd->errorInfo());

	$log->execute(array(htmlspecialchars($_POST['login']), md5($_POST['password'])));

	$user = $log->fetch();

		if ($user) 
		{
			session_start();
			$_SESSION['niv'] = $user['niveau'];
			header("location: ../assets/Dashboard.php");
		}
		else
		{
			header('location:../Admin.php');
		}