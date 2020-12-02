<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Print Form - REG211</title>
    <link rel="stylesheet" href="css/after_print.css">
    <link rel="stylesheet" href="css/before_print.css">
</head>

<body>
    <?php
    // Include database connection file
    require_once "connectdb.php";
    $FORM_NO = $_GET['formid'];
    $sql = " SELECT * FROM input_form WHERE FORM_NO = $FORM_NO  ";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $semester = $row["SEMESTER"];
        $date = $row['DATE'];
        $academicyear = $row["ACADEMIC_YEAR"];
        $dean_of = $row["DEAN"];
        $std_id = $row["ST_ID"];
        $std_level = $row["ST_LEVEL"];
        $std_prefix = $row["PREFIX"];
        $std_firstname = $row["FIRST_NAME"];
        $std_lastname =  $row["LAST_NAME"];
        $std_school = $row["SCHOOL"];
        $std_program = $row["PROGRAM"];
        $std_phone = $row['PHONE_NUMBER'];
        $course_code = $row['COURSE_CODE'];
        $course_title = $row['COURSE_TITLE'];
        $other_explain = $row["OTHER_EXPLAIN"];
        $std_reason = $row["REASONS"];
    }
    ?>
    <div class="page">
        <div class="subpage">
            <div class class="container">
                <div class="container-inner">
                    <div style="height: 20px; ">
                        <h6 style="font-weight: bold; text-align: right;">REG-211</h6>
                    </div>
                    <!-- Top -->
                    <div class="row">
                        <div class="headbox col-4">
                            <p style="margin-top: 1px;"><label for="" id="bold">School of</label><span><label for="" id="bold" class="dote"></label></span></p>
                            <p><label for="" style="font-weight: bold; text-indent: 3em;">Mae Fah Luang University</label><br></p>
                            <p><label for="">No</label><span><label for="" class="dote"></label></span></p>
                            <p><label for="">Date</label><span><label for="" class="dote"></label></span></p>
                            <div class="row mt-2"></div>
                            <p><label for="" style="margin-top: -8px;">Time</label><label style="width: 30%;" for="" class="dote"></label></p>
                            <p><label for="" style="margin-top: -8px;">Recoded by</label><span><label for="" style="margin-top: -9px;" class="dote"></label></span></p>
                        </div>
                        <div class="col-4">
                            <img src="img/logomfu_print.jpg" style="width:auto; height:9rem;" class="mx-auto d-block mb-2 mt-5">
                        </div>
                        <div class="headbox col-4">
                            <p><label for="" style="font-weight: bold; text-indent: 3em;">The Division of Registrar</label><br></p>
                            <p><label for="" style="font-weight: bold; text-indent: 3em;">Mae Fah Luang University</label><br></p>
                            <p><label for="">No</label><span><label for="" class="dote"></label></span></p>
                            <p> <label for="">Date</label><span><label for="" class="dote"></label></span></p>
                            <div class="row mt-2"></div>
                            <p><label for="" style="margin-top: -8px;">Time</label><label style="width: 30%;" for="" class="dote"></label></p>
                            <p><label for="" style="margin-top: -8px;">Recoded by</label><span><label for="" style="margin-top: -9px;" class="dote"></label></span></p>
                        </div>
                    </div>
                    <!-- Top -->
                    <p class="text-center" style="font-size:calc(0.5rem + 1vw);">DIVISION OF REGISTRAR, MAE FAH LUANG UNIVERSITY</p>
                    <p class="text-center" style="font-size:calc(0.5rem + 1vw);">Request Form for Maintaining Student Status</p>
                    <!-- TOP PART -->
                    <div class="row mt-2"></div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <div class="form-check form-check-inline mr-4">
                                <label class="indent mr-3 mb-1" id="semester">Semester </label>
                                <input class="form-check-input mr-3 mb-1 " type="checkbox" name="semesteroption" id="firstsemester" value="First" <?php if ($semester == 'First') {
                                                                                                                                                        echo "checked=checked";
                                                                                                                                                    } ?>>
                                <label class="form-check-label mr-4 mb-1" for="firstsemester" id="firstsemester">First</label>
                                <input class="form-check-input mr-3 mb-1" type="checkbox" name="semesteroption" id="secondsemester" value="Second" <?php if ($semester == 'Second') {
                                                                                                                                                        echo "checked=checked";
                                                                                                                                                    } ?>>
                                <label class="form-check-label mr-4 mb-1" for="secondsemester" id="secondsemester">Second</label>
                                <input class="form-check-input mr-3 mb-1" type="checkbox" name="semesteroption" id="summersemester" value="Summer" <?php if ($semester == 'Summer') {
                                                                                                                                                        echo "checked=checked";
                                                                                                                                                    } ?>>
                                <label class="form-check-label mr-4 mb-1" for="summersemester" id="summersemester">Summer</label>
                                <label class=" indent mb-1" for="Academicyear" id="Academicyear">Academic year<input id="txt" type="text" name="a" value="<?= $academicyear ?>" style="width: 60px; text-align:center" readonly=""> </label>
                            </div>
                        </div>
                    </div>
                    <!-- First PART -->
                    <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr>
                                <td align="right">
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="checkbox" name="std_reason" id="std_level_undergrad" value="Other Reason">
                                        <label class="form-check-label" for="std_reason_other">Undergraduate student</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" style="text-indent: 2em;">(1) To the Dean of School&nbsp;&nbsp;<input id="txt" type="text" name="a" value="<?= $dean_of ?>" style="width: 350px; text-align:center" readonly="">&nbsp;&nbsp;Student level
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <div class="form-check form-check-inline mr-1 mb-1">
                                        <input class="form-check-input" type="checkbox" name="std_reason" id="std_level_grad" value="Other Reason">
                                        <label class="form-check-label" for="std_reason_other">Graduate student</label>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                        <tbody>
                    </table>
                    <?php
                    $txt_stid = " $std_id ";
                    ?>
                    <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                        <colgroup>
                            <col span="1" width="70%">
                            <col span="2" width="100px">
                        </colgroup>
                        <tr>
                            <td align="left" style="text-indent: 9em;">Name&nbsp;&nbsp;<input id="txt" type="text" name="a" value=" <?= $std_prefix ?>  <?= $std_firstname ?>  <?= $std_lastname ?> " style="width: 310px; text-align:center" readonly="">&nbsp;&nbsp;Student ID
                            </td>
                            <td>
                                <table border="1">
                                    <th><?= substr($txt_stid, 1, 1) ?></th>
                                    <th><?= substr($txt_stid, 2, 1) ?></th>
                                    <th><?= substr($txt_stid, 3, 1) ?></th>
                                    <th><?= substr($txt_stid, 4, 1) ?></th>
                                    <th><?= substr($txt_stid, 5, 1) ?></th>
                                    <th><?= substr($txt_stid, 6, 1) ?></th>
                                    <th><?= substr($txt_stid, 7, 1) ?></th>
                                    <th><?= substr($txt_stid, 8, 1) ?></th>
                                    <th><?= substr($txt_stid, 9, 1) ?></th>
                                    <th><?= substr($txt_stid, 10, 1) ?></th>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr>
                                <td align="center">&nbsp;</td>
                            </tr>
                        <tbody>
                    </table>
                    <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr>
                                <td align="left">Study in/graduated from &nbsp;&nbsp;<input id="txt" type="text" name="a" value="<?= $std_school ?>" style="width: 255px; text-align:center" readonly="">
                                </td>
                                <td align="right">
                                    &nbsp;&nbsp;Program of&nbsp;&nbsp;&nbsp;&nbsp;<input id="txt" type="text" name="a" value="<?= $std_program ?>" style="width: 300px; text-align:center" readonly="">
                                </td>
                            </tr>
                        <tbody>
                    </table>
                    <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left">Mobile phone &nbsp;&nbsp;<input id="txt" type="text" name="a" value="<?= $std_phone ?>" style="width: 200px; text-align:center" readonly="">
                                </td>
                            </tr>
                            <tr>
                                <td align="center">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mt-2"></div>
                    <div class="form-row">
                        <div class="col-10">
                            <label for="">Reason(s) for maintaining student status are</label>
                        </div>
                    </div>
                    <div class="row mt-2"></div>
                    <div class="form-row">
                        <div class="form-group col-2">
                            <!-- blank -->
                        </div>
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="checkbox" name="std_reason" id="std_reason_inprogess" value="In progess">
                            <label class="form-check-label" for="std_reason_inprogess" style="text-indent: 1em;">Receiving a P grade (In Progress) in
                                Course Code </label>
                        </div>
                        <div class="form-check form-check-inline mr-1 col-2">
                            <?php
                            $cousre_id = "$course_code";
                            ?>
                            <?php
                            if ($cousre_id == "") {
                            ?>
                                <table border="1">
                                    <tr>
                                        <th style="color: transparent;">0</th>
                                        <th style="color: transparent;">0</th>
                                        <th style="color: transparent;">0</th>
                                        <th style="color: transparent;">0</th>
                                        <th style="color: transparent;">0</th>
                                        <th style="color: transparent;">0</th>
                                        <th style="color: transparent;">0</th>
                                    </tr>
                                </table>
                            <?php } else {
                            ?>
                                <table border="1">
                                    <tr>
                                        <th><?= substr($cousre_id, 0, 1) ?></th>
                                        <th><?= substr($cousre_id, 1, 1) ?></th>
                                        <th><?= substr($cousre_id, 2, 1) ?></th>
                                        <th><?= substr($cousre_id, 3, 1) ?></th>
                                        <th><?= substr($cousre_id, 4, 1) ?></th>
                                        <th><?= substr($cousre_id, 5, 1) ?></th>
                                        <th><?= substr($cousre_id, 6, 1) ?></th>
                                    </tr>
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row mt-2"></div>
                    <div class="form-row">
                        <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                            <tbody>
                                <tr>
                                    <td align="right">Course Title&nbsp;&nbsp;&nbsp;<input id="txt" type="text" name="a" value="<?= $course_title ?>" style="width: 585px; text-indent:2rem" readonly=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-2"></div>
                    <div class="form-row">
                        <div class="form-group col-2">
                            <!-- blank -->
                        </div>
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="checkbox" name="std_reason" id="std_reason_other" value="Other Reason">
                            <label class="form-check-label" for="std_reason_other" style="text-indent: 1em;">Other Reason (Please Specify)</label>
                        </div>
                    </div>
                    <div class="row mt-1"></div>
                    <div class="form-row">
                        <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                            <tbody>
                                <tr>
                                    <td align="right"><input id="txt" type="text" name="a" value="<?= $other_explain ?>" style="width: 670px; text-indent:2rem" readonly=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-row mt-1">
                    </div>
                    <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr>
                                <td align="left"> <label for="" style="text-indent: 5em;">For your consideration </label></td>
                            </tr>
                            <tr>
                                <td align="right">Signature&nbsp;&nbsp;&nbsp;<input id="txt" type="text" name="a" value="" style="width: 200px" readonly="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="right" '="">(<input id="txt" type="text" name="b" value="  <?= $std_prefix ?>  <?= $std_firstname ?>  <?= $std_lastname ?>" style="width:200px; text-align: center;" readonly="">)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="right"><input id="day" name="day" type="text" value="<?php echo " $day.var" ?>" readonly style="width:40px; text-align: center;border-top-style: none;border-right-style: none;border-left-style: none;border-bottom: 2px dotted rgb(70, 67, 67);padding-bottom: 7px;padding-top: 10px;height: 15px;">
                                    /<input id="month" type="text" value="" readonly="" style="width:90px; text-align: center;border-top-style: none;border-right-style: none;border-left-style: none;border-bottom: 2px dotted rgb(70, 67, 67);padding-bottom: 7px;padding-top: 10px;height: 15px;">
                                    /<input id="year" type="text" value="" readonly="" style="width:50px; text-align: center;border-top-style: none;border-right-style: none;border-left-style: none;border-bottom: 2px dotted rgb(70, 67, 67);padding-bottom: 7px;padding-top: 10px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>


                    <!-- TABLE PART 2, 3 -->
                    <div class="row">
                        <div class="part2 col-6">
                            <h6>(2) Advisor' s Comment</h6> <div class="column1">
                                    <div class="column3">
                                        <br>
                                    </div>
                                    <div class="column2">
                                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                                    </div>
                </div>
                <div class="column3">
                    <label for="" class="indent">Signature</label>
                </div>
                <div class="column2">
                    <center>
                        <span style="padding:8px; width:80%">
                            <label for="" class="dote"></label>
                        </span>
                    </center>
                    <p>
                        <label for="" style="margin-top: -10px; text-indent: 3rem;">( </label>
                        <label style="width: 65%;" for="" class="dote">
                        </label><label for="" style="margin-top: -10px;">)</label>
                    </p>
                    <br>
                    <p>
                        <label for="" style=" margin-top: -11px; text-indent: 5rem;  color: transparent;">.</label>
                        <label style="width: 15%; " for="" class="dote"></label>
                        <label for="" style="margin-top: -11px;">/</label>
                        <label style="width: 15%;" for="" class="dote""></label>
                            <label for="" style=" margin-top: -11px;">/</label>
                        <label style="width: 15%;" for="" class="dote"></label>
                        <label for=""></label>
                    </p>
                </div>
            </div>
            <div class="part3 col-6">
                <h6>(3) Dean's Comment</h6>
                <div class="column1">
                    <div class="column3">
                        <br>
                    </div>
                    <div class="column2">
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                    </div>
                </div>
                <div class="column3">
                    <label for="" class="indent">Signature</label>
                </div>
                <div class="column2">
                    <center>
                        <span style="padding:8px; width:80%">
                            <label for="" class="dote"></label>
                        </span>
                    </center>
                    <p>
                        <label for="" style="margin-top: -10px; text-indent: 3rem;">( </label>
                        <label style="width: 65%;" for="" class="dote">
                        </label><label for="" style="margin-top: -10px;">)</label>
                    </p>
                    <br>
                    <p>
                        <label for="" style=" margin-top: -11px; text-indent: 5rem;  color: transparent;">.</label>
                        <label style="width: 15%; " for="" class="dote"></label>
                        <label for="" style="margin-top: -11px;">/</label>
                        <label style="width: 15%;" for="" class="dote""></label>
                                    <label for="" style=" margin-top: -11px;">/</label>
                        <label style="width: 15%;" for="" class="dote"></label>
                        <label for=""></label>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- TABLE PART 4, 5 -->
    <div class="row">
        <div class="part4 col-6">
            <h6>(4) Recorded by Division of Registrar's staff</h6>
            <div class="column1" style="text-indent: 2em;">
                <div class="form-check form-check-inline mr-4">
                    <input type="checkbox" name="mssf" id="mssf">
                    <label for="mssf" style="text-indent: 1em;">Maintaining student status free ....... bath</label>
                </div>
            </div>
            <div class="column1" style="text-indent: 2em;">
                <div class="form-check form-check-inline mr-4">
                    <input type="checkbox" name="mssf" id="mssf">
                    <label for="mssf" style="text-indent: 1em;">Do not pay the free</label>
                </div>
            </div>
            <div class="column1" style="text-indent: 2em;">
                <div class="form-check form-check-inline mr-4">
                    <input type="checkbox" name="mssf" id="mssf">
                    <label for="mssf" style="text-indent: 1em;">Recorded</label>
                </div>
            </div>
            <div class="column3">
                <label for="" class="indent">Signature</label>
            </div>
            <div class="column2">
                <center>
                    <span style="padding:8px; width:80%">
                        <label for="" class="dote"></label>
                    </span>
                </center>
                <p>
                    <label for="" style="margin-top: -10px; text-indent: 3rem;">( </label>
                    <label style="width: 65%;" for="" class="dote">
                    </label><label for="" style="margin-top: -10px;">)</label>
                </p>
                <br>
                <p>
                    <label for="" style=" margin-top: -11px; text-indent: 5rem;  color: transparent;">.</label>
                    <label style="width: 15%; " for="" class="dote"></label>
                    <label for="" style="margin-top: -11px;">/</label>
                    <label style="width: 15%;" for="" class="dote""></label>
                            <label for="" style=" margin-top: -11px;">/</label>
                    <label style="width: 15%;" for="" class="dote"></label>
                    <label for=""></label>
                </p>
            </div>
        </div>
        <div class="part5 col-6">
            <h6>(5) Head of Division of Registrar's Comment</h6>
            <div class="column1">
                <div class="column3">
                    <br>
                </div>
                <div class="column2">
                    <span style="padding:8px;"><label for="" class="dote"></label></span>
                    <span style="padding:8px;"><label for="" class="dote"></label></span>
                    <span style="padding:8px;"><label for="" class="dote"></label></span>
                </div>
            </div>
            <div class="column3">
                <label for="" class="indent">Signature</label>
            </div>
            <div class="column2">
                <center>
                    <span style="padding:8px; width:80%">
                        <label for="" class="dote"></label>
                    </span>
                </center>
                <p>
                    <label for="" style="margin-top: -10px; text-indent: 3rem;">( Mr.Ruangsak Kiengkamon )</label>
                </p>
                <br>
                <p>
                    <label for="" style=" margin-top: -11px; text-indent: 4rem;  color: transparent;">.</label>
                    <label style="width: 15%; " for="" class="dote"></label>
                    <label for="" style="margin-top: -11px;">/</label>
                    <label style="width: 15%;" for="" class="dote""></label>
                                    <label for="" style=" margin-top: -11px;">/</label>
                    <label style="width: 15%;" for="" class="dote"></label>
                    <label for=""></label>
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-4">
    </div>
    <div class="form-group">
        <div class="center">
            <button class="btn btn-success print  mr-2" onclick=" warnning(); window.print(); ">Print</button>
        </div>
    </div>
    <!-- warnning -->
    <script>
        function warnning() {
            alert(" If you are using a mobile phone or tablat There may be a problem when printing. Please switch to Google Chome web browser.")
        }
    </script>
    <!-- checked box-->
    <script>
        /*  Checked box Student level*/
        var std_level = "<?php print $std_level ?>";
        if (std_level == "Undergraduate") {
            document.getElementById("std_level_undergrad").checked = true;
        } else if (std_level == "Graduate") {
            document.getElementById("std_level_grad").checked = true;
        }
        /* Checked box Student reason */
        var reason = "<?php print $std_reason ?>";
        if (reason == "Other Reason") {
            document.getElementById("std_reason_other").checked = true;
        } else if (reason == "In progess") {
            document.getElementById("std_reason_inprogess").checked = true;
        }
    </script>
    <!-- Date -->
    <script>
        var d = new Date();
        var y = d.getFullYear();
        var n = d.getDate();
        var month = new Array();
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";
        var m = month[d.getMonth()];
        document.getElementById("day").value = n;
        document.getElementById("month").value = m;
        document.getElementById("year").value = y;
    </script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>