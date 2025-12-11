<?php

	$teacher_id = $_GET["teacher_id"];

	$name = $_GET["name"];

	$course_id = $_GET["course_id"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>


	teacher_id: <input type=text name=teacher_id value='<?php echo $teacher_id; ?>'>

	<p>

	name: <input type=text name=name value='<?php echo $name; ?>'>

	<p>
	course_id: <input type=text name=course_id value='<?php echo $course_id; ?>'>

	<p>
	<input type=submit value=Update>

</form>