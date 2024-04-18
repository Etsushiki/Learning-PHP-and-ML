<!-- Работа с файлами -->
<!-- <?php
    # Открытие файла w - для записи, r - для чтения, wr - для записи и чтения
    # a - append
    // $file = fopen("text.txt", "a");

    // #Запись в файл 
    // fwrite($file, "\nExample text\nHello");

    // # Закрытие файла
    // fclose($file);

    $filename = "text.txt";

    $file = fopen($filename, "r");

    # считывание файла
    $content = fread($file, filesize($filename));

    fclose($file);

    echo "<pre>".$content."</pre><br>";

    //file_put_contents("a.txt", "Example\nHello");
    //echo file_get_contents("a.txt");

    echo file_exists("a.txt")."<br>";

    # Переименование файла
    // rename("a.txt", "new_name.txt");

    # Удаление файла
    //unlink("new_name.txt");

    echo __FILE__."<br>";
    echo fileperms(__FILE__);
    # изменение прав доступа 0777 - доступ для всех, 0000 - заблокирован доступ
    chmod(__FILE__, 0777);

    require  "blocks/footer.php";
?> -->