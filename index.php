<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,300&family=Lexend+Deca:wght@200&family=Salsa&display=swap" rel="stylesheet">
    <title>Indice</title>
</head>
<body>
    <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Formulario</a>
    </div>

    <div class="nombre">
        <h1>Samuel Enrique Jiménez Abrica</h1>
    </div>

    <section>
        <h2>Acerca de mi</h2>
        <!-- Agregar párrafo donde pongan una breve introducción de ustedes mismos.-->
        <p>
            Curso 7to. Semestre de Ingeniería en Computación en el Centro Universitario de Ciencias
            Exactas e Ingenierías en Guadalajara, Jalisco. 
            Me considero una persona dispuesta a aprender lo más que se pueda siempre cada ciclo
            escolar siendo de la mano que también me siento una persona comprometida y dedicada
            en las actividades que se nos otorgen, me gusta hacer las cosas lo mayor bien posible
            aunque haya ocasiones donde la cosa de pone dificil. Me gusta pasar tiempo con mi
            familia y amigos, rodearme de gente que me sume. Me gusta salir de fiesta y ver
            peliculas en mi completa soledad.
        </p>
    </section>
    <section>
        <h2>Mis conocimientos</h2>
        <!-- Crear lista no ordenada con  5 conocimientos como minimo-->
        <ul>
            <li>Lenguaje de programacion C y C++ en un nivel medio.</li>
            <li>Creacion de aplicaciones de escritorio con lenguaje C#.</li>
            <li>Pyhton en sus diversas aplicaciones.</li>
            <li>Configuración de Routers en la particion de redes.</li>
            <li>Bases de Datos a nivel básico.</li>
        </ul>
    </section>
    <section>
        <h2>Mis fortalezas</h2>
        <!--Lista ordenada de mis tres fortalezas, caracteristicas que creo que me distingan-->
        <ol>
            <li>Aprendizaje visual y auditivo.</li>
            <li>Creatividad.</li>
            <li>Humildad.</li>
        </ol>
    </section>
    <section>
        <h2>Proyectos</h2>
        <!-- Realizar una tabla con 3 columnas(NombreP, Lenguaje, descripcion) por lo menos 3 proyectos.-->
        <table>
            <tr>
                <th>Nombre del proyecto</th>
                <th>Lenguaje(s)</th>
                <th>Descripción</th>
            </tr>
            <tr>
                <td>Gestor de almacenamiento</td>
                <td>Python</td>
                <td>Administración de activos en ambiente textíl.</td>
            </tr>
            <tr>
                <td>Sistema de Facturación Electrónica</td>
                <td>C</td>
                <td>Realizar facturas de activos del medio audiovisual.</td>
            </tr>
            <tr>
                <td>Máquinas de cobro y recarga Mi Pasaje</td>
                <td>C++</td>
                <td>Simulación en consola de una máquina de recarga de Mi Pasaje 
                    usando como lógica el de las máquinas de estado finito.
                </td>
            </tr>
        </table>
    </section>
    <section>
        <h2>Persona que admiro</h2>
        <!-- Agregar foto, parrafo con el nombre de la persona en bold  y una breve descripción de quien es-->
        <!-- Agregar enlace hacia un sitio donde se pueda consultar su su información (abrir en otra ventana)-->
        
        <img src="adele.jpg" alt="Adele">
        <h3>Adele</h3>
        <p>
            Adele Laurie Blue Adkins, conocida simplemente como Adele, es una cantautora y multinstrumentista 
            británica. Es una de las artistas musicales con mayores ventas del mundo, con más de 120 millones 
            de ventas entre discos y sencillos.
        </p>
        
        <p>
            <label> Si deseas conocer más sobre esta persona, <a href="https://es.wikipedia.org/wiki/Adele" target="_blank"><strong>¡haz click aquí!</strong></a></label>
        </p>

        <div class="footer">
            <section>
                <p>Contáctame en: <a href="mailto:samuelabrica@gmail.com">samuelabrica@gmail.com</a></p>
            </section>
        </div>
        
    </section>
</body>
</html>