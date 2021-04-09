<?php
    if (isset($_POST['registration'])) {
        $authentication->register(
            $_POST['name'],
            $_POST['username'],
            $_POST['email'],
            $_POST['password'],
            $_POST['secondPassword']
        );
    }
?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-8 offset-md-2">
            <form method="post">
                <h1>Привет! Это регистрация!</h1>

                <div class="mb-3">
                    <label for="name" class="form-label">ФИО</label>
                    <input type="text" class="form-control" name="name" id="name" value="test">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Имя пользователя</label>
                    <input type="text" class="form-control" name="username" id="username" value="test">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input type="email" class="form-control" name="email" id="email" value="test@test.ru">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="password" id="password" value="0">
                </div>
                <div class="mb-3">
                    <label for="secondPassword" class="form-label">Повтор пароля</label>
                    <input type="password" class="form-control" name="secondPassword" id="secondPassword" value="0">
                </div>
                <a class="btn btn-warning" href="index.php" role="button">Назад</a>
                <button type="submit" class="btn btn-primary" name="registration">Отправить</button>
            </form>
        </div>
    </div>
</div>