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
    <div class="container">
        <img src="img/mfulogo.png" style="width:auto; height:8rem;" class="mx-auto d-block mb-3 mt-3">
        <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">DIVISION OF REGISTRAR, MAE FAH LUANG UNIVERSITY</p>
        <p class="text-center" style="font-size:calc(0.5rem + 1vw); font-family:ConcertOne;">Request Form for Maintaining Student Status</p>

        <!-- START FORM -->
        <form action="insert_form.php" method="POST" style="font-family:ConcertOne;" onSubmit="JavaScript:return fncSubmit();">
            <!-- TOP PART -->
            <div class="form-row mt-5">
                <div class="form-group col-12">
                    <label class="mr-1">Semester: </label>
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" type="radio" name="semesteroption" id="firstsemester" value="First">
                        <label class="form-check-label" for="firstsemester">First</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" type="radio" name="semesteroption" id="secondsemester" value="Second">
                        <label class="form-check-label" for="secondsemester">Second</label>
                    </div>
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input" type="radio" name="semesteroption" id="summersemester" value="Summer">
                        <label class="form-check-label" for="summersemester">Summer</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="FormID">No.</label>
                    <input type="text" class="form-control" name="FormID" id="FormID">
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
                        <option value="School of Liberal Arts">School of Liberal Arts</option>
                        <option value="School of Science">School of Science</option>
                        <option value="School of Management">School of Management</option>
                        <option value="School of Information Technology">School of Information Technology</option>
                        <option value="School of Agro-Industry">School of Agro-Industry</option>
                        <option value="School of Law">School of Law</option>
                        <option value="School of Cosmetic Science">School of Cosmetic Science</option>
                        <option value="School of Health Science">School of Health Science</option>
                        <option value="School of Nursing">School of Nursing</option>
                        <option value="School of Medicine">School of Medicine</option>
                        <option value="School of Dentistry">School of Dentistry</option>
                        <option value="School of Social Innovation">School of Social Innovation</option>
                        <option value="School of Sinology">School of Sinology</option>
                        <option value="School of Integrative Medicine">School of Integrative Medicine</option>
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
                    <input type="text" class="form-control" name="std_id" id="std_id">
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label for="std_level">Student level</label>
                    <select name="std_level" id="std_level" class="form-control">
                        <option value="Undergraduate Student">Undergraduate Student</option>
                        <option value="Graduate Student">Graduate Student</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-2">
                    <label for="std_prefix">Prefix</label>
                    <select name="std_prefix" id="std_prefix" class="form-control">
                        <option value="MR.">Mr</option>
                        <option value="MISS">Miss</option>
                        <option value="MRS.">Mrs</option>
                    </select>
                </div>
                <div class="form-group col-sm-5">
                    <label for="std_firstname">Firstname</label>
                    <input type="text" class="form-control" name="std_firstname" id="std_firstname" placeholder="Firstname">
                </div>
                <div class="form-group col-sm-5">
                    <label for="std_lastname">Lastname</label>
                    <input type="text" class="form-control" name="std_lastname" id="std_lastname" placeholder="Lastname">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="std_school">Study in / Graduate from</label>
                    <select name="std_school" class="form-control" id="std_school" required>
                        <option value="School of Liberal Arts">School of Liberal Arts</option>
                        <option value="School of Science">School of Science</option>
                        <option value="School of Management">School of Management</option>
                        <option value="School of Information Technology">School of Information Technology</option>
                        <option value="School of Agro-Industry">School of Agro-Industry</option>
                        <option value="School of Law">School of Law</option>
                        <option value="School of Cosmetic Science">School of Cosmetic Science</option>
                        <option value="School of Health Science">School of Health Science</option>
                        <option value="School of Nursing">School of Nursing</option>
                        <option value="School of Medicine">School of Medicine</option>
                        <option value="School of Dentistry">School of Dentistry</option>
                        <option value="School of Social Innovation">School of Social Innovation</option>
                        <option value="School of Sinology">School of Sinology</option>
                        <option value="School of Integrative Medicine">School of Integrative Medicine</option>
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="std_lastname">Program of</label>
                    <input type="text" class="form-control" name="std_program" id="std_program" placeholder="Computer Engineering">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12 col-sm-4">
                    <label for="std_lastname">Current Address</label>
                    <input type="text" class="form-control" name="std_address" id="std_address" placeholder="221 Baker Street, Soi 5">
                </div>
                <div class="form-group col-6  col-sm-4">
                    <label for="std_lastname">Subdistrict</label>
                    <input type="text" class="form-control" name="std_subdistrict" id="std_subdistrict" placeholder="Mae Rai">
                </div>
                <div class="form-group col-6  col-sm-4">
                    <label for="std_lastname">District</label>
                    <input type="text" class="form-control" name="std_district" id="std_district" placeholder="Mae Chan">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6  col-sm-4">
                    <label for="std_lastname">Province</label>
                    <input type="text" class="form-control" name="std_province" id="std_province" placeholder="Chiang Rai">
                </div>
                <div class="form-group col-6  col-sm-4">
                    <label for="std_lastname">Postal Code</label>
                    <input type="text" class="form-control" name="std_postcode" id="std_postcode" placeholder="57100">
                </div>
                <div class="form-group col-12  col-sm-4">
                    <label for="std_phone">Phone Number</label>
                    <input type="tel" class="form-control" name="std_phone" id="std_phone" placeholder="08xxxxxxxx">
                </div>
            </div>

            <div class="text-center">
                <p class="mt-5" style="font-size:calc(0.5rem + 1vw);">Reason(s) for maintaining student status are</p>
            </div>

            <div class="form-row">
                <div class="form-check form-check-inline mr-1">
                    <input class="form-check-input" type="radio" name="std_reason" id="std_reason_inprogess" value="In progess">
                    <label class="form-check-label" for="std_reason_inprogess">Receiving a P grade (In Progress)</label>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-6  col-sm-6">
                    <label for="std_phone">Course Code</label>
                    <input type="tel" class="form-control" name="course_code" id="std_phone" placeholder="1501xxx">
                </div>
                <div class="form-group col-6  col-sm-6">
                    <label for="std_phone">Course Title</label>
                    <input type="tel" class="form-control" name="course_title" id="std_phone" placeholder="Web Application Development">
                </div>
            </div>
            <div class="form-row">
                <div class="form-check form-check-inline mr-1">
                    <input class="form-check-input" type="radio" name="std_reason" id="std_reason_other" value="Other Reason">
                    <label class="form-check-label" for="std_reason_other">Other Reason (Please Specify)</label>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-12">
                    <label for="std_reason">Reason</label>
                    <input type="tel" class="form-control" name="std_reason" id="std_reason" placeholder="">
                </div>
            </div>
            <div class="form-row mt-2">
                <button type="submit" name="btn_insert" class="btn btn-success">Save</button>
                <button type="Reset" class="btn btn-danger">Reset Data</button>
            </div>
        </form>
    </div>
    <script src="js/check_value.js"></script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>