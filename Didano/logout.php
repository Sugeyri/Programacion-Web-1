<?php

session_start();
unset ($SESSION['username']);
session_destroy();

echo "<script> window.open('Inicio.php','_self')</script>";

?>