<?php

switch ($module) {
    case 'main': require 'main.php'; break;
    case 'authentication': require 'authentication.php'; break;
    case 'registration': require 'registration.php'; break;
    default: echo 'Route not found';
}