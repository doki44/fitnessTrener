<?php

    session_start();

    include_once "config.php";

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($user_type)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");

            if(mysqli_num_rows($sql) > 0){
                echo "$email - Email уже существует";
            }else{
                
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ['png', 'jpg', 'jpeg'];
                    
                    if(in_array($img_ext, $extensions) === true){
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                          $status = "В сети";
                          $random_id = rand(time(), 10000000);
                          $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status, user_type) 
                                               VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}', '{$user_type}')");                       
                          if($sql2){
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "Успех";
                            }
                          }else{
                            echo "Что-то пошло не так...";
                          }
                        } 
                    }else{
                        echo "Формат .png, .jpeg, .jpg";
                    }
                }else{
                    echo "Выберите фото";
                }

            }
        }else{
            echo "$email - Hеккоректный email";
        }
    }else{
        echo "3аполните все поля";
    }
    
?>