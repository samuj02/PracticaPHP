<!DOCTYPE html>
<?php require('conexion.php'); ?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,300&family=Lexend+Deca:wght@200&family=Salsa&display=swap" rel="stylesheet">
    <title>Contacto</title>
</head>
<body>
    <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Formulario</a>
    </div>

    <form action="store.php" name="formulario" method="POST">
        <section>
            <div>
                <label for="name"> Nombre:
                    <input type="text" name="nombre">
                </label>
            </div> 
            <div>
                <label for="email"> Correo:
                    <input type="email" name="correo">
                </label>
            </div>
            <div>
                <label for="gender"> Sexo:
                    <input type="radio" id="radioh" name="sexo" value="hombre" unchecked><label for="radioh">Hombre</label>
                    <input type="radio" id="radiom" name="sexo" value="mujer" unchecked><label for="radiom">Mujer</label>
                </label>
            </div>
            <div>
                <label for="passw"> Contraseña:
                    <input type="password" name="contra">
                </label>
            </div>
            <div>
                <label for="comment">Comentario:</label>
            </div>
            <div>
                <textarea name="comentario" placeholder="Escriba su comentario..." rows="5" cols="40"></textarea>
            </div>

            <div class="selectOp">
                <label>Ciudad:</label>
                <select name="ciudad">
                    <option value="">Elije una opción</option>
                    <option value="guadalajara">Guadalajara</option>
                    <option value="tlaquepaque">San Pedro Tlaquepaque</option>
                    <option value="zapopan">Zapopan</option>
                    <option value="tonala">Tonalá</option>
                </select>
            </div>
            <div>
                <fieldset>
                    <legend>¿Me interesa contratarte?</legend>
                        <input type="checkbox" name="contratar" value="si">
                        <label for="si">Sí</label><br>
                        <input type="checkbox" name="contratar" value="no">
                        <label for="no">No</label><br>
                </fieldset>
            </div>
            <div class="enviar">
                <button class="btn"> Enviar</button>
            </div>

        </section>
    </form>

</body>
</html>