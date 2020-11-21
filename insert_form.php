<?php
// Include database connection file
require_once "connectdb.php";
// Get data from input form
$semester = $_POST['semesteroption'];
$date = $_POST['date'];
$academicyear = $_POST['academicyear'];
$dean_of = $_POST['dean_school'];
$std_id = $_POST['std_id'];
$std_level = $_POST['std_level'];
$std_prefix = $_POST['std_prefix'];
$std_firstname = $_POST['std_firstname'];
$std_lastname = $_POST['std_lastname'];
$std_school = $_POST['std_school'];
$std_program = $_POST['std_program'];
$std_address = $_POST['std_address'];
$std_subdistrict = $_POST['std_subdistrict'];
$std_district = $_POST['std_district'];
$std_province = $_POST['std_province'];
$std_postcode = $_POST['std_postcode'];
$std_phone = $_POST['std_phone'];
$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];
$std_reason = $_POST['std_reason'];

// Insert data
$sql = "INSERT INTO input_form(SEMESTER, DATE , ACADEMIC_YEAR, DEAN, FIRST_NAME, LAST_NAME, ST_ID, ST_LEVEL, SCHOOL, PROGRAM, CURRENT_ADD, SUBDISTRICT, DISTRICT, PROVINCE, POST_NO, PHONE_NUMBER, COURSE_CODE, COURSE_TITLE, REASON) VALUES 
    ('$semester', '$date', '$academicyear','$dean_of', '$std_firstname', '$std_lastname ', '$std_id','$std_level', '$std_school', '$std_program', '$std_address', '$std_subdistrict', '$std_district', '$std_province', '$std_postcode', '$std_phone', '$course_code', '$course_title', '$std_reason' )";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Error: ' . mysqli_error($conn));
} else {
    header("location: reg211.php");
}
mysqli_close($conn);
