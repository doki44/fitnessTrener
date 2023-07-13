<?php

    function console_log($data){ // сама функция
    if(is_array($data) || is_object($data)){
		echo("<script>console.log('php_array: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('php_string: ".$data."');</script>");
	}
}

// вызов функции



    session_start();

    if(isset($_SESSION['unique_id'])){
        include_once "config.php";

        if(isset($_FILES['image'])){
            $img_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $extensions = ['png', 'jpg', 'jpeg'];
            
            if(in_array($img_ext, $extensions) === true){
                $time = time();
                $new_img_name = $time.$img_name;

                console_log($new_img_name);

                if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                    $sql2 = mysqli_query($conn, "INSERT INTO photos (img) VALUES ('{$new_img_name}' ");
                    
                }
            }
        }else{
            echo "Выберите фото";
        }

        // $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        // $message = mysqli_real_escape_string($conn, $_POST['notes']);

        // if(!empty($message)){
        //     $sql = mysqli_query($conn, "INSERT INTO notes (outgoing_note_id, notes_text)
        //                         VALUES ({$outgoing_id}, '{$message}')") or die();
        // }

    }else{
        header("../login.php");
    }

?>