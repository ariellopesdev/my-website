<?php
if (isset($_GET['loggout'])) {
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
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php
                if ($_SESSION['img'] == '') {
                ?>
                    <div class="avatar-usuario">
                        <i class="fa fa-user"></i>
                    </div>
                    <!--avatar-usuario-->
                <?php } else { ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
                    </div>
                    <!--avatar-usuario-->
                <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div>
                <!--nome-usuario-->
            </div>
            <!--box-usuario-->
            <div class="items-menu">
                <h2>Cadastro</h2>
                <a href="">Cadastrar Depoimento</a>
                <a href="">Cadastrar Serviços</a>
                <a href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a href="">Listar Depoimento</a>
                <a href="">Listar Serviços</a>
                <a href="">Listar Slides</a>
                <h2>Administração do Painel</h2>
                <a href="">Editar Usuário</a>
                <a href="">Adicionar Usuários</a>
                <h2>Configuração Geral</h2>
                <a href="">Editar</a>
            </div>
            <!--items-menu-->
        </div>
        <!--menu-wraper-->
    </div>
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
            <!--menu-btn-->
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-sign-out"></i><span>Sair</span> </a>
            </div>
            <!--loggout-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
    <div class="content">
        <div class="box-content left w100">
            <h2><i class="fa fa-home"></i>Painel de Controle - <?php echo $nomeEmpresa ?></h2>
            <div class="box-metricas">
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Usuário Online</h2>
                        <p>10</p>
                    </div>
                    <!--box-metrica-wraper-->
                </div>
                <!--box-metrica-single-->
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Total de Visitas</h2>
                        <p>100</p>
                    </div>
                    <!--box-metrica-wraper-->
                </div>
                <!--box-metrica-single-->
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Visitas Hoje</h2>
                        <p>3</p>
                    </div>
                    <!--box-metrica-wraper-->
                </div>
                <!--box-metrica-single-->
                <div class="clear"></div>
            </div>
            <!--box-metricas-->
        </div>
        <!--box-content-->
        <!--
    <div class="box-content left w100">

    </div>
    <div class="box-content left w50">

    </div>
    <div class="box-content right w50">

    </div>
    -->
        <div class="clear"></div>
    </div>
    <!--content-->
    <script src="<?php echo INCLUDE_PATH ?>JS/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>JS/main.js"></script>
</body>

</html>