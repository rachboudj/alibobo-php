<?php

function pdo()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=alibobo', "root", "root", array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
        return $pdo;
    } catch (PDOException $error) {
        echo 'Erreur de connexion : ' . $error->getMessage();
        return false;
    }
}