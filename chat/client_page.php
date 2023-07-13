<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php
    include_once "php/config.php";
    include __DIR__ . '/workWithFiles/dbFile.php';
?>

<?php
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/pages-style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="../index.php" class="header__logo">Твой фитнес-тренер</a>
                <nav class="header__menu">
                    <ul class="menu__list">
                        <li class="menu__list-item">
                            <a href="users.php" class="logout">Чат</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Выйти</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__burger">
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <section class="top">
        <div class="container">
            <div class="top__inner">
                <p>Добро пожаловать, 
                    <span>
                        <?php echo $row['fname'] . " " . $row['lname']; ?>
                    </span>
                </p>
            </div>
        </div>
    </section>

    <section class="pages-header">
        <div class="container">
            <p class="pages-header__title">Ваши результаты</p>
        </div>
    </section>

    <section class="clients" id="clients">
        <div class="container">
            <div class="clients__inner">
                <form class="addPhoto" method="POST" action="workWithFiles/addFile.php" enctype="multipart/form-data">
                    <div class="field image">
                        <label>Выберите изображение</label>
                        <input type="file" name="file">
                        <input type="submit" value="Загрузить">
                    </div>
                </form>

                <?php foreach($result as $img): ?>

                    <img class="list__img" src="./workWithFiles/img/<?= $img['path'] ?>" width="400px">

                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="notes" id="notes">
        <div class="container">
            <div class="notes__inner">
                <form class="notes__form" action="#" autocomplete="off">
                    <input class="notes__form-input" type="text" name="notes" placeholder="Введите текст заметки...">
                    <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                    <button class="notes__form-btn">Добавить</button>
                </form>

                <div class="notes-list">

                </div>
            </div>
        </div>
    </section>
    
    <script src="js/notes.js"></script>
    <!-- <script src="js/photos.js"></script> -->

</body>
</html>