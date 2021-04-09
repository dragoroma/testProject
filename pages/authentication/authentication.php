<?php
    if (isset($_POST['authentication'])) {
        $authentication->auth(
            $_POST['email'],
            $_POST['password']
        );
    }
?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-8 offset-md-2">
            <form method="post">
                <h1>Привет! Это авторизация!</h1>
                <div class="mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input type="email" class="form-control" name="email" id="email" value="test@test.ru">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="password" id="password" value="0">
                </div>
                <a class="btn btn-warning" href="index.php" role="button">Назад</a>
                <button type="submit" class="btn btn-primary" name="authentication">Отправить</button>
            </form>
        </div>
    </div>
</div>