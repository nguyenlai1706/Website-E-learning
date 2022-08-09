<?php
$conn = mysqli_connect("localhost","nguyenlai1706","10897105","lmsnhom4") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$title = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";

$sqlInsert = "INSERT INTO thoigianbieu (title,start,end) VALUES ('".$title."','".$start."','".$end ."')";

$result = mysqli_query($conn, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>