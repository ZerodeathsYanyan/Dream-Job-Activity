<?php
require_once 'dbConfig.php';

function insertnewapplicant($pdo, $first_name, $last_name, $gender, $civil_status, $date_of_birth, $job_position, $email) {
   $sql = "INSERT INTO galleto (first_name, last_name, gender, civil_status, date_of_birth, job_position, Email) VALUES (?,?,?,?,?,?,?)";

   $stmt = $pdo->prepare($sql);

   $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $civil_status, $date_of_birth, $job_position, $email]);

   if ($executeQuery) {
      return true;
   }
}

function seeAllApplicants($pdo){
   $sql = "SELECT * FROM galleto";
   $stmt = $pdo->prepare($sql);
   $executeQuery = $stmt->execute();
   if ($executeQuery) {
      return $stmt->fetchAll();
   }
}

function getApplicantByID($pdo, $Applicant_id) {
	$sql = "SELECT * FROM galleto WHERE Applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$Applicant_id])) {
		return $stmt->fetch();
	}
}


function updateApplicant($pdo, $first_name, $last_name, $gender, $civil_status, $date_of_birth, $job_position, $email, $Applicant_id) {
   $sql = "UPDATE galleto 
               SET first_name = ?, 
                   last_name = ?, 
                   gender = ?, 
                   civil_status = ?, 
                   date_of_birth = ?, 
                   job_position = ?, 
                   email = ? 
           WHERE Applicant_id = ?";
   $stmt = $pdo->prepare($sql);
   
   $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $civil_status, $date_of_birth, $job_position, $email, $Applicant_id]);

   if ($executeQuery) {
       return true;
   }
}


function deleteApplicant($pdo, $Applicant_id) {

	$sql = "DELETE FROM galleto WHERE Applicant_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$Applicant_id]);

	if ($executeQuery) {
		return true;
	}

}


?>