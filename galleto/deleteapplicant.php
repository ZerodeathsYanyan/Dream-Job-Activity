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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $yes = getApplicantByID($pdo, $_GET['Applicant_id']); ?>
	<form action="core/handleForms.php?Applicant_id=<?php echo $_GET['Applicant_id']; ?>" method="POST">

		<div class="box" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $yes['first_name']; ?></p>
			<p>Last Name: <?php echo $yes['last_name']; ?></p>
			<p>Gender: <?php echo $yes['gender']; ?></p>
			<p>Civil Status: <?php echo $yes['civil_status']; ?></p>
			<p>Birthdate: <?php echo $yes['date_of_birth']; ?></p>
			<p>Job Position Desire: <?php echo $yes['job_position']; ?></p>
			<p>Email: <?php echo $yes['Email']; ?></p>
			<input type="submit" name="deleteApplicantBtn" value="Delete">
		</div>
	</form>
</body>
</html>