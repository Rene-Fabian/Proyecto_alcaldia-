<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=alcaldia','root','');
    // echo 'Conexión exitosa';
} catch (Exception $e) {
    die ('Error: '.$e->getMessage());
}
