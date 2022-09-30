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
        include "TecnicoRedes.php";
        include "Configuracion.php";
        /*
        $informatico=new Informatico("Gio","Alvarez", "1,64","23","Javascript", "poca");
        $tecnicoRedes=new TecnicoRedes("Manolo","chirimbolo","1,65","24","Java","100%","valor raro");
        $tecnicoRedes->hablar($tecnicoRedes);
        $tecnicoRedes->caminar($tecnicoRedes);
        $tecnicoRedes->programar($tecnicoRedes);
        $tecnicoRedes->hacerOfimatica($tecnicoRedes);
        $tecnicoRedes->repararOrdenador($tecnicoRedes);
        $tecnicoRedes->auditaRedes($tecnicoRedes);*/
        /*$config=new Configuracion("rosa", "NEwsletter", "entorn");
        $config->setColor("azul");
        $config->setNewsletter("nuevaNews");
        $config->setEntorno("entornNew");
        $config->getColor();
        $config->getNewsletter();
        $config->getEntorno();*/
        Configuracion::setColor("rosa");
        Configuracion::setEntorno("entorno1");
        Configuracion::setNewsletter("newsletterx");
        Configuracion::mostrar();

        ?>

    </main>
</body>

</html>