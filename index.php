<?php include('config.php'); ?>
<html>

<head>
    <title>Projeto 01</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Ariel Lopes">
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
</head>

<body>
    <base base="<?php echo INCLUDE_PATH; ?>"/>
    <?php
         $url = isset($_GET['url']) ? $_GET['url'] : 'home';
         switch ($url){
            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                break;
         }
    ?>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    <li><a realtime="outro-menu" href="<?php echo INCLUDE_PATH; ?>outro-menu">Outro menu</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <!--botao-menu-mobile-->
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    <li><a realtime="outro-menu" href="<?php echo INCLUDE_PATH; ?>outro-menu">Outro menu</a></li>
                </ul>
            </nav>
            <!--mobile-right-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
    <div class="container-principal">
    <?php
    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    } else {
        if($url != 'depoimentos' && $url != 'servicos'){
            $pagina404 = true;
            include('pages/404.php');
        }else{
            include('pages/home.php');
        }
    }
    ?>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'contato';
    ?>
    </div><!--container-principal-->
    <footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
        <!--center-->
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>JS/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>JS/scripts.js"></script>
    <?php
        if($url == 'home' || $url == '')
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>JS/slider.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>JS/exemplo.js"></script>
</body>

</html>