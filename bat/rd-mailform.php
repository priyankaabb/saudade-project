<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');



// get the post records
echo $_POST['rname'];
$txtDname= $_POST['dnames'];
$txtAge = $_POST['age'];
$txtDdate = $_POST['ddate'];
$txtDplace = $_POST['dplace'];
$txtDcause= $_POST['dcause'];
$txtMessage = $_POST['message'];
$Image = $_POST['img'];
$txtBdate = $_POST['bdate'];
$txtBplace= $_POST['bplace'];
$txtNplace = $_POST['nplace'];
$txtFatherName = $_POST['fathername'];
$txtMotherName = $_POST['mothername'];
$txtBrothername= $_POST['broname'];
$txtSistername= $_POST['sisname'];
$txtMdate = $_POST['madate'];
$txtSpouseName = $_POST['sname'];
$txtAddress = $_POST['add'];
$txtContact= $_POST['num'];
$txtEmail = $_POST['email'];
$txtFuneralPlace = $_POST['fplace'];
$txtFuneralDate= $_POST['fdate'];
$txtVisitPlace = $_POST['vplace'];
$txtVisitDate = $_POST['vdate'];

$con = mysqli_connect('localhost', 'root', '','db_saudade');

// database insert SQL code
$sql = "INSERT INTO tbl_registration (r_id, r_full_name, r_d_full_name, r_age, r_death_date, r_death_place, r_death_cause, r_birth_date, r_birth_place, r_native_place, r_father_name, r_mother_name, r_brother_name,r_sister_name, r_marriage_date, r_spouse_name, r_address, r_contact, r_email, r_funeral_place, r_funeral_date, r_visit_place, r_visit_date, r_few_words) VALUES ('', '$txtName', '$txtDname', '$txtAge', '$txtDdate', '$txtDplace', '$txtDcause', '$txtBdate', '$txtBplace', '$txtNplace', '$txtFatherName', '$txtMotherName', '$txtBrothername','$txtSistername', '$txtMdate', '$txtSpouseName', '$txtAddress', '$txtContact', '$txtEmail', '$txtFuneralPlace', '$txtFuneralDate', '$txtVisitPlace', '$txtVisitDate', '$txtMessage');";

//$sql = "INSERT INTO tbl_registration(r_id,r_full_name) VALUES ('','$txtName');";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs == TRUE)
{
	echo "Contact Records Inserted";
}

?>