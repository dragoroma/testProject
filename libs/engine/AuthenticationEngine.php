<?php

class AuthenticationEngine
{
    function auth($email, $password)
    {
        if (!(strlen($email) > 0 && strlen($password) > 0)) {
            echo '<div class="alert alert-danger" role="alert">Есть пустые поля</div>';
            return;
        }

        $user = R::findOne('users', 'email = ? && password = ?', [
            $email,
            $password
        ]);

        if ($user == null) {
            echo '<div class="alert alert-danger" role="alert">Пользователь не найден</div>';
            return;
        }

        $_SESSION['id'] = $user['id'];
        header('Location: index.php');

    }

    function register($name, $username, $email, $password, $secondPassword)
    {
        if (!(strlen($name) > 0 && strlen($username) > 0 && strlen($email) > 0 && strlen($password) > 0 && strlen($secondPassword) > 0)) {
            echo '<div class="alert alert-danger" role="alert">Есть пустые поля</div>';
            return;
        }

        if ($password != $secondPassword) {
            echo '<div class="alert alert-danger" role="alert">Кривые пароли!</div>';
            return;
        }

        $currentEntity = R::count('users', 'email = ?', [$email]);

        if ($currentEntity > 0) {
            echo '<div class="alert alert-danger" role="alert">Почта уже занята!</div>';
            return;
        }

        $user = R::dispense('users');

        $user->name = $name;
        $user->email = $email;
        $user->username = $username;
        $user->isAdmin = false;
        $user->password = $password;

        $id = R::store($user);

        $_SESSION['id'] = $id;

        header('Location: index.php?module=main');
    }

    function logout() {
        unset($_SESSION['id']);

        header('Location: index.php');
    }
}