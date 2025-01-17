<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <title>Nuevo usuario</title>
</head>
<body>
    <div class="container-user">
        <form action="uploadNewUser.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Nuevo usuario</legend>
                <label for="nameNewUser">Nombre usuario</label>
                <input type="text" name="nameNewUser">
                <label for="nameNew">Nombre completo</label>
                <input type="text" name="nameNew">
                <label for="email">Correo Electronico</label>
                <input type="text" name="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <label for="archivo">Insertar una imagen</label>
                <input type="file" name="archivo[]" id="archivo" multiple="">
                <input type="submit" value="Crear Usuario">
            </fieldset>
        </form>
    </div>
</body>
</html>