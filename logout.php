<?php
session_start();
session_destroy(); // Cierra la sesión

// Redirige al usuario a index.php
header('Location: index.php');
exit();
?>
