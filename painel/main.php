<?php
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
?>
<html>

<head>
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Ariel Lopes">
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
</head>

<body>
    <div class="menu">
        <div class="box-usuario">
            <div class="avatar-usuario">
                <i class="fa fa-user"></i>
            </div><!--avatar-usuario-->
            <div class="nome-usuario">
                <p>Ariel Lopes</p>
                <p>Administrador</p>
            </div><!--nome-usuario-->
        </div><!--box-usuario-->
    </div>
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div><!--menu-btn-->
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-sign-out"></i><span>Sair</span> </a>
            </div>
            <!--loggout-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
</body>

</html>