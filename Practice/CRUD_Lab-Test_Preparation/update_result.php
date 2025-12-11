<?php

	

	$teacher_id = $_GET["teacher_id"];

	$name = $_GET["name"];

	$course_id = $_GET["course_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Teacher SET  name='$name', course_id='$course_id'  WHERE  teacher_id = $teacher_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>  teacher_id= $teacher_id <br> name = $name <br> course_id = $course_id <br>";



	echo "<p><a href=Teacher_read.php>READ all records</a>";

?>