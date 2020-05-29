<?php
//fetch.php
session_start();
$connect = mysqli_connect("localhost:3308", "root", "", "ags_todo");
$columns = array('title', 'description');
$user_id = $_SESSION['user_id'];

