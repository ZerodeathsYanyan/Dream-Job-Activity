<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        p,h1,h3,input{
            font-family: sans-serif;
        }
        input, select{
            height: 25px;
			width: 150px;
        }
        table, th, td {
		  border:1px solid black;
		}
        img{
            width: 30px;
            height: auto;
        }
    </style>

    <h1>Web Developer</h1>
    <h3>Registration Form</h3>
    <form action="core/handleForms.php" method="POST">  
        <P><label for="first_name">First Name</label><input type="text" name="first_name"></p>
        <P><label for="last_name">Last Name</label><input type="text" name="last_name"></p>
        <P><label for="gender">Gender</label><input type="text" name="gender"></p>

        <p><label for="civil_status">Civil Status</label><input type="text" name="civil_status"></p>
        <P><label for="date_of_birth">Birthdate</label><input type="date" name="date_of_birth"></p>
        <P><label for="job_position">Job Postion Desire</label><input type="text" name="job_position"></p>
        <p><label for="Email">Email</label><input type="text" name="Email"></p>
        
        <input type="submit" name="insertNewApplicantBtn">

    <table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Applicant ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Civil Status</th>
	    <th>Birthdate</th>
	    <th>Job Postion Desire</th>
	    <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
	  </tr>

	  <?php $seeAllApplicants = seeAllApplicants($pdo); ?>
	  <?php foreach ($seeAllApplicants as $row) { ?>
	  <tr>
	  	<td><?php echo $row['Applicant_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['civil_status']; ?></td>
	  	<td><?php echo $row['date_of_birth']; ?></td>
	  	<td><?php echo $row['job_position']; ?></td>
        <td><?php echo $row['Email']; ?></td>
	  	<td>
          <a href="editapplicant.php?Applicant_id=<?php echo $row['Applicant_id'];?>">
        <img src="edit.png" alt="Edit">
        </a>
        </td>
        <td>
        <a href="deleteapplicant.php?Applicant_id=<?php echo $row['Applicant_id'];?>">
        <img src="delete.png" alt="Delete">
        </a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
    </form>
</body>
</html>