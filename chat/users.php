<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php
    include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="users">

            <?php

                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                
                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);    
                }

            ?>

            <header>
                <div class="content">
                    <img src="php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span>
                            <?php
                                echo $row['fname'] . " " . $row['lname'];
                            ?>
                        </span>
                        <p>
                            <?php
                                echo $row['status'];
                            ?>
                        </p>
                    </div>
                </div>
                <?php
                    if($row['user_type'] == 'admin'){
                        echo '<a href="coach_page.php" class="logout">В дневник</a>';
                    }else{
                        echo '<a href="client_page.php" class="logout">В дневник</a>';
                    }
                ?>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Выйти</a>
            </header>
            <div class="search">
                <span class="text">Выберите пользователя для начала общения</span>
                <input type="text" placeholder="Введите имя для поиска...">
                <button>
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="users-list">
                
            </div>
        </section>
    </div>

    <script src="./js/users.js"></script>
</body>
</html>