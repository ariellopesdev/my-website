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
    <div class="box-login">
        <?php
            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user,$password));
                if($sql->rowCount() == 1){
                    //Logamos com sucesso.
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $user;
                    $_SESSION['password'] = $password;
                    header('Location: '.INCLUDE_PATH_PAINEL);
                    die();
                }else{
                    //Falhou
                    echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha inválidos!</div>';
                }
            }
        ?>
        <h2>Efetue o login</h2>
        <form method="post">
            <input type="text" name="user" placeholder="Login..." required>
            <input type="password" name="password" placeholder="Senha..." required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div><!--box-login-->
</body>

</html>