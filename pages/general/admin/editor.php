<?php

if (isset($_POST['edit'])) {
    $users->edit($_POST['id'], $_POST['name'], $_POST['username'], $_POST['email'], $_POST['password']);
}

$entity = R::findOne('users', 'id = ?', [$_GET['userId']]);

?>



<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-4 offset-md-4">
            <h1>Editing user: <?php echo $entity->name; ?></h1>

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $entity->name; ?>">
                </div>
                <div class="mb-3">
                    <label for="Username" class="form-label">Имя пользователя</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $entity->username; ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $entity->email; ?>">
                </div>


                <div class="mb-3">
                    <label for="Password" class="form-label">Пароль</label>
                    <input type="text" class="form-control" name="password" id="password" value="<?php echo $entity->password; ?>">
                </div>

                <a class="btn btn-warning" href="index.php" role="button">Назад</a>

                <input hidden value="<?= $entity->id; ?>" name="id"/>
                <input type="submit" value="Сохранить" name="edit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>