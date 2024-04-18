<?php
    $title = "Главная страница";

    if(isset($_GET['source']) && $_GET['source'] != ""){
        $link = explode("?source=", $_SERVER['REQUEST_URI']);
        $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];

        header('HTTP/1.1 301 Moved Permanently');
        header('Location: '.$redirect);
        exit();
    }
    
    require  "blocks/header.php";
    #include "blocks/header.php";
    #require_once "blocks/header.php";
    #include_once "blocks/header.php";
?>


<h1>Главная страница</h1>


<?php
    #Инфа по серверу
    // phpinfo();


    // echo '<pre>';
    // print_r($_SERVER);
    // echo '</pre>';

    # Определение протокола подключения пользователя
    // echo $_SERVER['HTTPS'];

    // echo $_SERVER['HTTP_HOST'].' - '.$_SERVER['REQUEST_URI'];
    // echo "<br>";

    // echo $_SERVER['HTTP_USER_AGENT'];

    require  "blocks/footer.php";
?>