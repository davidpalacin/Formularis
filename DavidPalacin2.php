<?php
$name = $_POST["name"];
$coments = $_POST["coments"];   
$rating = $_POST["rating"];   
$fecha = date("Y-m-d");
$id = $_POST['id'];

// Datos para conectar a la base de datos.
$servername = "localhost";
$database = "admin";
$username = "root";
$password = "root";

// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo 'Se ha conectado a la bd'; 
echo '<br>';

$query = "INSERT INTO criticas (critica_music_id,critica_fecha, critica_nombre, critica_comentario,critica_puntacion) VALUES ('$id','$fecha','$name','$coments','$rating')";   

  $result = mysqli_query($db,$query) or die(mysqli_error($db));

echo "Los datos han sido guardados con exito";  
?>
