<?php
session_start();

$connect = mysqli_connect("localhost:3308", "root", "", "ags_todo");
if(isset($_POST["title"], $_POST["description"]))
{
 $title = mysqli_real_escape_string($connect, $_POST["title"]);
 $description = mysqli_real_escape_string($connect, $_POST["description"]);
 $user_id = $_SESSION['user_id'];
 $query = "INSERT INTO tasks(title, description, user_id) VALUES('$title', '$description', '$user_id')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
