<?php
//fetch.php
session_start();
$connect = mysqli_connect("localhost:3308", "root", "", "ags_todo");
$columns = array('title', 'description');
$user_id = $_SESSION['user_id'];

/*Select from database*/
$query = "SELECT * FROM tasks";

/*Search bar code*/
if(isset($_POST["search"]["value"]))
{
 $search_value = $_POST["search"]["value"];
 
 $query .= " WHERE user_id=$user_id AND (title LIKE '%$search_value%' OR description LIKE '%$search_value%') "; 
} else {
    $query .= " WHERE user_id=$user_id ";
}

