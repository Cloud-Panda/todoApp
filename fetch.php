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

/*Order list*/
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= ' ORDER BY title ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

/*Items put into table*/
$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

/*table display*/
while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="title">' . $row["title"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="description">' . $row["description"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete delete-btn" id="'.$row["id"].'">X</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $user_id = $_SESSION["user_id"];

 $query = "SELECT * FROM tasks WHERE user_id=$user_id";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>