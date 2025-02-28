<?php
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost:3306', 'root', '', 'bienesraices_crud');
    if (!$db) {
        echo "Error NO se pudo conectar";
        exit;
    }
    return $db;
}