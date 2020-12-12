<?php
require_once "connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/thm.css">
        <link rel="stylesheet" href="css/list_form.css">
        <title>REG211 : LIST OF Form</title>
</head>

<body>

        <div class="fullscreen">
                <?php
                if (!empty($_POST['STUDENT_ID'])) {
                        $STUDENT_ID = $_POST['STUDENT_ID'];
                } elseif (!empty($_GET['stid'])) {
                        $STUDENT_ID = $_GET['stid'];
                } else {
                        $STUDENT_ID = NULL;
                }

                if ($STUDENT_ID == 'ADMIN' or $STUDENT_ID == '221' or $STUDENT_ID == 'admin') {
                        $sql = "SELECT FORM_NO, ST_ID, DATE, FIRST_NAME, LAST_NAME, ST_LEVEL, SCHOOL, REASONS FROM input_form";
                        $HEADER = "LIST ALL REG-211 (ADMIN PANEL)";
                        $check = "21232f297a57a5a743894a0e4a801fc3";
                } else {
                        $sql = "SELECT FORM_NO, ST_ID, DATE, FIRST_NAME, LAST_NAME, ST_LEVEL, SCHOOL, REASONS FROM input_form WHERE ST_ID = '$STUDENT_ID'";
                        $HEADER = "REG-211 SUMMITED ($STUDENT_ID)";
                        $check = "ee11cbb19052e40b07aac0ca060c23ee";
                }
                $result = mysqli_query($conn, $sql);
                ?>

                <div class="form_table">
                        <div class="container main-container">
                                <br><br>
                                <div class="row mt-3">
                                        <div class="col-2"></div>
                                        <div class="col-8 text-center">
                                                <center>
                                                        <div class="head">
                                                                <u>
                                                                        <p style="font-family: ConcertOne; font-size:calc(0.5rem + 1vw);"><?= $HEADER ?></p>
                                                                </u>
                                                        </div>
                                                </center>
                                        </div>
                                        <div class="col-2"></div>
                                </div>
                                <br><br>
                                <div class="allform">
                                        <!--<div class="row mt-2 mb-2">

                                                <div class="newform col" style="font-family:ConcertOne;">
                                                        <a href="reg211.php"><button class="btnewform btn btn-primary btn-block" type="button" style="font-size:calc(0.5rem + 0.5vw);">NEW FORM</button></a>
                                                </div>

                                        </div>-->
                                        <br>
                                        <div class="bgtable">
                                                <div class="table-responsive-lg">
                                                        <table class="table table-bordered table-striped" style="font-family: ConcertOne;">
                                                                <thead class="table-warning">
                                                                        <tr>
                                                                                <th scope="col">FORM NO.</th>
                                                                                <th scope="col">Student ID</th>
                                                                                <th scope="col">Name</th>
                                                                                <th scope="col">School</th>
                                                                                <th scope="col">Status</th>
                                                                                <th scope="col">Reason</th>
                                                                                <th scope="col">Date Submit</th>
                                                                                <th scope="col">Control Panels</th>
                                                                        </tr>
                                                                </thead>
                                                                <?php
                                                                if (mysqli_num_rows($result) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                $FORM_NO = $row["FORM_NO"];
                                                                                $ST_ID = $row["ST_ID"];
                                                                                $DATE = $row["DATE"];
                                                                                $FIRST_NAME = $row["FIRST_NAME"];
                                                                                $LAST_NAME = $row["LAST_NAME"];
                                                                                $ST_LEVEL = $row["ST_LEVEL"];
                                                                                $SCHOOL = $row["SCHOOL"];
                                                                                $REASONS = $row["REASONS"];
                                                                ?>
                                                                                <tr>
                                                                                        <td><?= $FORM_NO ?></td>
                                                                                        <td><?= $ST_ID ?></td>
                                                                                        <td><?= $FIRST_NAME ?> <?= $LAST_NAME ?></td>
                                                                                        <td><?= $SCHOOL ?></td>
                                                                                        <td><?= $ST_LEVEL ?></td>
                                                                                        <td><?= $REASONS ?></td>
                                                                                        <td><?= $DATE ?></td>
                                                                                        <td class="text-center">
                                                                                                <a href="form_print.php?formid=<?= $FORM_NO ?>"><i class="fa fa-print" style="font-size:1.5rem"></i></a>
                                                                                                <a href="view_form.php?formid=<?= $FORM_NO ?>"><i class="fa fa-eye" style="font-size:1.5rem"></i></a>
                                                                                                <a href="update_form.php?formid=<?= $FORM_NO ?>&check=<?= $check ?>"><i class="fa fa-pencil-square" style="font-size:1.5rem"></i></a>
                                                                                                <a href="delete_form_sql.php?formid=<?= $FORM_NO ?>&stid=<?= $ST_ID ?>&check=<?= $check ?>" onClick="return confirm('Warning: Are you sure deleting this form?');"><i class="fa fa-trash" style="font-size:1.5rem"></i></a>
                                                                                        </td>
                                                                                </tr>

                                                                        <?php
                                                                        }
                                                                } else {
                                                                        ?>
                                                                        <td colspan="8" class="text-center">There is no form submitted</td>
                                                                <?php
                                                                }
                                                                ?>
                                                        </table>
                                                </div>
                                        </div>
                                        <div class="row mt-2 mb-2">
                                                <div class="col" style="font-family:ConcertOne;">
                                                        <a href="index.html"><button class="btn-lg btn-warning btn-block" type="button" style="font-size:calc(0.5rem + 0.5vw);">BACK</button></a>
                                                </div>
                                        </div>
                                </div>

                                <?php mysqli_close($conn); ?>

                        </div>
                        <script src="js/jquery.slim.min.js"></script>
                        <script src="js/bootstrap.bundle.min.js"></script>

                </div>

        </div>

</body>

</html>
