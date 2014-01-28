
<?php

include 'connection.php';

session_start();
$cpf = $_SESSION ['cpf'];

$conn = Connect ();


print ("CPF = $cpf <br/>");


?>
