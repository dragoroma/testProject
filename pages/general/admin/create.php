<?php

if (isset($_POST['upload'])) {
    $photos->create();
}
?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-4 offset-md-4">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
                <div class="mb-3">
                    <label for="mark" class="form-label">Марка</label>
                    <input type="text" class="form-control" name="mark" id="mark">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Картинка</label>
                    <input type="file" class="form-control" name="content" id="content">
                </div>

                <a class="btn btn-danger" href="index.php" role="button">Назад</a>
                <input type="submit" value="Создать" name="upload" class="btn btn-success">
            </form>
        </div>
    </div>
</div>