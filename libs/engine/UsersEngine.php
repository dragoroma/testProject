<?php

class UsersEngine
{
    function edit($id, $name, $username, $email, $password) {
        $entity = R::findOne('users', 'id = ?', [$id]);

        $entity['name'] = $name;
        $entity['username'] = $username;
        $entity['mail'] = $email;
        $entity['password'] = $password;

        R::store($entity);

        echo '<div class="alert alert-success" role="alert">Успешно</div>';
    }

    function toggleAdmin($id) {
        $entity = R::findOne('users', 'id = ?', [$id]);

        if ($entity->isAdmin) {
            $entity->isAdmin = false;
        } else {
            $entity->isAdmin = true;
        }

        R::store($entity);

        echo '<div class="alert alert-success" role="alert">Права для пользователя ' . $entity->name . ' изменены!</div>';

    }

    function delete($id) {
        $entity = R::findOne('users', 'id = ?', [$id]);

        R::trash($entity);

        echo '<div class="alert alert-success" role="alert">Пользователь ' . $entity->username . ' удален!</div>';

    }
}