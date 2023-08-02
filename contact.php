<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por contactarme - Edgardo Valladares</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <img class="banner" src="img/banner.jpg" alt="banner">
    </header>
    <main>
    <section>
    <div id="miDiv">
        <h1>¡Gracias por contactarme!</h1>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];

                echo "<p>Nombre: $name</p>";
                echo "<p>Correo: $email</p>";
                echo "<p>Teléfono: $phone</p>";
                echo "<p>Mensaje: $message</p>";
            }
        ?>
        <button class="btn-link" onclick="window.location.href='index.html'">Regresar</button>
    </div>  
        </section>
    </main>
    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com/edgardojvalladares" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/edgardovalladares" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.twitter.com/edgardojrv" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.youtube.com/@edgardovall/videos" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="https://www.tiktok.com/@edgardojvalladaress" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-tiktok"></i>
            </a>
        </div>
        <p>&copy; 2023 Edgardo Valladares | Catacamas, Olancho, Honduras | Todos los derechos reservados</p>
    </footer>
</body>
</html>
