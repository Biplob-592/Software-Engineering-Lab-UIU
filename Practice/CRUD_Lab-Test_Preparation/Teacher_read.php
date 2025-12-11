<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Teacher" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>teacher_id</th> <th>name</th> <th>course_id</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $teacher_id </td>";
		echo "<td> $name</td>";
		echo "<td> $course_id</td>";
		echo "<td> <a href = 'delete.php?teacher_id=$teacher_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?teacher_id=$teacher_id&name=$name&course_id=$course_id'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>