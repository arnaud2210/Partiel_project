<?php

    require_once('connexion.php');

    $insert2 = $db->prepare('insert into contenu(titre, description, niveau) values(?,?,?)') or die($bdd->errorInfo());

    $insert2->execute(array(htmlspecialchars($_POST['titre']), htmlspecialchars($_POST['description']),$_GET['niveau']));

    header('location:../Posts.php');
