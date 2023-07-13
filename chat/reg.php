<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php
    include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>
                <p>Регистрация</p>
                <a href="../index.php">На главную</a>
                </header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Имя</label>
                        <input type="text" name="fname" placeholder="Имя" required>
                    </div>
                    <div class="field input">
                        <label>Фамилия</label>
                        <input type="text" name="lname" placeholder="Фамилия" required>
                    </div>
                </div>
                <label>E-Mail</label>
                <div class="field input">
                <input type="text" name="email" placeholder="E-Mail" required>
                </div>
                <div class="field input">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Пароль" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field">
                    <select class="form__select" name="user_type">
                        <option class="form__option" value="admin">Тренер</option>
                        <option class="form__option" value="user">Клиент</option>
                    </select>
                </div>

                <div class="field image">
                    <label>Выберите изображение</label>
                    <input type="file" name="image" required>
                </div>
                
                <div class="field check">
                    <input class="input-check" type="checkbox" name="check" required>
                    <label>
                        <a class="personal-dann" href="http://kremlin.ru›acts/bank/24154">Я соглашаюсь с политикой в отношении персональных данный</a>
                    </label>
                </div>
                <div class="field-signup btn-signup">
                    <input type="submit" value="Зарегистрироваться">
                </div>
                <div class="link">Есть аккаунт? 
                    <a href="./login.php">Войти</a>
                </div>
            </form>
        </section>
    </div>

    <script src="./js/pass-show-hide.js"></script>
    <script src="./js/signup.js"></script>
</body>
</html>