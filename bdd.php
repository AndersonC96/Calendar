<?php
    try{
        $dbd=new PDO('mysql:host=localhost;dbname=calendar;charset=utf8', 'root', '');
    }
    catch(Exception $e){
        die('Error :'.$e->getMensage());
    }
?>