<?php

if(empty(trim($_GET["did"]))){
    // URL doesn't contain id parameter. Redirect to error page
    header("location: read_form.php");
exit();
}
else{

    // Include database connection file
    require_once "connectdb.php";

    $FORM_NO = $_GET["did"];

    $sql_delete = "DELETE FROM input_form WHERE FORM_NO = $FORM_NO";

    $result_delete = mysqli_query($conn,$sql_delete);

    if (!$result_delete){
        die('Error: ' . mysqli_error($conn));
    }
    else {
        header("location: read_form.php");
    }

    mysqli_close($conn);
    }

?>