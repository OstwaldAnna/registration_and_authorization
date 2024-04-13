
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Регистрация</h1>
<form action="vendor/registration.php" method="post">
    <div class="col" style="margin-bottom:5px;">
        <input type="text"  id="name" name="name" placeholder="Имя" >
    </div>
    <div class="col" style="margin-bottom:5px">
        <input type="text" id="login" name="login" placeholder="Логин"> 
    </div>
    </div>
    <div class="col" style="margin-bottom:5px">
        <input type="email" id="email" name="email" placeholder="you@example.com">
    </div>
    <div class="col" style="margin-bottom:5px">
        <input type="text" id="password" name="password" placeholder="Пароль" >
    </div>
    <div class="col" style="margin-bottom:5px">
        <input type="text" id="password_confirm" name="password_confirm" placeholder="Повторите пароль" >
    </div>
    <button type="submit">Зарегистрироваться</button>
    <?php 
        if ($_SESSION['message']){
            echo '<p>' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
    ?>
</form>
</body>
</html>