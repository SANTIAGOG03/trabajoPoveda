<?php
ob_start(); // Inicia el almacenamiento en búfer de salida
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["get_nombre"];
    $correoelectronico = $_POST["get_correoelectronico"];
    $contraseña = $_POST["get_contraseña"];

    $checkSql = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' OR correoelectronico='$correoelectronico'";
    $checkResult = mysqli_query($conx1, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "La persona ya existe. Por favor, utiliza otro nombre de usuario o correo electrónico.</br>";
    } else {
        $insertsql = "INSERT INTO usuarios (nombre_usuario, correoelectronico, contraseña) VALUES ('$nombre_usuario', '$correoelectronico', '$contraseña')";

        $res = mysqli_query($conx1, $insertsql);

        if ($res) {
            header("Location: thanks.html");
            exit(); // Asegúrate de que no se ejecute más código después de la redirección
        } else {
            echo "Error al insertar datos: " . mysqli_error($conx1);
        }
    }

    mysqli_close($conx1);
}
ob_end_flush(); // Envía el contenido almacenado en el búfer y apaga el almacenamiento en búfer
?>
