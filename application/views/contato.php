<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


<nav id="navBar" class="navalu">
        <a href="<?= base_url('home_site') ?>"></div><img src="<?= base_url('assets/img/logo alueasy.png') ?>" alt="" class="logo"></a>
        <ul class="nav-links">
            <li><a href="<?= base_url('home_site/categorias') ?> "title="">Lugares Populares</a></li>
            <li><a href="<?= base_url('home_site/sobre') ?> "title="">Sobre</a></li>
            <li><a href="<?= base_url('home_site/novidades') ?> "title="">Novidades</a></li>
        </ul>
        <a href="<?= base_url('home_site/contato') ?>" title="" class="cadastro-btn">Contato</a>

        <!--MENU CELULAR SITE -->
        <ion-icon name="menu-outline" class="menu-outline" onclick="menucelular()"></ion-icon>
        <!--MENU CELULAR SITE-->

    </nav>

    <div class="formulario">
        <h2>Entre em Contato</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

    

    <div>
        <footer class="rodape">
            <a href="https://www.facebook.com/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://www.instagram.com/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="https://www.linkedin.com/feed/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
            <a href="https://www.youtube.com/" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
            <hr>

            <p>Todos os direitos reservados © 2024</p>
        </footer>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>