<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Авторизация</h1>
<form action="vendor/authorization.php" method="post">
    <div class="col" style="margin-bottom:5px;">
      <input type="text" id="login" name="login" placeholder="Логин" >
    </div>
    <div class="col" style="margin-bottom:5px;">
      <input type="text"  id="password" name="password" placeholder="Пароль" >
    </div>
      <button type="submit">Авторизация</button>
    </div>
    <?php 
    if ($_SESSION['message']){
        echo '<p>' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>