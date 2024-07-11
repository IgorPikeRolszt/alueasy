<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imovel</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>


    <nav id="navBar" class="navalu">
        <a href="<?= base_url('home_site') ?>"></div><img src="<?= base_url('assets/img/logo alueasy.png') ?>" alt="" class="logo"></a>
        <ul class="nav-links">
            <li><a href="<?= base_url('home_site/categorias') ?>" title="">Lugares Populares</a></li>
            <li><a href="<?= base_url('home_site/sobre') ?>" title="">Sobre</a></li>
            <li><a href="<?= base_url('home_site/novidades') ?> "title="">Novidades</a></li>
        </ul>
        <a href="<?= base_url('home_site/contato') ?>" title="" class="cadastro-btn">Contato</a>

        <!--MENU CELULAR SITE -->
        <ion-icon name="menu-outline" class="menu-outline" onclick="menucelular()"></ion-icon>
        <!--MENU CELULAR SITE-->

    </nav>

    <div class="container">

<div class="lista-imoveis">

    <div class="conteudo-novidades">


        <div class="imovel">
            <div class="imovel-img">
                <a href="">
                <img src="<?= base_url('assets/img/rock-in-rio-sunset-2019-ariel-martini-696x385.jpg') ?>" class="fotos-novidades" alt="">
                </a>
            </div>

            <div class="imovel-info">
                <h3>CIDADE DO ROCK!</h3>
                <p>Após anuncio de artistas internacionais para o evento Rock in Rio, a cidade maravilhosa espera receber cerca de 4 milhoes de  pessoas dentro dos 7 dias de evento.

                </p>
                </div>

            </div>
            <div class="imovel">
                <div class="imovel-img">
                    <a href="">
                    <img src="<?= base_url('assets/img/ivete-carnaval1.png') ?>"  class="fotos-novidades" alt="">
                    </a>
                </div>

                <div class="imovel-info">
                    <h3>E OS FOLIÕES JÁ NAO AGUENTAM MAIS ESPERAR!!</h3>
                    <p>Depois de um ano de muito aguardo, foliões de todos os locais do país se reunem em Salvador - BA para curtir seguidos dias de festa

                    </p>
                    </div>

                </div>
                <div class="imovel">
                    <div class="imovel-img">
                        <a href="">
                        <img src="<?= base_url('assets/img/comidas-festa-junina.jpg') ?>" class="fotos-novidades" alt="">
                        </a>
                    </div>

                    <div class="imovel-info">
                        <h3>PULA FOGUEIRA, AIAI!</h3>
                        <p>Pegue usa espiga de milho, seu blusão quadriculado e venha curtir o arraiá de Capina Grande-PB

                        </p>
                        </div>

                    </div>
                    <div class="imovel">
                        <div class="imovel-img">
                            <a href="">
                            <img src="<?= base_url('assets/img/desfile-oktoberfest-blumenau-transmissao-ao-vivo-nsc-total-foto-patrick-rodrigues-1.jpg') ?>" alt="">
                            </a>
                        </div>
    
                        <div class="imovel-info">
                            <h3>BEBER, CAIR E LEVANTAR</h3>
                            <p>Contando com 7 dias de Cervejas, Salsinha e muita música, a Oktoberfest da cidade de Blumenal-SC promete ser a maior dos ultimos 20 anos, não perca essa aportunidade e reserve já sua diária
    
                            </p>
                            </div>
    
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
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

</html>