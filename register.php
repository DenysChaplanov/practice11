<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Имя</label>
        <input type="text" name="first_name" placeholder="Введите свое имя">
        <label>Фамилия</label>
        <input type="text" name="last_name" placeholder="Введите свою фамилию">
        <label>Роль</label>
        <br><select name = "id_role">
        <option VALUE="1">User</option>
        <option VALUE="2">Admin</option> 
        </select></br>
        <label>Изображение профиля</label>
        <input type="file" name="image">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Загистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
        </p>
    </form>

</body>
</html>