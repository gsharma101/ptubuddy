<?php
include_once('db/connection.php');
include_once('classes/students.php');
include_once('classes/admin.php');
include_once('classes/teacher.php');

global $conn;

session_start();

$getFromS = new Students($conn);
$getFromA = new Admin($conn);
$getFromT = new Teacher($conn);

define('BASE_URL', 'http://localhost/ptubuddy/');
