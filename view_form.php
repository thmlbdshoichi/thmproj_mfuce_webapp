<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/thm.css">
    <title>Form - REG211</title>
</head>

<body>
    <?php 
        require_once "connectdb.php";
        $FORM_NO = $_GET['formid'];

        $sql_selectall = "SELECT * FROM input_form WHERE FORM_NO = $FORM_NO";
    
        $result_selectall = mysqli_query($conn,$sql_selectall);

        if (mysqli_num_rows($result_selectall) > 0) {
            while($row = mysqli_fetch_assoc($result_selectall)) {
                $DATE = $row["DATE"];
                $SEMESTER = $row["SEMESTER"];
                $ACADEMIC_YEAR = $row["ACADEMIC_YEAR"];
                $PREFIX = $row["PREFIX"];
                $ST_ID = $row["ST_ID"];
                $FIRST_NAME = $row["FIRST_NAME"];
                $LAST_NAME = $row["LAST_NAME"];
                $ST_LEVEL = $row["ST_LEVEL"];
                $DEAN = $row["DEAN"];
                $SCHOOL = $row["SCHOOL"];
                $PROGRAM = $row["PROGRAM"];
                $PHONE_NUMBER = $row["PHONE_NUMBER"];
                $REASONS = $row["REASONS"];
                $COURSE_CODE = $row["COURSE_CODE"];
                $COURSE_TITLE = $row["COURSE_TITLE"];
                $OTHER_EXPLAIN = $row["OTHER_EXPLAIN"];
            }
        }
        else
        {
            echo "0 results";
        }
        

    ?>
    <div class="container">
        <img src="img/mfulogo.png" style="width:auto; height:8rem;" class="mx-auto d-block mb-3 mt-3">
        <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">DIVISION OF REGISTRAR, MAE FAH LUANG UNIVERSITY</p>
        <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">Request Form for Maintaining Student Status</p>

        <!-- START FORM -->
        <form action="insert_form.php" method="POST" style="font-family:ConcertOne;">
            <!-- TOP PART -->
            <div class="form-row mt-5">
                <div class="form-group col-12">
                    <label class="mr-1">Semester: </label>
                    <div class="form-check form-check-inline mr-1">
                        <input disabled class="form-check-input" type="radio" name="semesteroption" id="firstsemester" value="First" <?php if($SEMESTER=='First'){ echo "checked=checked";} ?>>
                        <label class="form-check-label" for="firstsemester">First</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input disabled class="form-check-input" type="radio" name="semesteroption" id="secondsemester" value="Second" <?php if($SEMESTER=='Second'){ echo "checked=checked";} ?>>
                        <label class="form-check-label" for="secondsemester">Second</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input disabled class="form-check-input" type="radio" name="semesteroption" id="summersemester" value="Summer" <?php if($SEMESTER=='Summer'){ echo "checked=checked";} ?>>
                        <label class="form-check-label" for="summersemester">Summer</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="FormID">No.</label>
                    <input type="text" class="form-control" name="FormID" id="FormID" value="<?= $FORM_NO ?>" readonly>
                </div>
                <div class="form-group col-6">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" name="date" id="date" value="<?= $DATE ?>" readonly>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-12 col-sm-6">
                    <label for="academicyear">Academic Year</label>
                    <input type="number" class="form-control" name="academicyear" id="academicyear" placeholder="2020" min=2020 max=2099 value="<?= $ACADEMIC_YEAR ?>" readonly>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label for="dean_school">To the Dean of</label>
                    <select name="dean_school" class="form-control" id="dean_school" readonly>
                        <option value="<?= $DEAN ?>"><?= $DEAN ?></option>
                    </select>
                </div>
            </div>

            <!-- (1) -->
            <div class="text-center">
                <p class="mt-5" style="font-size:calc(0.5rem + 1vw);">(1) Student Information & Request</p>
            </div>

            <div class="form-row mt-5">
                <div class="form-group col-12 col-sm-6">
                    <label for="std_id">Student ID</label>
                    <input type="text" class="form-control" name="std_id" id="std_id" value="<?= $ST_ID ?>" readonly>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label for="std_level">Student level</label>
                    <select name="std_level" id="std_level" class="form-control" readonly>
                        <option value="<?= $ST_LEVEL ?>"><?= $ST_LEVEL ?></option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-2">
                    <label for="std_prefix">Prefix</label>
                    <select name="std_prefix" id="std_prefix" class="form-control" readonly>
                        <option value="<?= $PREFIX ?>"><?= $PREFIX ?></option>
                    </select>
                </div>
                <div class="form-group col-sm-5">
                    <label for="std_firstname">Firstname</label>
                    <input type="text" class="form-control" name="std_firstname" id="std_firstname" placeholder="Firstname" value="<?= $FIRST_NAME ?>" readonly>
                </div>
                <div class="form-group col-sm-5">
                    <label for="std_lastname">Lastname</label>
                    <input type="text" class="form-control" name="std_lastname" id="std_lastname" placeholder="Lastname" value="<?= $LAST_NAME ?>" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="std_school">Study in / Graduate from</label>
                    <select name="std_school" class="form-control" id="std_school" readonly>
                        <option value="<?= $SCHOOL ?>"><?= $SCHOOL ?></option>
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="std_lastname">Program of</label>
                    <select name="std_program" class="form-control" id="std_program" readonly>
                    <option value="<?= $PROGRAM ?>"><?= $PROGRAM ?></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12  col-sm-4">
                    <label for="std_phone">Phone Number</label>
                    <input type="tel" class="form-control" name="std_phone" id="std_phone" value="<?= $PHONE_NUMBER ?>" readonly>
                </div>
            </div>

            <div class="text-center">
                <p class="mt-5" style="font-size:calc(0.5rem + 1vw);">Reason(s) for maintaining student status are</p>
            </div>

            <div class="form-row">
                <div class="form-check form-check-inline mr-1">
                    <input class="form-check-input" type="radio" name="std_reason" id="std_reason_inprogess" value="In progess" <?php if($REASONS=='In progess'){ echo "checked=checked";} ?> disabled>
                    <label class="form-check-label" for="std_reason_inprogess">Receiving a P grade (In Progress)</label>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-6  col-sm-6">
                    <label for="std_phone">Course Code</label>
                    <input type="tel" class="form-control" name="course_code" id="std_phone" value="<?= $COURSE_CODE ?>" readonly>
                </div>
                <div class="form-group col-6  col-sm-6">
                    <label for="std_phone">Course Title</label>
                    <input type="text" class="form-control" name="course_title" id="std_phone" value="<?= $COURSE_TITLE ?>" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-check form-check-inline mr-1">
                    <input class="form-check-input" type="radio" name="std_reason" id="std_reason_other" value="Other Reason" <?php if($REASONS=='Other Reason'){ echo "checked=checked";} ?> disabled>
                    <label class="form-check-label" for="std_reason_other">Other Reason (Please Specify)</label>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-12">
                    <label for="std_reason">Reason</label>
                    <input type="text" class="form-control" name="std_reason_other_explain" id="std_reason_other_explain" value="<?= $OTHER_EXPLAIN ?>" readonly>
                </div>
            </div>
            <div class="form-row mt-2">
                <a href="list_form.php"><button type="button" name="btn_back" class="btn btn-dark">Back</button></a>
            </div>
        </form>
        <br>
        <br>
    </div>
    <script src="js/check_value.js"></script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>