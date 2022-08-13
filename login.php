<?php

$dbhost = "localhost"; 
$dbuser = "u116286923_test";
$dbpass = "Command10";
$dbname = "u116286923_test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die("No hay conexión:".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    //header("Location: pagina.html)
    header('Location: https://lovefinderproject.herokuapp.com/index.html');
    echo "Bienvenido: " .$nombre;
    die();
}else if ($nr == 0){
    // header("Location: pagina.html);
    echo "No ingreso, usuario no existe.";
}

?>