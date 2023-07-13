<?php
    include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>
                <p>Авторизация</p>
                <a href="../index.php">На главную</a>
            </header>
            <form action="#">
                <div class="error-txt"></div>
                <label>E-Mail</label>
                <div class="field input">
                <input type="text" name="email" placeholder="E-Mail">
                </div>
                <div class="field input">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Пароль">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field-login btn-login">
                    <input type="submit" value="Войти">
                </div>
                <div class="link">Нет аккаунта? 
                    <a href="./reg.php">Зарегистрироваться</a>
                </div>
            </form>

        </section>
    </div>
    <script src="./js/pass-show-hide.js"></script>
    <script src="./js/login.js"></script>
</body>
</html>