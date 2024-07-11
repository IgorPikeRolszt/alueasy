<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>


    <nav id="navBar" class="navalu">
        <a href="<?= base_url('home_site') ?>"></div><img src="<?= base_url('assets/img/logo alueasy.png') ?>" alt="" class="logo"></a>
        <ul class="nav-links">
            <li><a href="<?= base_url('home_site/categorias') ?> "title="">Lugares Populares</a></li>
            <li><a href="<?= base_url('home_site/sobre') ?>" title="">Sobre</a></li>
            <li><a href="<?= base_url('home_site/novidades') ?> "title="">Novidades</a></li>
        </ul>
        <a href="<?= base_url('home_site/contato') ?>" title="" class="cadastro-btn">Contato</a>

        <!--MENU CELULAR SITE -->
        <ion-icon name="menu-outline" class="menu-outline" onclick="menucelular()"></ion-icon>
        <!--MENU CELULAR SITE-->

    </nav>

    <section id="sobre" class="sobresobre">
        <h2>Sobre nós</h2>
        <p> Em 2020, durante um verão marcado pela necessidade de escapar do ambiente urbano em meio à pandemia, um grupo de amigos entusiastas por viagens se uniu para criar a Alueasy, uma empresa inovadora de aluguel de casas para veraneio. Cada um desses amigos tinha experiência em diferentes áreas, desde hospitalidade e tecnologia até marketing e design.

            A ideia surgiu quando perceberam a dificuldade que muitas pessoas enfrentavam ao tentar encontrar e reservar casas de férias de forma simples e segura. Muitos sites existentes eram complicados de usar, e a comunicação com os proprietários nem sempre era clara. Decidiram, então, criar uma plataforma online intuitiva que conectasse diretamente os viajantes aos proprietários de casas para aluguel de temporada.
            
            Os fundadores da Alueasy passaram meses desenvolvendo a plataforma, trabalhando arduamente para garantir que fosse fácil de usar tanto para os proprietários que desejavam listar suas propriedades quanto para os viajantes em busca do refúgio perfeito. Investiram tempo em construir parcerias com proprietários confiáveis e verificaram pessoalmente cada propriedade para garantir sua qualidade e conformidade com os padrões de segurança.
            
            No lançamento da Alueasy, sua abordagem transparente e foco na experiência do usuário rapidamente cativou o mercado. Os viajantes apreciaram a variedade de opções e a clareza nas informações, enquanto os proprietários valorizaram a simplicidade do processo de listagem e a assistência fornecida pela equipe da Alueasy.
            
            Com o tempo, a Alueasy expandiu sua presença, agregando mais propriedades em destinos populares de férias e oferecendo serviços adicionais, como recomendações personalizadas e suporte ao cliente 24 horas por dia. A empresa também investiu em recursos de segurança e em medidas para garantir a satisfação tanto dos hóspedes quanto dos proprietários.
            
            Hoje, a Alueasy é uma das principais plataformas de aluguel de casas para veraneio, conhecida por sua transparência, qualidade e compromisso em tornar as férias dos clientes memoráveis e livres de estresse. Sua jornada desde 2020 reflete a capacidade de transformar uma ideia simples em uma empresa bem-sucedida, baseada na paixão por viajar e na busca por oferecer experiências autênticas a todos que desejam escapar da rotina.</p>
    </section>
    

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