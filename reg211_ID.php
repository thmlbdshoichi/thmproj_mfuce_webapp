<!DOCTYPE html>
<html lang="en">

<head>
    <meta lang="en-us">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/thm.css">
    <link rel="stylesheet" href="css/reg211_ID.css">
    <title>AUTO INPUT FORM - REG211</title>
</head>

<body>
    <div class="fullscreen">
        <?php 
            require_once "connectdb.php";

            $STUDENT_ID = $_POST['STUDENT_ID'];

            $sql_studentdetail = "SELECT * FROM student_detail WHERE ST_ID = $STUDENT_ID;";
            $sql_SCHOOL = "SELECT SCHOOL_NAME, SCHOOL_ID FROM school ORDER BY `SCHOOL_ID` ASC;";
            $sql_PROGRAM = "SELECT PRO_NAME, SCHOOL_ID FROM program ORDER BY `SCHOOL_ID` ASC;";

            $result_studentdetail = mysqli_query($conn,$sql_studentdetail);
            $result_SCHOOL = mysqli_query($conn,$sql_SCHOOL);
            $result_SCHOOL_2 = mysqli_query($conn,$sql_SCHOOL);
            $result_PROGRAM = mysqli_query($conn,$sql_PROGRAM);

            if (mysqli_num_rows($result_studentdetail) > 0) {
                while($row = mysqli_fetch_assoc($result_studentdetail)) {
                    $ST_ID = $row["ST_ID"];
                    $ST_PREFIX = $row["PREFIX"];
                    $F_NAME = $row["F_NAME"];
                    $L_NAME = $row["L_NAME"];
                    $ST_SCHOOL_NAME = $row["SCHOOL_NAME"];
                    $ST_PRO_NAME = $row["PRO_NAME"];
                    $ST_STATUS = $row["STATUS"];
                    $ST_PHONE = $row["PHONE_NO"];
                }
            }
            else
            {
                header("location: reg211.php");
            }

        ?>
        
        <div class="container">
                <div class="boxform-top">
                    <img src="img/mfulogo.png" style="width:auto; height:8rem;" class="mx-auto d-block mt-3">
                <div class="blinktext">
                    <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">DIVISION OF REGISTRAR, MAE FAH LUANG UNIVERSITY</p>
                    <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">Request Form for Maintaining Student Status</p>
                </div>

                </div>    
                <div class="form">
                    <!-- START FORM -->
                    <form action="insert_form.php" method="POST" style="font-family:ConcertOne;" onSubmit="JavaScript : return fncSubmit();">
                        <!-- TOP PART -->
                        <div class="form-row mt-2">
                            <div class="form-group col-12">
                                <label class="mr-1">Semester: </label>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" type="radio" name="semesteroption" id="firstsemester" value="First">
                                    <label class="form-check-label" for="firstsemester"><span></span> First</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" type="radio" name="semesteroption" id="secondsemester" value="Second">
                                    <label class="form-check-label" for="secondsemester"><span></span> Second</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" type="radio" name="semesteroption" id="summersemester" value="Summer">
                                    <label class="form-check-label" for="summersemester"><span></span> Summer</label>
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
                                <input type="number" class="form-control" name="academicyear" id="academicyear" placeholder="2020" min=2020 max=2099 value="2020">
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label for="dean_school">To the Dean of</label>
                                <select name="dean_school" class="form-control" id="dean_school" required>
                                <?php
                                if (mysqli_num_rows($result_SCHOOL) > 0) {
                                    while($row = mysqli_fetch_assoc($result_SCHOOL)) {
                                            $SCHOOL_NAME = $row["SCHOOL_NAME"];
                                ?>  
                                <option value="<?= $SCHOOL_NAME ?>" <?php if($SCHOOL_NAME==$ST_SCHOOL_NAME){ echo "selected=selected";} ?>><?= $SCHOOL_NAME ?></option>
                                <?php }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>

                        <!-- (1) -->
                        <div class="text-center">
                            <p class=" student mt-5" style="font-size:calc(0.5rem + 1vw);"><u>(1) Student Information & Request</u></p>
                        </div>

                        <div class="form-row mt-5">
                            <div class="form-group col-12 col-sm-6">
                                <label for="std_id">Student ID</label>
                                <input type="text" class="form-control" name="std_id" id="std_id" value="<?= $ST_ID ?>">
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label for="std_level">Student level</label>
                                <select name="std_level" id="std_level" class="form-control">
                                    <option value="Undergraduate" <?php if($ST_STATUS=="Undergraduate"){ echo "selected=selected";} ?>>Undergraduate Student</option>
                                    <option value="Graduate" <?php if($ST_STATUS=="Graduate"){ echo "selected=selected";} ?>>Graduate Student</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-2">
                                <label for="std_prefix">Prefix</label>
                                <select name="std_prefix" id="std_prefix" class="form-control">
                                    <option value="Mr." <?php if($ST_PREFIX=="Mr."){ echo "selected=selected";} ?>>Mr.</option>
                                    <option value="Miss" <?php if($ST_PREFIX=="Miss"){ echo "selected=selected";} ?>>Miss</option>
                                    <option value="Mrs." <?php if($ST_PREFIX=="Mrs."){ echo "selected=selected";} ?>>Mrs.</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="std_firstname">Firstname</label>
                                <input type="text" class="form-control" name="std_firstname" id="std_firstname" placeholder="Firstname" value="<?= $F_NAME ?>">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="std_lastname">Lastname</label>
                                <input type="text" class="lastname form-control" name="std_lastname" id="std_lastname" placeholder="Lastname" value="<?= $L_NAME ?>">
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
                                <option value="<?= $SCHOOL_NAME ?>" <?php if($SCHOOL_NAME==$ST_SCHOOL_NAME){ echo "selected=selected";} ?>><?= $SCHOOL_ID ?> - <?= $SCHOOL_NAME ?></option>
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
                                <option value="<?= $PRO_NAME ?>" <?php if($PRO_NAME==$ST_PRO_NAME){ echo "selected=selected";} ?>><?= $PRO_SC_ID ?> - <?= $PRO_NAME ?></option>
                                <?php }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12  col-sm-4">
                                <label for="std_phone">Phone Number</label>
                                <input type="tel" class="form-control" name="std_phone" id="std_phone" placeholder="087356xxxx" value="<?= $ST_PHONE?>">
                            </div>
                        </div>

                        <div class="text-center">
                            <p  class="reason mt-5" style="font-size:calc(0.5rem + 1vw);"> <u> Reason(s) for maintaining student status are</u></p>
                        </div>

                        <div class="form-row">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" name="std_reason" id="std_reason_inprogess" value="In progess">
                                <label class="form-check-label" for="std_reason_inprogess"><span></span> Receiving a P grade (In Progress)</label>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="form-group col-6  col-sm-6">
                                <label for="std_phone">Course Code</label>
                                <input type="tel" class="form-control" name="course_code" id="std_phone" placeholder="1501xxx">
                            </div>
                            <div class="form-group col-6  col-sm-6">
                                <label for="std_phone">Course Title</label>
                                <input type="text" class="form-control" name="course_title" id="std_phone" placeholder="Web Application Development">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" name="std_reason" id="std_reason_other" value="Other Reason">
                                <label class="form-check-label" for="std_reason_other"><span></span> Other Reason (Please Specify)</label>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="form-group col-12">
                                <label for="std_reason">Reason</label>
                                <input type="text" class="form-control textreason" name="std_reason_other_explain" id="std_reason_other_explain" placeholder="Specify your reason here">
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <button type="submit" name="btn_insert" class="btn btn-success">Save</button>
                            <button type="Reset" class="btn btn-danger ml-1">Reset Data</button>
                            <a href="index.html"><button type="button" class="btn btn-dark ml-1">Back</button></a>
                        </div>
                    </form>
                    <br>
                    <br> 
            </div>
        </div>
    </div>
    <script>
        Date.prototype.toDateInputValue = (function() {
        var local = new Date(this);
        local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
        return local.toJSON().slice(0,10);
        });
        document.getElementById('date').value = new Date().toDateInputValue();
    </script>
   
    <script src="js/check_value.js"></script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>