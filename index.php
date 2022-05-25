<?php 
session_start();
require_once __DIR__.'/config/database.php';
require_once __DIR__.'/config/baseUrl.php';

if (isset($_SESSION['username']) && isset($_SESSION['role'])) {

    $uRole = $_SESSION['role'];
    if ($uRole == 'admin') {
        header('location:'.baseUrl().'admin/');
    }
}

require_once __DIR__.'/views/form_login.php';

 ?>

