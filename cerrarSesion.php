<?php
// Mostramos la sesion
session_start();
//Destruimos la sesion
session_destroy();
header("Location: index.php");
?>