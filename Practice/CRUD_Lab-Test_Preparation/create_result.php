<?php

	$teacher_id = $_GET["teacher_id"];

	$name = $_GET["name"];

	$course_id = $_GET["course_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO Teacher VALUES ( '$teacher_id', '$name', '$course_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> teacher_id = $teacher_id <br> name = $name <br> course_id = $course_id <br>";



	echo "<p><a href=Teacher_read.php>READ all records</a>";

?>