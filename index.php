<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro PQR</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validateForm() {
            var correo = document.forms["registroForm"]["get_correoelectronico"].value;
            if (correo.indexOf("@") === -1) {
                alert("Por favor, ingresa un correo electrónico válido que contenga '@'.");
                return false; // Evita el envío del formulario
            }
            return true; // Permite el envío del formulario
        }
    </script>
</head>
<body>
    <form name="registroForm" action="inserta.php" method="POST" onsubmit="return validateForm()">
        <table>
            <tr>
                <th>Nombre Usuario</th>
                <td>
                    <input type="text" name="get_nombre" placeholder="Ingresa tu nombre" required>
                </td>
            </tr>
            <tr>
                <th>Correo Electrónico</th>
                <td>
                    <input type="text" name="get_correoelectronico" placeholder="Ingresa tu correo" required>
                </td>
            </tr>
            <tr>
                <th>Contraseña</th>
                <td>
                    <input type="password" name="get_contraseña" placeholder="Ingresa tu contraseña" required>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="2">
                    <input type="submit" name="bsubmit" value="Enviar">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="reset" name="reiniciar" value="Reiniciar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
