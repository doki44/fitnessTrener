<?php

    session_start();

    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $message = mysqli_real_escape_string($conn, $_POST['notes']);

        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO notes (outgoing_note_id, notes_text)
                                VALUES ({$outgoing_id}, '{$message}')") or die();
        }

    }else{
        header("../login.php");
    }

?>