<?php

    require_once('connexion.php');
    $num = $_GET['num'];
    $request = $db->query("select nomfic from fichier where numfic = '$num' ") or die($bdd->errorInfo());

    $rows=array($request); 

        if($rows == true)
        {
            $row = $request->fetch();
            header('Content-description: File transfer');
            header('Content-type: application/octet-stream');
            header('Content-Disposition: attachment; filename = '.$row['nomfic']);
            header('Content-length: '.filesize('uploads/'.$row['nomfic']));
            ob_clean();
            readfile('uploads/'.$row['nomfic']);
            //header('location: ../Affichage.php');
        }
        else 
        {
            header('location: ../Admin.php');
        }
