<?php

try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=alaoui_users;set=utf8', 'root', 'root');

    }catch(Exception $e) 
    {
        die('Erreur'.$e->getMessage());
    }
