
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->
    <?php 
    session_start();
    
    ?>
    <form>
        
        <img src="<?= $_SESSION['user']['image'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;">Hello, <?= $_SESSION['user']['first_name'] ?> <?= $_SESSION['user']['last_name'] ?> <h2>
        <p><a href="table.php">Таблица всех зарегистрированых пользователей</a></p>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>