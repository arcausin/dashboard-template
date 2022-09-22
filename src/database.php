<?php
function dbConnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=exemple;charset=utf8', 'root', '');

        return $database;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}