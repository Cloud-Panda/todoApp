<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$UserID = "";
$errors = array(); 

// connect to the database
$db = new mysqli('localhost:3308', 'root','', 'ags_todo');


