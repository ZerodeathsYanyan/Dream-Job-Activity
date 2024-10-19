<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $no = getApplicantByID($pdo, $_GET['Applicant_id']); ?>
	<form action="core/handleForms.php" method="POST">
   <input type="hidden" name="Applicant_id" value="<?php echo $_GET['Applicant_id']; ?>">
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $no['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $no['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $no['gender']; ?>">
		</p>
		<p>
			<label for="civil_status">Civil Status</label>
			<input type="text" name="civil_status" value="<?php echo $no['civil_status']; ?>">
		</p>
		<p>
			<label for="date_of_birth">Birthdate</label>
			<input type="text" name="date_of_birth" value="<?php echo $no['date_of_birth']; ?>">
		</p>
		<p>
			<label for="job_position">Job Position Desire</label>
			<input type="text" name="job_position" value="<?php echo $no['job_position']; ?>"></p>
		<p>
			<label for="Email">Email</label>
			<input type="text" name="Email" value="<?php echo $no['Email']; ?>">
			<input type="submit" name="editApplicantBtn">
		</p>
	</form>
</body>
</html>