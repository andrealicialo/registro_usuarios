<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="register.php" method="POST" id="registroForm">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            
            <label>Primer Apellido:</label>
            <input type="text" name="primer_apellido" required>
            
            <label>Segundo Apellido:</label>
            <input type="text" name="segundo_apellido" required>
            
            <label>Correo Electrónico:</label>
            <input type="email" name="correo" required>
            
            <label>Celular:</label>
            <input type="tel" name="celular" pattern="[0-9]{10}" required>
            
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            
            <label>Repetir Contraseña:</label>
            <input type="password" name="confirm_password" required>
            
            <label>
                <input type="checkbox" name="terminos" required>
                Acepto los <a href="terminos.html">Términos y Condiciones</a>
            </label>
            
            <button type="submit">Registrarse</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
