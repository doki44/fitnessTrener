<?php

    session_start();

    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $output = "";
        $sql = "SELECT * FROM notes WHERE (outgoing_note_id = {$outgoing_id})";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_note_id'] === $outgoing_id){
                    $output .= '<ul class="notes__list">
                                    <li class="notes__list-item">
                                        <p>'. $row['notes_text'] .'</p>
                                    </li>
                                </ul>';
                }
            }
            echo $output;
        }

    }else{
        header("../login.php");
    }

?>