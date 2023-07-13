<?php

    $conn = mysqli_connect("localhost", "root", "", "chat");
    if (!$conn) {
        echo "Connect" . mysqli_connect_error();
    }

?>