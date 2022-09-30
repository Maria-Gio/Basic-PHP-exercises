<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrera</title>
</head>

<body>
    <main>
        <?php
        include "Coche.php";
        include "Persona.php";
        include "Informatico.php";
        $informatico=new Informatico("Gio","Alvarez", "1,64","23","Javascript", "poca");
        $informatico->hablar($informatico);
        ?>

    </main>
</body>

</html>