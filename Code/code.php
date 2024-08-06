<?php
session_start();
require 'dbcon.php';

if (isset($_POST['sumbit'])) {
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $aadhar = mysqli_real_escape_string($con, $_POST['aadhar']);
    $fathername = mysqli_real_escape_string($con, $_POST['fathername']);
    $relation = mysqli_real_escape_string($con, $_POST['relation']);
    $caste = mysqli_real_escape_string($con, $_POST['caste']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $taluka = mysqli_real_escape_string($con, $_POST['taluka']);
    $village = mysqli_real_escape_string($con, $_POST['village']);
    $IncomeProof = mysqli_real_escape_string($con, $_POST['IncomeProof']);
    $annualincome = mysqli_real_escape_string($con, $_POST['annualincome']);
    $issuedate = mysqli_real_escape_string($con, $_POST['issuedate']);
    $CasteCertificate = mysqli_real_escape_string($con, $_POST['CasteCertificate']);
    $Certificatenumber = mysqli_real_escape_string($con, $_POST['Certificatenumber']);
    $Photo = mysqli_real_escape_string($con, $_POST['Photo']);

    $remark = mysqli_real_escape_string($con, $_POST['remark']);
    $fstatus = mysqli_real_escape_string($con, $_POST['fstatus']);


    $query = "INSERT INTO forms (fullname,dob,email,mobile,gender,aadhar,fathername,relation,caste,district,taluka,village,IncomeProof,annualincome,issuedate,CasteCertificate,Certificatenumber,Photo,remark,fstatus) VALUES ('$fullname','$dob','$email','$mobile','$gender','$aadhar','$fathername','$relation','$caste','$district','$taluka','$village','$IncomeProof','$annualincome','$issuedate','$CasteCertificate','$Certificatenumber','$Photo','$remark','$fstatus')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        echo '<script>
        alert("Your form was successfully submitted");
        window.location="track-id.php";
        </script>';
    } else {
        echo '<script>
        alert("form is fail");
        window.location="certificate.php";
        </script>';
    }
}



if (isset($_POST['updatebtn'])) {
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $remark = mysqli_real_escape_string($con, $_POST['remark']);
    $fstatus = mysqli_real_escape_string($con, $_POST['fstatus']);

    $query = "UPDATE forms SET  remark='$remark', fstatus='$fstatus' WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>
      alert("Updated Successfully");
      </script>';
        //header("Location: index.php");
        exit(0);
    } else {
        echo '<script>
      alert("Not Updated");
      </script>';
        //header("Location: index.php");
        exit(0);
    }

}

?>