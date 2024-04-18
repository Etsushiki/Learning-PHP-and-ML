<?php
    $title = "Главная страница";
    require  "blocks/header.php";
    #include "blocks/header.php";
    #require_once "blocks/header.php";
    #include_once "blocks/header.php";
?>


<h1>Главная страница</h1>


<?php
    //echo date('m-l H:i:s', time() )."<br>";
    // echo date('m-d H:i:s', strtotime('+1 Hour'));
    echo date('m-d H:i:s', strtotime('next Monday'));
    require  "blocks/footer.php";
?>

