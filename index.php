<?php
    $title = "Главная страница";
    require  "blocks/header.php";
    #include "blocks/header.php";
    #require_once "blocks/header.php";
    #include_once "blocks/header.php";
?>


<h1>Главная страница</h1>


<!-- Изучение встроенных функций <?php
    //echo date('m-l H:i:s', time() )."<br>";
    // echo date('m-d H:i:s', strtotime('+1 Hour'));
    echo date('m-d H:i:s', strtotime('next Monday'))."<br>";
    

    # функции для работы с массивами
    $array = [5, 7, 3, 6, 10, 2, 31];

    # Удаление элемента (Индексы не меняются)
    unset($array[1]);

    # Обновление массива
    $array = array_values($array);

    # Сортировка массива
    sort($array);

    # Сортировка в обратную сторону
    rsort($array);

    # Размещение элементов в хаотичном порядке
    // shuffle($array)

    # Поиск элемента (Если True - вывод 1, если False - вывод "")
    // if(in_array(5, $array) == "")
    //     echo "Not Found<br>";
    // else
    //     echo "Found<br>";

    # Обрезание массива
    $arr = array_slice($array, 2, 2);
    // var_dump($arr);
    print_r($arr);
    echo "<br>";

    # Объединение массивов
    $arr_1 = [5, 7];
    $arr_2 = [6, 8, 9];
    $arr_3 = array_merge($arr_1, $arr_2);
    print_r($arr_3);
    echo "<br>";

    # Вывод массива
    print_r($array);
    echo "<br>";

    # Получение типа переменной
    $x = '10';
    #$x = floatval($x);
    echo gettype($x)."<br>";
    echo is_numeric($x)."<br>";
    echo is_integer($x)."<br>";
    echo is_double($x)."<br>";

    # Функции для работы со строками
    $str = "Example";

    #Поиск элемента
    echo strpos($str, "a")."<br>";

    # Разбиение строки на массив
    $words = "jonn,bob,alex";
    $arr_words = explode(",", $words);
    print_r($arr_words);

    # Массив в строку    
    echo "<br>".implode(" | ", $arr_words);

    # Массив в строку

    require  "blocks/footer.php";
?> -->

<?php

    require  "blocks/footer.php";
?>