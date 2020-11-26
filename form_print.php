<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/print.css">
    <link rel="stylesheet" href="css/print.css" media="print">
    <title>Print Form - REG211</title>
    <script type="text/javascript">
        function JsPrint() {
            window.print();
        }
    </script>
</head>

<body>
    <?php
    // Include database connection file
    require_once "connectdb.php";
    /*$form_id = $_GET['form_id'];*/
    $sql = " SELECT * FROM input_form WHERE FORM_NO = '5' ";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $semester = $row['SEMESTER'];
        $date = $row['DATE'];
        $academicyear = $row['ACADEMIC_YEAR'];
        $dean_of = $row['DEAN'];
        $std_id = $row['ST_ID'];
        $std_level = $row['ST_LEVEL'];
        $std_prefix = $row['PREFIX'];
        $std_firstname = $row['FIRST_NAME'];
        $std_lastname = $row['LAST_NAME'];
        $std_school = $row['SCHOOL'];
        $std_program = $row['PROGRAM'];
        $std_address = $row['CURRENT_ADD'];
        $std_subdistrict = $row['SUBDISTRICT'];
        $std_district = $row['DISTRICT'];
        $std_province = $row['PROVINCE'];
        $std_postcode = $row['POST_NO'];
        $std_phone = $row['PHONE_NUMBER'];
        $std_inprocess = $row['IN_PROCESS'];
        $course_code = $row['COURSE_CODE'];
        $course_title = $row['COURSE_TITLE'];
        $std_otherreason = $row['OTHER_REASON'];
        $std_reason = $row['REASON'];
    }
    ?>
    <class class="container">

        <div class="row mt-3"></div>
        <div class="container-inner">

            <div style="height: 80px; ">
                <h6 style="font-weight: bold; text-align: right;">REG-211</h6>
            </div>
            <!-- Top -->
            <div class="row">
                <div class="headbox col-4">
                    <p style="margin-top: 1px;"><label for="" id="bold">School of</label><span><label for="" id="bold" class="dote"></label></span></p>
                    <p><label for="" style="font-weight: bold; text-indent: 4em;">Mae Fah Luang University</label><br></p>
                    <p><label for="">No</label><span><label for="" class="dote"></label></span></p>
                    <p><label for="">Date</label><span><label for="" class="dote"></label></span></p>
                    <div class="row mt-2"></div>
                    <p><label for="" style="margin-top: -11px;">Time</label><label style="width: 30%;" for="" class="dote"></label></p>
                    <p><label for="" style="margin-top: -11px;">Recoded by</label><span><label for="" style="margin-top: -11px;" class="dote"></label></span></p>
                </div>
                <div class="col-4">
                    <img src="img/mfulogo.png" style="width:auto; height:8rem;" class="mx-auto d-block mb-2 mt-5">
                </div>
                <div class="headbox col-4">
                    <p><label for="" style="font-weight: bold; text-indent: 4em;">The Division of Registrar</label><br></p>
                    <p><label for="" style="font-weight: bold; text-indent: 4em;">Mae Fah Luang University</label><br></p>
                    <p><label for="">No</label><span><label for="" class="dote"></label></span></p>
                    <p> <label for="">Date</label><span><label for="" class="dote"></label></span></p>
                    <div class="row mt-2"></div>
                    <p><label for="" style="margin-top: -11px;">Time</label><label style="width: 30%;" for="" class="dote"></label></p>
                    <p><label for="" style="margin-top: -11px;">Recoded by</label><span><label for="" style="margin-top: -11px;" class="dote"></label></span></p>
                </div>
            </div>
            <!-- Top -->
            <div class="row mt-5"></div>
            <p class="text-center" style="font-size:calc(0.5rem + 1vw);">DIVISION OF REGISTRAR, MAE FAH LUANG UNIVERSITY</p>
            <p class="text-center" style="font-size:calc(0.5rem + 1vw);">Request Form for Maintaining Student Status</p>
            <!-- TOP PART -->
            <div class="row mt-4"></div>
            <div class="form-row">
                <div class="form-group col-8">
                    <div class="box">
                        <div class="mat1" style="text-align: right;">
                            <div class="form-check form-check-inline mr-4">
                                <label class="indent mr-3" id="semester">Semester </label>
                                <input class="form-check-input mr-3 mb-1" type="checkbox" name="semesteroption" id="firstsemester" value="First">
                                <label class="form-check-label" for="firstsemester" id="firstsemester">First</label></div>
                            <div class="form-check form-check-inline mr-4">
                                <input class="form-check-input mr-3 mb-1" type="checkbox" name="semesteroption" id="secondsemester" value="Second">
                                <label class="form-check-label" for="secondsemester" id="secondsemester">Second</label></div>
                            <div class="form-check form-check-inline mr-4">
                                <input class="form-check-input mr-3 mb-1" type="checkbox" name="semesteroption" id="summersemester" value="Summer">
                                <label class="form-check-label" for="summersemester" id="summersemester">Summer</label></div>
                            <label class=" indent mb-2" for="Academicyear" id="Academicyear">Academic year </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-1">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 30px;"><?= $academicyear ?></label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END TOP PART -->

            <!-- PART 1 -->
            <div class="row mt-5"></div>
            <div class="form-row">
                <div class="form-group col-3">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="font-weight: bold; text-indent: 4em;"> (1) To the Dean of School</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-4">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 2.5em;"><?= $dean_of ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="text-indent: 3em;">Student level </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-3">
                    <div class="box">
                        <div class="mat1">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="checkbox" name="std_reason" id="std_level_undergrad" value="Other Reason">
                                <label class="form-check-label" for="std_reason_other">Undergraduate student</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="checkbox" name="std_reason" id="std_level_grad" value="Other Reason">
                                <label class="form-check-label" for="std_reason_other">Graduate student</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4"></div>
            <div class="form-row">
                <div class="form-group col-2">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="text-indent: 7.5em;">Name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-5">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_prefix ?></label>
                            <label for="" style="text-indent: 1em;"> <?= $std_firstname ?></label>
                            <label for="" style="text-indent: 1em;"><?= $std_lastname ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="text-indent: 3em;">Student ID </label>
                        </div>
                    </div>
                </div>
                <?php
                $txt_stid = " $std_id ";
                ?>
                <div class="form-group col-3">
                    <div class="box">
                        <div class="mat1" style="bottom: -10px;">
                            <table border="1">
                                <tr>
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
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4"></div>
            <div class="form-row">
                <div class="form-group col-3">
                    <div class="box">
                        <div class="mat1">
                            <label for="">Study in /graduated from School of</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-4">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_school ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-1">
                    <div class="box">
                        <div class="mat1">
                            <label for="">Program of</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-4">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_program ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4"></div>
            <div class="form-row">
                <div class="form-group col-2">
                    <div class="box">
                        <div class="mat1">
                            <label for="">Current address</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-5">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_address ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-1">
                    <div class="box">
                        <div class="mat1">
                            <label for="">Subdistrict</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-4">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_subdistrict ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4"></div>
            <div class="form-row">
                <div class="form-group col-1">
                    <div class="box">
                        <div class="mat1">
                            <label for="">District</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_district ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-1">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="text-indent: 1em;">Province</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_province  ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-1">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="text-indent: 1em; ">Post code</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-1">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em; font-family: sans-serif;"><?= $std_postcode  ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="text-indent: 3em;">Mobile phone</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em; font-family: sans-serif;"><?= $std_phone ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-10">
                    <label for="">Reason(s) for maintaining student status are</label>
                </div>
            </div>
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
                    $cousre_id = " $course_code  ";
                    ?>
                    <table border="1">
                        <tr>
                            <th><?= substr($cousre_id, 1, 1) ?></th>
                            <th><?= substr($cousre_id, 2, 1) ?></th>
                            <th><?= substr($cousre_id, 3, 1) ?></th>
                            <th><?= substr($cousre_id, 4, 1) ?></th>
                            <th><?= substr($cousre_id, 5, 1) ?></th>
                            <th><?= substr($cousre_id, 6, 1) ?></th>
                            <th><?= substr($cousre_id, 7, 1) ?></th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mt-4"></div>
            <div class="form-row">
                <div class="form-group col-2">
                </div>
                <div class="form-group col-2">
                    <div class="box">
                        <div class="mat1">
                            <label for="" style="text-indent: 2em;">Course Title</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-8">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $course_title ?></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-2">
                    <!-- blank -->
                </div>
                <div class="form-check form-check-inline mr-1">
                    <input class="form-check-input" type="checkbox" name="std_reason" id="std_reason_other" value="Other Reason">
                    <label class="form-check-label" for="std_reason_other" style="text-indent: 1em;">Other Reason (Please Specify)</label>
                </div>
            </div>
            <div class="row mt-4"></div>
            <div class="form-row">
                <div class="form-group col-2">
                    <!-- blank -->
                </div>
                <div class="form-group col-10">
                    <div class="box-dote">
                        <div class="mat">
                            <label for="" style="text-indent: 1em;"><?= $std_reason ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-1">
                    <!-- blank -->
                </div>
                <div class="form-group col-11">
                    <label for="">For your consideration </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6" style="text-align: right;">
                    <label for="" class="indent">Student's Signature </label>
                </div>
                <div class="form-group col-6 style=" text-align: left;">
                    <center><span style="padding:8px; width:55%"><label for="" class="dote"></label></span></center>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                </div>
                <div class="form-group col-6" style="text-align: left; text-indent: 3px;">
                    <center><span style="padding:8px; width:55%"><label for="" class="dote"></label></span></center>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-8">
                </div>
                <div class="form-group col-4" style="text-align: left;">
                    <center>
                        <p><label style="width: 10%;" for="" class="dote"></label><label for="" style="margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote""></label><label for="" style=" margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote"></label><label for=""></label></p>
                    </center>
                </div>
            </div>
            <!-- END PART 1 -->

            <!-- TABLE PART 2, 3 -->
            <div class="row">
                <div class="part2 col-6">
                    <h6>(2) Advisor's Comment</h6>
                    <div class="column3">
                        <br><br><br><br>
                        <label for="" class="indent">Signature</label>
                    </div>
                    <div class="column2">
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <center><span style="padding:8px; width:55%"><label for="" class="dote"></label></span></center>
                        <center><span style="padding:8px; width:50%"><label for="" class="dote"></label></span></center>

                    </div>
                    <div class="column2">
                        <p><label style="width: 10%;" for="" class="dote"></label><label for="" style="margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote""></label><label for="" style=" margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote"></label><label for=""></label></p>
                    </div>
                </div>
                <div class="part3 col-6">
                    <h6>(3) Dean's Comment</h6>
                    <div class="column3">
                        <br><br><br><br>
                        <label for="" class="indent">Signature</label>
                    </div>
                    <div class="column2">
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <center><span style="padding:8px; width:55%"><label for="" class="dote"></label></span></center>
                        <center><span style="padding:8px; width:50%"><label for="" class="dote"></label></span></center>
                        <center>
                            <p><label style="width: 10%;" for="" class="dote"></label><label for="" style="margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote""></label><label for="" style=" margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote"></label><label for=""></label></p>
                        </center>
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
                        <center><span style="padding:8px; width:55%"><label for="" class="dote"></label></span></center>
                        <center><span style="padding:8px; width:50%"><label for="" class="dote"></label></span></center>
                        <center>
                            <p><label style="width: 10%;" for="" class="dote"></label><label for="" style="margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote""></label><label for="" style=" margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote"></label><label for=""></label></p>
                        </center>
                    </div>
                </div>
                <div class="part5 col-6">
                    <h6>(5) Head of Division of Registrar's Comment</h6>
                    <div class="column3">
                        <br><br><br><br>
                        <label for="" class="indent">Signature</label>
                    </div>
                    <div class="column2">
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <span style="padding:8px;"><label for="" class="dote"></label></span>
                        <center><span style="padding:8px; width:55%"><label for="" class="dote"></label></span></center>
                        <center><span style="padding:8px; width:50%"><label for="" class="dote"></label></span></center>
                        <p style="text-align: center;"><label style="width: 10%;" for="" class="dote"></label><label for="" style="margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote""></label><label for="" style=" margin-top: -11px;">/</label><label style="width: 10%;" for="" class="dote"></label><label for=""></label></p>
                    </div>
                </div>
            </div>
            <div class="row mt-4"></div>
            <div class="form-group">
                <div class="center">
                    <button class="btn btn-success print" onclick="JsPrint();"> Print </button>
                </div>
            </div>
        </div>
    </class>
    <!-- Function checked box-->
    <script>
        /*  Checked box semester */
        let semester = "<?php print $semester ?>";
        if (semester == "First") {
            document.getElementById("firstsemester").checked = true;
        } else if (semester == "Second") {
            document.getElementById("secondsemester").checked = true;
        } else if (semester == "Summer") {
            document.getElementById("summersemester").checked = true;
        } else {
            document.getElementById("summersemester").checked = true;
        }

        /*  Checked box Student level*/
        let std_level = "<?php print $std_level ?>";
        if (std_level == "Undergraduate Student") {
            document.getElementById("std_level_undergrad").checked = true;
        } else if (std_level == "Graduate Student") {
            document.getElementById("std_level_grad").checked = true;
        }

        /*  Checked box Student In process */
        let prcess = "<?php print $std_inprocess ?>";
        if (prcess == "In progess") {
            document.getElementById("std_reason_inprogess").checked = true;
        } else {
            document.getElementById("std_reason_inprogess").checked = false;
        }

        /*  Checked box Student other reason */
        let reason = "<?php print $std_otherreason ?>";
        if (reason == "Other Reason") {
            document.getElementById("std_reason_other").checked = true;
        } else {
            document.getElementById("std_reason_other").checked = false;
        }
    </script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>