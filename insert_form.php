<?php
// Include database connection file
require_once "connectdb.php";
// Get data from input form
$semester = $_POST['semesteroption'];
$date = $_POST['date'];
$academicyear = $_POST['academicyear'];
$dean_of = $_POST['dean_school'];
$std_id = $_POST['std_id'];
$std_id_2 = mysqli_real_escape_string($conn, $std_id);
$std_level = $_POST['std_level'];
$std_prefix = $_POST['std_prefix'];
$std_firstname = $_POST['std_firstname'];
$std_firstname_2 = mysqli_real_escape_string($conn, $std_firstname);
$std_lastname = $_POST['std_lastname'];
$std_lastname_2 = mysqli_real_escape_string($conn, $std_lastname);
$std_school = $_POST['std_school'];
$std_program = $_POST['std_program'];
$std_phone = $_POST['std_phone'];
$std_phone_2 = mysqli_real_escape_string($conn, $std_phone);
$course_code = $_POST['course_code'];
$course_code_2 = mysqli_real_escape_string($conn, $course_code);
$course_title = $_POST['course_title'];
$course_title_2 = mysqli_real_escape_string($conn, $course_title);
$std_reason = $_POST['std_reason'];
$std_explain = $_POST['std_reason_other_explain'];
$std_explain_2 = mysqli_real_escape_string($conn, $std_explain);
// Insert data
$sql = "INSERT INTO input_form(SEMESTER, DATE , ACADEMIC_YEAR, DEAN, PREFIX, FIRST_NAME, LAST_NAME, ST_ID, ST_LEVEL, SCHOOL, PROGRAM, PHONE_NUMBER, COURSE_CODE, COURSE_TITLE, REASONS, OTHER_EXPLAIN) VALUES 
    ('$semester', '$date', '$academicyear','$dean_of', '$std_prefix', '$std_firstname_2', '$std_lastname_2 ', '$std_id_2','$std_level', '$std_school', '$std_program', '$std_phone_2', '$course_code_2', '$course_title_2', '$std_reason','$std_explain_2')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Error: ' . mysqli_error($conn));
} else {

    header("location: list_form.php?stid=$std_id_2");
}

mysqli_close($conn);