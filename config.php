<?php
    session_start();
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/PHPMailerAutoload.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','http://localhost/my-website/');//url amigável
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
    //Conectar com banco de dados
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','my_website');
?>