<?php

try {


    $pdo= new PDO('mysql:dbname=cvcontact;host=localhost','root','root');
   
   } catch (Exception $e) {
       die('Erreur : ' . $e->getMessage());
   }
   