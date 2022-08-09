<?php
	$conn = mysqli_connect("localhost","nguyenlai1706","10897105","lmsnhom4") ;

	if (!$conn)
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$id = $_POST['id'];
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];

	$sqlUpdate = "UPDATE thoigianbieu SET title='" . $title . "',start='" . $start . "',end='" . $end . "' WHERE id=" . $id;
	mysqli_query($conn, $sqlUpdate);
	mysqli_close($conn);

?>