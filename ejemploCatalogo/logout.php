
<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'Sesion cerrada.';
header('Refresh: 2; URL = index.php');
?>
<button type="submit" href="login.php">Volver</button>
