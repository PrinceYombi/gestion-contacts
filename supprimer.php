<?php
require_once('lib/header.php');
require_once('lib/users_functions.php');

$userId = $_GET['id'];

deleteUser($userId);

header('Location: index.php');





