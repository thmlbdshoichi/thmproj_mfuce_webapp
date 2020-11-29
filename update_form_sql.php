<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/thm.css">

    <title>REG211 : UPDATE FORM</title>
</head>
<body>

<?php

if(empty(trim($_POST["FormID"]))) {
    // URL doesn't contain id parameter. Redirect to error page
    // header("location: error.php");
    exit();
}
else {
// Include database connection file
require_once "connectdb.php";

$FORM_ID = $_POST['FormID'];
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
$check = $_POST['check'];
$sql = "UPDATE input_form SET SEMESTER = '$semester', DATE = '$date', ACADEMIC_YEAR = '$academicyear', DEAN = '$dean_of', PREFIX = '$std_prefix', 
FIRST_NAME = '$std_firstname_2', LAST_NAME = '$std_lastname_2', ST_ID = '$std_id_2', ST_LEVEL = '$std_level', SCHOOL = '$std_school', PROGRAM = '$std_program', 
PHONE_NUMBER = '$std_phone_2', COURSE_CODE = '$course_code_2', COURSE_TITLE = '$course_title_2', REASONS = '$std_reason', OTHER_EXPLAIN = '$std_explain_2' 
WHERE FORM_NO = $FORM_ID";

$result = mysqli_query($conn,$sql);

if (!$result){
    die('Error: ' . mysql_error($conn));
}
else {
    if($check == "21232f297a57a5a743894a0e4a801fc3")
    {
        header("location: list_form.php?stid=admin");
    }
    else{
        header("location: list_form.php?stid=$std_id_2");
    }
}

mysqli_close($conn);
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>