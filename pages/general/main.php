<?php

if (isset($_POST['delete']) && $user->isAdmin) {
    $photos->delete($_POST['id']);
}

$cars = R::findAll('cars');

?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-8 offset-md-2">
            <h1>Привет, <?php echo $user['name']; ?>!</h1>

            <?php if ($user->isAdmin) : ?>
                <a class="btn btn-success" href="index.php?module=create" role="button">Создать новую тачку</a>
                <a class="btn btn-warning" href="index.php?module=users" role="button">Пользователи</a>
            <?php endif; ?>

            <a class="btn btn-danger" href="index.php?module=logout" role="button">Выйти</a>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <?php foreach ($cars as $key => $value): ?>
                    <div class="card" style="width: 18rem;">
                        <img src="files/<?= $value->content; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value->mark; ?>: <?= $value->name; ?></h5>
                            <p class="card-text"><?= $value->description; ?></p>

                            <?php if ($user->isAdmin) : ?>
                                <form method="POST">
                                    <input hidden value="<?= $value->id; ?>" name="id"/>
                                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

