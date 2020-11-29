<?php

if(empty(trim($_GET["formid"]))){
    // URL doesn't contain id parameter. Redirect to error page
    header("location: list_form.php");
exit();
}
else{

    // Include database connection file
    require_once "connectdb.php";

    $FORM_NO = $_GET["formid"];
    $ST_ID = $_GET["stid"];
    $check = $_GET["check"];

    $sql_delete = "DELETE FROM input_form WHERE FORM_NO = $FORM_NO";
    $result_delete = mysqli_query($conn,$sql_delete);

    if (!$result_delete){
        die('Error: ' . mysqli_error($conn));
    }
    else {
        if($check=="21232f297a57a5a743894a0e4a801fc3"){
            header("location: list_form.php?stid=admin");
        }
        else{
            header("location: list_form.php?stid=$ST_ID");
        }
    }

    mysqli_close($conn);
    }

?>