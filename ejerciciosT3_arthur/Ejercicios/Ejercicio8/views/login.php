<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Login</h1>
    <form method="POST" action="../index.php?method=auth">
        <label>Usuario</label><input type="text" value="" name="user"><br>
        <label>Contraseña</label><input type="password" value="" name="password"><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>