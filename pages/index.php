<?php
$module = $_GET['module'] ?: "main";

if (isset($_SESSION['id'])) {
    require_once './pages/general/index.php';
} else {
    require_once './pages/authentication/index.php';
}
