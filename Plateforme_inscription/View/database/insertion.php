<?php

		$nom_fichier = $_FILES['file']['name'];
		$extension_fichier = strrchr($nom_fichier, ".");

		$nom_fichier_tmp = $_FILES['file']['tmp_name'];

		$dest_fichier = 'uploads/'.$nom_fichier;

		$authorize_extensions = array('.pdf', '.PDF');
		
		if (in_array($extension_fichier, $authorize_extensions)) 
		{
			if (move_uploaded_file($nom_fichier_tmp, $dest_fichier)) 
			{	
				
				require_once('connexion.php');

                		$insert1 = $db->prepare('insert into fichier(nomfic) values(?)') or die($bdd->errorInfo());

                		$insert1->execute(array($nom_fichier));


				$insert2 = $db->prepare('insert into candidat(nom, prenom, naissance, sexe, nationnalité, numserie, bacsession) values(?,?,?,?,?,?,?)') or die($bdd->errorInfo());
	
				$insert2->execute(array(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['naissance']), 
								    htmlspecialchars($_POST['sexe']), htmlspecialchars($_POST['nationnalité']), htmlspecialchars($_POST['serie']), htmlspecialchars($_POST['bacsession'])));
				header('location:../Formulaire.php');
			} 
			else 
			{
				header('location:../Formulaire.php');	
			}
		}
