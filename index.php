<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<?php
    $infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
    $infoSite->execute();
    $infoSite = $infoSite->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $infoSite['titulo']; ?></title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portifólio, painel de controle, painel de noticias, html5, css3, javascript, jquery, mediaquery">
    <meta name="description" content="Este é um site desenvolvido pelos alunos do curso Web Developer Fullstack da Danki Code">
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
    <!-- <div class="sucesso">Formulário enviado com sucesso!</div>
    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif" />
    </div>overlay-loading -->

    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
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
                    <li><a href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
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
            $urlPar = explode('/',$url)[0];
            if($urlPar != 'noticias'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/noticias.php');
            }
        }else{
            include('pages/home.php');
        }
    }
    ?>
    
    </div><!--container-principal-->
    <footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
        <!--center-->
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>JS/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>JS/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>JS/scripts.js"></script>
    <?php
        if($url == 'home' || $url == '')
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>JS/slider.js"></script>
    <?php
        if(is_array($url) && strstr($url[0],'noticias') !== false){
    ?>
        <script>
            $(function(){
                $('select').change(function(){
                    location.href= include_path+"noticias/"+$(this).val();
                })
            })
        </script>
    <?php
    }
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>JS/formularios.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>JS/exemplo.js"></script>
</body>

</html>