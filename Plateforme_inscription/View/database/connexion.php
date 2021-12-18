<?php

    try 
    {
        $db = new PDO("mysql:host=localhost;dbname=concours;charset=utf8","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //echo "connexion réussie";
    } 
    catch (\Throwable $th) 
    {
        die("Erreur de connexion : ".$th->getMessage());
    }