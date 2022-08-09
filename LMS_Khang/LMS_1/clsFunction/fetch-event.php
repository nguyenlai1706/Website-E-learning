<?php
	$conn = mysqli_connect("localhost","nguyenlai1706","10897105","lmsnhom4") ;

	if (!$conn)
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    

    $json = array();
    $sqlQuery = "SELECT * FROM thoigianbieu ORDER BY id";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($eventArray);
?>