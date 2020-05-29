<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$UserID = "";
$errors = array(); 

// connect to the database
$db = new mysqli('localhost:3308', 'root','', 'ags_todo');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  