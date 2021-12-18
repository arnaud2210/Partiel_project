<?php  
	
	require_once('connexion.php');

 	$motRechercher='/';

  	if (isset($_POST['mot']))
  	{
    	$motRechercher = $_POST['mot'];
  	}

  	$search = $db->query("  select* FROM v_candidature where libserie like '%$motRechercher%'
                            union
                            select* FROM v_candidature where sexe like '%$motRechercher%'");