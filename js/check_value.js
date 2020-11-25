function fncSubmit() {
    if (document.getElementById('firstsemester').checked == false && document.getElementById('secondsemester').checked == false && document.getElementById('summersemester').checked == false) {
        alert('Warning: Do not forget to check semester.');
        return false;
    }
    if (document.getElementById('academicyear').value == "") {
        alert('Warning: Please Insert your academic year.');
        return false;
    }
    if (document.getElementById('date').value == "") {
        alert('Warning: Please Select Date');
        return false;
    }
    if (document.getElementById('dean_school').value == "" || document.getElementById('std_school').value == "") {
        alert('Warning: Please Select School');
        return false;
    }
    if (document.getElementById('std_id').value == "") {
        alert('Error: Unknow Identity, Please insert your Student ID');
        return false;
    }
    if (document.getElementById('std_level').value == "") {
        alert('Warning: Please Choose your Student Level');
        return false;
    }
    if (document.getElementById('std_prefix').value == "") {
        alert('Warning: Please specify your prefix');
        return false;
    }
    if (document.getElementById('std_firstname').value == "") {
        alert('Error: Unknow Identity, Please insert your name');
        return false;
    }
    if (document.getElementById('std_lastname').value == "") {
        alert('Error: Unknow Identity, Please insert your lastname');
        return false;
    }
    if (document.getElementById('std_program').value == "") {
        alert('Waring: Please Select your Program');
        return false;
    }
    if (document.getElementById('std_address').value == "") {
        alert('Warning: Unknown Address');
        return false;
    }
    if (document.getElementById('std_subdistrict').value == "") {
        alert('Warning: Unknown Subdistrict');
        return false;
    }
    if (document.getElementById('std_district').value == "") {
        alert('Warning: Unknown District');
        return false;
    }
    if (document.getElementById('std_province').value == "") {
        alert('Warning: Unknown Province');
        return false;
    }
    if (document.getElementById('std_postcode').value == "") {
        alert('Warning: Unknown Postcode');
        return false;
    }
    if (document.getElementById('std_phone').value == "") {
        alert('Warning: Unknown Phone');
        return false;
    }
}