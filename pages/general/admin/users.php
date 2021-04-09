<?php

if (isset($_POST['delete']) && $user->isAdmin) {
    $users->delete($_POST['id']);
}

if (isset($_POST['admin']) && $user->isAdmin) {
    $users->toggleAdmin($_POST['id']);
}

$users = R::findAll('users');

?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-4 offset-md-4">
            <h1>Hello, <?php echo $user['name']; ?></h1>

            <a class="btn btn-warning" href="index.php" role="button">Назад</a>
            <a class="btn btn-danger" href="index.php?module=logout" role="button">Выйти</a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">Имя пользователя</th>
                    <th scope="col">Права доступа (Админ?)</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $key => $value): ?>
                    <tr

                    <?php if ($value->isAdmin) : ?>
                        class="table-danger"
                    <?php endif; ?>
                    >
                        <th scope="row"><?= $value->id; ?></th>
                        <td><?= $value->name; ?></td>
                        <td><?= $value->username; ?></td>
                        <td>
                            <?php if ($value->isAdmin) : ?>
                            Yes
                            <?php else: ?>
                            No
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($user->isAdmin && $value->isAdmin) : ?>
                                <form method="POST">
                                    <input hidden value="<?= $value->id; ?>" name="id"/>
                                    <input hidden value="false" name="isAdmin"/>
                                    <button type="submit" class="btn btn-success" name="admin">Забрать админку</button>
                                </form>
                            <?php elseif ($user->isAdmin && !$value->isAdmin): ?>
                                <form method="POST">
                                    <input hidden value="<?= $value->id; ?>" name="id"/>
                                    <input hidden value="true" name="isAdmin"/>
                                    <button type="submit" class="btn btn-success" name="admin">Выдать админку</button>
                                </form>
                            <?php endif; ?>
                            <?php if ($user->isAdmin) : ?>
                                <a class="btn btn-success" href="index.php?module=editor&userId=<?= $value->id; ?>" role="button">Редактировать</a>

                                <form method="POST">
                                    <input hidden value="<?= $value->id; ?>" name="id"/>
                                    <button type="submit" class="btn btn-danger" name="delete">Удалить</button>
                                </form>
                            <?php endif; ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>