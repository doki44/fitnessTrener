<?php

    include __DIR__ . '/dbFile.php';

    if($_FILES['file']['name'] !== ''){
        $file = $_FILES['file'];
        $name = $file['name'];
        $pathFile = __DIR__ .'./img/'.$name;

        if (!move_uploaded_file($file['tmp_name'], $pathFile)) {
            echo 'Файл не загужен';
        }

        $data = $db->prepare("INSERT INTO `photos` (`path`) VALUES (?)");
        $data->execute([$name]);
    }

    header('Location: ../coach_page.php#clients');
    
?>