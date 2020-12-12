<!DOCTYPE html>
<html lang="en">

<head>
    <meta lang="en-us">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/thm.css">
    <link rel="stylesheet" href="css/reg211_v2.css">
    <title>MANUAL INPUT FORM - REG211</title>
</head>
<center>

    <body class="fullscreen">
    
        <div class="screen">

        <?php 
        require_once "connectdb.php";
        $sql_SCHOOL = "SELECT SCHOOL_NAME, SCHOOL_ID FROM school ORDER BY `SCHOOL_ID` ASC;";
        $sql_PROGRAM = "SELECT PRO_NAME, SCHOOL_ID FROM program ORDER BY `SCHOOL_ID` ASC;";
        /*$sql_C_CODE = "SELECT COURSE_CODE FROM courses;";
        $sql_C_TITLE = "SELECT COURSE_TITLE FROM courses;";*/

        $result_SCHOOL = mysqli_query($conn,$sql_SCHOOL);
        $result_SCHOOL_2 = mysqli_query($conn,$sql_SCHOOL);
        $result_PROGRAM = mysqli_query($conn,$sql_PROGRAM);

    ?>

        <div class="container">
            
                <div class=" logo">
                    <div>
                    <img src="img/mfulogo.png" style="width:auto; height:8rem;" class="mx-auto d-block mb-3 mt-3">
                    </div>
                </div>
                <div class="wt">
                <br>
                <div class="blinktext">
                    <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">DIVISION OF
                        REGISTRAR, MAE FAH LUANG UNIVERSITY</p>
                    <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">Request Form
                        for Maintaining Student Status</p>
                </div>
                <div class="pad">
                    <!-- START FORM -->
                    <form action="insert_form.php" method="POST" style="font-family:ConcertOne;"
                        onSubmit="JavaScript : return fncSubmit();">
                        <!-- TOP PART -->
                        <div class="choice">
                            <div class="form-row mt-5">
                                <div class="form-group col-12">
                                    <label class="mr-1">Semester: </label>
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" name="semesteroption"
                                            id="firstsemester" value="First" checked="checked">
                                        <label class="form-check-label" for="firstsemester"><span></span>First</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" name="semesteroption"
                                            id="secondsemester" value="Second">
                                        <label class="form-check-label" for="secondsemester"><span></span>Second</label>

                                    </div>
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" name="semesteroption"
                                            id="summersemester" value="Summer">
                                        <label class="form-check-label" for="summersemester"><span></span>Summer</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="FormID">No.</label>
                                <input type="text" class="form-control" name="FormID" id="FormID" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-sm-6">
                                <label for="academicyear">Academic Year</label>
                                <input type="number" class="form-control" name="academicyear" id="academicyear"
                                    placeholder="2020" min=2020 max=2099 value="2020">
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label for="dean_school">To the Dean of</label>
                                <select name="dean_school" class="form-control" id="dean_school" required>
                                    <?php
                        if (mysqli_num_rows($result_SCHOOL) > 0) {
                            while($row = mysqli_fetch_assoc($result_SCHOOL)) {
                                    $SCHOOL_NAME = $row["SCHOOL_NAME"];
                        ?>
                                    <option value="<?= $SCHOOL_NAME ?>"><?= $SCHOOL_NAME ?></option>
                                    <?php }
                            }
                        ?>
                                </select>
                            </div>
                        </div>

                        <!-- (1) -->
                        <div class="text-center">
                            <u>
                                <p class=" head1 mt-5" style="font-size:calc(0.5rem + 1vw);">(1) Student Information &
                                    Request</p>
                            </u>
                        </div>

                        <div class="form-row mt-5">
                            <div class="form-group col-12 col-sm-6">
                                <label for="std_id">Student ID</label>
                                <input type="text" class="form-control" name="std_id" id="std_id">
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label for="std_level">Student level</label>
                                <select name="std_level" id="std_level" class="form-control">
                                    <option value="Undergraduate">Undergraduate Student</option>
                                    <option value="Graduate">Graduate Student</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-2">
                                <label for="std_prefix">Prefix</label>
                                <select name="std_prefix" id="std_prefix" class="form-control">
                                    <option value="Mr.">Mr.</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="std_firstname">Firstname</label>
                                <input type="text" class="form-control" name="std_firstname" id="std_firstname"
                                    placeholder="Firstname">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="std_lastname">Lastname</label>
                                <input type="text" class="form-control" name="std_lastname" id="std_lastname"
                                    placeholder="Lastname">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="std_school">Study in / Graduate from</label>
                                <select name="std_school" class="form-control" id="std_school" required>
                                    <?php
                        if (mysqli_num_rows($result_SCHOOL_2) > 0) {
                            while($row = mysqli_fetch_assoc($result_SCHOOL_2)) {
                                    $SCHOOL_NAME = $row["SCHOOL_NAME"];
                                    $SCHOOL_ID = $row["SCHOOL_ID"];
                        ?>
                                    <option value="<?= $SCHOOL_NAME ?>"><?= $SCHOOL_ID ?> - <?= $SCHOOL_NAME ?></option>
                                    <?php }
                            }
                        ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="std_lastname">Program of</label>
                                <select name="std_program" class="form-control" id="std_program" required>
                                    <?php
                        if (mysqli_num_rows($result_PROGRAM) > 0) {
                            while($row = mysqli_fetch_assoc($result_PROGRAM)) {
                                    $PRO_NAME = $row["PRO_NAME"];
                                    $PRO_SC_ID = $row["SCHOOL_ID"];
                        ?>
                                    <option value="<?= $PRO_NAME ?>"><?= $PRO_SC_ID ?> - <?= $PRO_NAME ?></option>
                                    <?php }
                            }
                        ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12  col-sm-4">
                                <label for="std_phone">Phone Number</label>
                                <input type="tel" class="form-control" name="std_phone" id="std_phone"
                                    placeholder="087356xxxx">
                            </div>
                        </div>

                        <div class="text-center">
                            <u>
                                <p class=" head1 mt-5" style="font-size:calc(0.5rem + 1vw);">Reason(s) for maintaining
                                    student status are</p>
                            </u>
                        </div>

                        <div class="form-row">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" name="std_reason" id="std_reason_inprogess"
                                    value="In progess">
                                <label class="form-check-label" for="std_reason_inprogess"><span></span>Receiving a Pgrade (In Progress)</label>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="form-group col-6  col-sm-6">
                                <label for="std_phone">Course Code</label>
                                <input type="tel" class="form-control" name="course_code" id="std_phone"
                                    placeholder="1501xxx">
                            </div>
                            <div class="form-group col-6  col-sm-6">
                                <label for="std_phone">Course Title</label>
                                <input type="text" class="form-control" name="course_title" id="std_phone"
                                    placeholder="Web Application Development">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" name="std_reason" id="std_reason_other"
                                    value="Other Reason">
                                <label class="form-check-label" for="std_reason_other"><span></span>Other Reason (Please
                                    Specify)</label>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="form-group col-12">
                                <label for="std_reason">Reason</label>
                                <input type="text" class="form-control reason" name="std_reason_other_explain"
                                    id="std_reason_other_explain" placeholder="Specify your reason here">
                            </div>
                        </div>
                        <br>

                        <div class="form-row center mt-2">

                            <button type="submit" name="btn_insert" class="button ml-2">Save</button>
                            <button type="Reset" class="button1 ml-2">Reset Data</button>
                            <a href="index.html"><button type="button" class="button2 ml-2">Back</button></a>

                        </div>
                    </form>
                </div>
            </div>

            <br>
            <br>
        
        <script>
        Date.prototype.toDateInputValue = (function() {
            var local = new Date(this);
            local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
            return local.toJSON().slice(0, 10);
        });
        document.getElementById('date').value = new Date().toDateInputValue();
        </script>
        <script src="js/check_value.js"></script>
        <script src="js/jquery.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
        
    </body>

</html>