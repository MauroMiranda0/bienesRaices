<?php
require 'app.php';

function incluirTemplate($nombre, $inicio = false){
    include "../includes/templates/$nombre.php";
}