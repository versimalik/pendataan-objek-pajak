<?php 
require_once __DIR__.'/../config/database.php';
require_once __DIR__.'/../config/baseUrl.php';
require_once __DIR__.'/../views/headhtml.php';

session_start();

 ?>

<head>
	<title>Halaman Admin</title>
</head>

<a class="btn btn-danger" href=<?=baseUrl()?>process/logout.php>Logout</a>

 