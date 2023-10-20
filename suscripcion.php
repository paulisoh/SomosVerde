<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inscripción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<h2>Formulario de Inscripción</h2>
<div class="container-fluid">
<form action="suscrip.php" method="POST">
    <label >Nombre:</label>
    <input type="text" class="form-control" name="nombre" required><br><br>

    <label >Correo Electrónico:</label>
    <input type="email" class="form-control" name="correo" required><br><br>

    <label >Contraseña:</label>
    <input type="password" class="form-control" name="pass" required><br><br>
    <button type="submit" class="btn btn-success" value="Registrarse" >Suscribirse</button>
    
</form>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
