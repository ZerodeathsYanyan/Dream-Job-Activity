<?php 
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewApplicantBtn'])){
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $gender = $_POST['gender'];
   $civil_status = $_POST['civil_status'];
   $date_of_birth = $_POST['date_of_birth'];
   $job_position = $_POST['job_position'];
   $email = $_POST['Email'];

   if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($civil_status) && !empty($date_of_birth) && !empty($job_position) && !empty($email)) {

		$query = insertnewapplicant($pdo, $first_name, $last_name, $gender, $civil_status, $date_of_birth, $job_position, $email);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Adding failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['editApplicantBtn'])) {
   // Get Applicant_id from POST instead of GET
   $Applicant_id = $_POST['Applicant_id']; 

   $first_name = trim($_POST['first_name']);
   $last_name = trim($_POST['last_name']);
   $gender = trim($_POST['gender']);
   $civil_status = trim($_POST['civil_status']);
   $date_of_birth = trim($_POST['date_of_birth']);
   $job_position = trim($_POST['job_position']);
   $email = trim($_POST['Email']);

   if (!empty($Applicant_id) && !empty($first_name) && !empty($last_name) && !empty($gender) && !empty($civil_status) && !empty($date_of_birth) && !empty($job_position) && !empty($email)) {

       $query = updateApplicant($pdo, $first_name, $last_name, $gender, $civil_status, $date_of_birth, $job_position, $email, $Applicant_id);

       if ($query) {
           header("Location: ../index.php");
       } else {
           echo "Update failed";
       }

   } else {
       echo "Make sure that no fields are empty";
   }
}


if (isset($_POST['deleteApplicantBtn'])) {

	$query = deleteApplicant($pdo, $_GET['Applicant_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}

?>
