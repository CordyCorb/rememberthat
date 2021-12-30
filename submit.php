<?php
    $data_file = fopen("data.txt", "w");

    $name = $_POST["name"];
    $message = $_POST["message"];
    $text_to_write = $name . "" . $message;

    fwrite($data_file, $text_to_write);

    fclose($data_file);
?>