<?php

$user = R::load('users', $_SESSION['id']);

switch ($module) {
    case 'main': require 'main.php'; break;
    case 'create': require 'admin/create.php'; break;
    case 'users': require 'admin/users.php'; break;
    case 'editor': require 'admin/editor.php'; break;
    case 'logout': require 'logout.php'; break;
    default: echo 'Route not found';
}