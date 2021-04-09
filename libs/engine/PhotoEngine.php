<?php

class PhotoEngine
{
    function create() {
        $target_dir = "files/";
        $target_file = $target_dir . basename($_FILES["content"]['name']);
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (getimagesize($_FILES["content"]["tmp_name"]) && move_uploaded_file($_FILES["content"]["tmp_name"], $target_file)) {
            $car = R::dispense("cars");

            $car['name'] = $_POST['name'];
            $car['mark'] = $_POST['mark'];
            $car['description'] = $_POST['description'];
            $car['content'] = basename($_FILES["content"]['name']);

            R::store($car);

            echo '<div class="alert alert-success" role="alert">Успешно</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Ошибка загрузки файла!</div>';
        }
    }

    function delete($id) {

        $photo = R::findOne('cars', 'id = ?', [$id]);

        R::trash($photo);

        echo '<div class="alert alert-success" role="alert">Тачка ' . $photo->name . ' удалена!</div>';
    }
}