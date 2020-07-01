<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feliz Día Ingeniería</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <img src="./src/logo-anahuac.png">
        <h2>
            Felicitaciones Ingeniero!!!
        </h2>
    </nav>
    <main>
        <div class="congrats">
            <?php
               echo 
               '<h2>Felicitaciones en este Día del Ingeniero a '.$_POST['name'].' '.$_POST['last_name'].'!!! 👷🏻‍♂️👷🏻‍♀️👨🏻‍💻👩🏻‍💻</h2>
                <p>A pesar de haber estado pasando por momentos difíciles en estos últimos tiempos, te mereces un momento de alegría como este pero también quiero darte ánimos para que te sigas superando en cualquier lugar en el que ahorita te encuentres. Quiero que recuerdes siempre que tú, '.$_POST['name'].' '.$_POST['last_name'].' eres lo mejor de dos mundos, eres la unión de las ciencias y de la creatividad lo que te convierte en un soñador con el poder de materializar tu sueño. Te deseo muchos ánimos y no dejes que una pandemia te detenga de ser productivo.</p>
                <p>Esperamos poder vernos futuro ingeniero en '.$_POST['career'].'</p>';
            ?>
        </div>
    </main>
    <footer>
        <div>
            <a href="https://www.anahuac.mx/cancun/"><img src="https://cdn2.hubspot.net/hubfs/2661669/logo-anahuac-footer.svg" alt="Anahuac Web Site"/></a>
            <a href="https://www.facebook.com/ingenieria.anahuaccancun/"><img src="./src/facebook.svg" alt="Anahuac facebook"/></a>
            <a href="https://www.instagram.com/ingenieria_anahuac_cancun/"><img src="./src/instagram.svg" alt="Anahuac instagram"/></a>
        </div>
        <div>
            <p>By Alejandro Ortega and Sebastian Consuegra</p>
        </div>
    </footer>
</body>
</html>