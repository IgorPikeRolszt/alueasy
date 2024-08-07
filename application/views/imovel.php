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

    <div class="imoveis-detalhes">
        <div class="imovel-titulo">
            <h1>Casa de Luxo no Brasil</h1>
            <div class="linha">
                <div>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon>
                    <span>777 visitas</span>
                </div>
                <div>
                    <p>Localização: Jalapão no Tocantins</p>
                </div>
            </div>
        </div>

        <div class="galeria">
            <div class="galeria-img-1">
            <img src="<?= base_url('assets/img/casa-1.png') ?>" alt="">
            </div>
            <div>
            <img src="<?= base_url('assets/img/casa-2.png') ?>" alt="">
            </div>
            <div>
            <img src="<?= base_url('assets/img/casa-3.png') ?>" alt="">
            </div>
            <div>
            <img src="<?= base_url('assets/img/casa-4.png') ?>" alt="">
            </div>
            <div>
            <img src="<?= base_url('assets/img/casa-5.png') ?>" alt="">
            </div>
        </div>

        <div class="pequenos-detalhes">
            <h2>Reserve agora mesmo este local</h2>
            <p>2 Pessoas &nbsp; &nbsp; 2 Banheiros &nbsp; &nbsp; 1 Quarto</p>
            <h4>R$ 777 / Noite</h4>
        </div>

        <hr class="linha-hr">

        <form action="" method="post" class="check-form">
            <div>
                <label for="">Data inicial</label>
                <input type="text" name="" placeholder="Adicione a data inicial">
            </div>
            <div>
                <label for="">Data Final</label>
                <input type="text" name="" placeholder="Adicione a data final">
            </div>
            <div class="campo-pessoas">
                <label for="">Quantidade de pessoas</label>
                <input type="text" name="" placeholder="Adicione a data final">
            </div>
            <button type="submit">Reservar</button>
        </form>

        <ul class="lista-detalhes">
            <li>
                <ion-icon name="home"></ion-icon>Casa Completa
                <span>Você terá toda a casa para você</span>
            </li>
            <li>
                <ion-icon name="ribbon"></ion-icon>SuperHost
                <span>SuperHosts são anfitriões experientes e muito bem avaliados</span>
            </li>
            <li>
                <ion-icon name="location"></ion-icon>Ótima localização
                <span>100% dos hóspedes recentes deram 5 estrelas à localização</span>
            </li>
            <li>
                <ion-icon name="heart"></ion-icon>Excelente experiência
                <span>95% dos hóspedes recentes deram 5 estrelas à experiência</span>
            </li>
        </ul>

        <hr class="linha-hr">

        <p class="imovel-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eos quis ipsum eius facilis corporis perferendis nobis sapiente? Ex aspernatur excepturi at perferendis dolor doloremque, iusto optio nihil veniam ipsam.
        </p>

        <hr class="linha-hr">

        <div class="mapa">
            <h3>Localização no mapa</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2185.19186491476!2d-43.222358978524575!3d-22.911894996079024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e57963eedf3%3A0xaf52199fd71ffebb!2sUniversidade%20Veiga%20de%20Almeida!5e0!3m2!1spt-BR!2sbr!4v1713663080532!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <b>R. Ibituruna, 108 - Maracanã, Rio de Janeiro - RJ, 20271-020</b>
            <p>É como no inferno, só que na Terra.</p>
        </div>

        <hr class="linha-hr">

        <div class="locatario">
        <img src="<?= base_url('assets/img/1706999832895.jfif') ?>" alt="">
            <div>
                <h2>Locatario: Gabriel Petit</h2>
                <p>
                    <span>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon>
                    </span>
                    &nbsp; &nbsp; 777 Classificações
                    &nbsp; &nbsp; Taxa de resposta 100%
                    &nbsp; &nbsp; Tempo esperado de resposta 2 horas
                </p>
            </div>
        </div>

        <a href="" class="contato-locatario">Fale comigo</a>

    </div>

    <div class="container">
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