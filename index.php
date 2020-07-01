<?php

$error = null;

if(isset($_POST['submit']))
{
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['last_name']);
    $career = htmlspecialchars($_POST['career']);
    $findme0 = 'Ingenieria';
    $findme1 = 'Ingeniería';
    $findme2 = 'ingenieria';
    $findme3 = 'ingeniería';
    $findme4 = 'Ing';
    $findme5 = 'ing';
    $findme6 = 'Ing.';
    $findme7 = 'ing.';
    $pos0 = strpos($career, $findme0);
    $pos1 = strpos($career, $findme1);
    $pos2 = strpos($career, $findme2);
    $pos3 = strpos($career, $findme3);
    $pos4 = strpos($career, $findme4);
    $pos5 = strpos($career, $findme5);
    $pos6 = strpos($career, $findme6);
    $pos7 = strpos($career, $findme7);

    if($pos0 === false && $pos1 === false && $pos2 === false && $pos3 === false && $pos4 === false && $pos5 === false && $pos6 === false && $pos7 === false) 
    {
        $error = '<div class="alert alert-danger" role="alert">Lo siento, esto es solo para ingenieros</div>';
    }
    else
    {
        header('Location: felicitaciones.php?name='.$name.'&last_name='.$lastname.'&career='.$career.'');
    }
}

?>
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
            Feliz Día de la Ingeniería 🎉🎉🎉
        </h2>
    </nav>
    <main>
        <div class="welcome">
            <div class="image"></div>
            <p>
                Un regalo de Ingeniería Informática y Negocios Digitales porque estamos en la mejor Escuela de Ingeniería de todas las Anáhuac.
            </p>
        </div>
        <div class="orange_bg">
            <h2>Por más recuerdos como estos!!!</h2>
            <div class="content">
                <div class="text">
                    <p>
                        Felicidades para todos los ingenieros en su día, para los civiles, electrónicos, informáticos, industriales, mecánicos… que combinan su inteligencia y sabiduría con la ciencia y la tecnología.
                    </p>
                    <p>
                        La verdadera esencia de un ingeniero está en su espíritu de búsqueda y creación, de allí que la palabra ingeniero derive del ingenio. A todos estos profesionales en su día nuestro mayor reconocimiento. ¡Muchas felicidades!
                    </p>
                    
                </div>
                <img src="./src/foto-ingenierias.jpg" alt="escuela ingeniería" />
            </div>
        </div>
        <?php echo $error ?>
        <div class="forms">
            <h2>Para hacer de este día algo hermoso por favor déjanos algunos datos para hacerte un regalo.</h2>
            <form action="/index.php" method="POST">
                <input type="text" name="name" placeholder="Nombre" required/>
                <input type="text" name="last_name" placeholder="Apellido" required/>
                <input type="text" name="career" placeholder="Carrera" required/>
                <button type="submit" name="submit">Enviar</button>
            </form>
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
