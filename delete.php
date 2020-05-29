<?php
$connect = mysqli_connect("localhost:3308", "root", "", "ags_todo");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM tasks WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
