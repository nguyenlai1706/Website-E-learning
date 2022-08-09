<?php
	$conn = mysqli_connect("localhost","nguyenlai1706","10897105","lmsnhom4") ;

	if (!$conn)
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$id = $_POST['id'];
	$sqlDelete = "DELETE from thoigianbieu WHERE id=".$id;

	mysqli_query($conn, $sqlDelete);
	echo mysqli_affected_rows($conn);

	mysqli_close($conn);
?>