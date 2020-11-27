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
        <title>REG211 : LIST OF Form</title>
</head>
<body>
        
        <?php
                $sql = "SELECT FORM_NO, ST_ID, DATE, FIRST_NAME, LAST_NAME, ST_LEVEL, SCHOOL, REASONS FROM input_form";
                $result = mysqli_query($conn,$sql);
        ?>

        <div class="container main-container">
        <div class="row mt-3">
                <div class="col-2"></div>
                <div class="col-8 text-center">
                        <p style="font-family: ConcertOne; font-size:calc(0.5rem + 1vw);">LIST OF ALL SUBMIT REG-211</p>
                </div>
                <div class="col-2"></div>
        </div>
        <div class="row mt-2 mb-2">
                <div class="col" style="font-family:ConcertOne;">
                        <a href="reg211.php"><button class="btn btn-primary" type="button" style="font-size:calc(0.5rem + 0.5vw);">NEW FORM</button></a>
                </div>
        </div>
        <div class="table-responsive-sm">
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
                        while($row = mysqli_fetch_assoc($result)) {
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
                                <a href="update_form.php?formid=<?= $FORM_NO ?>"><i class="fa fa-pencil-square" style="font-size:1.5rem"></i></a>
                                <a href="delete_form_sql.php?formid=<?= $FORM_NO ?>" onClick="return confirm('Warning: Are you sure deleting this form?');"><i class="fa fa-trash" style="font-size:1.5rem"></i></a>
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

        <?php mysqli_close($conn); ?>

<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>