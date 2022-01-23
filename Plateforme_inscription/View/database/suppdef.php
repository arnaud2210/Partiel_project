<?php

require_once('connexion.php');

$insert2 = $db->prepare('delete from supptable where idcontent = ?') or die($bdd->errorInfo());

$insert2->execute(array($_GET['idcontent']));

header('location:../suppression.php');
