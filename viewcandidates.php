<?php require_once('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Candidate</title>
</head>
<body bgcolor="green">




<fieldset style="background-color: green; width: 900px;border: solid black;border-radius: 14px">

<center>
<fieldset style="width: 750px;background-color: darkred;color: white">
	<legend style="color: yellow;background-color: silver;border-radius: 14px">List of candidants</legend>


	<form method="POST">
		


		<table style="width: 650px" border="4">
			<tr style="background: silver;color: black">
				<td>
				National Id
				</td>
				<td>
					First Name
				</td>

				<td>
					Last Name
				</td>
				<td>
					Gender
				</td>
				<td>
						Date Of Birth
				</td>
				<td>
						Post Id
				</td>
				
				<td>
					Exam Date
				</td>
				<td>
					Phone Number
				</td>
				<td>
					Marks
				</td>
			</tr>
		


<?php
require_once('connection.php');

//if (isset($_GET['PostId'])) {

	//$PostId=$_GET['PostId'];
	
	$sql="SELECT * FROM candidatesresult order by Marks desc";

	$query=mysqli_query($con,$sql);

	while ($row=mysqli_fetch_assoc($query)){
		

	$nid=$row['CandidateNationalId'];
	$fname=$row['FirstName'];
	$lname=$row['LastName'];
	$gender=$row['Gender'];
	$dob=$row['DateOfBirth'];
	$pid=$row['PostId'];
	$exdate=$row['ExamDate'];
	$phone=$row['PhoneNumber'];
	$marks=$row['Marks'];?>


	<tr>
		<td><?=$nid?></td>
		<td><?=$fname;?></td>
		<td><?=$lname?></td>
		<td><?=$gender?></td>
		<td><?=$dob?></td>
		<td><?=$pid?></td>
		<td><?=$exdate?></td>
		<td><?=$phone?></td>
		<td><?=$marks?></td>
	</tr>

	<?php
	//}
}



?>
</table>
	</form>
</fieldset>
</center>
</fieldset>
</body>
</html>

<?php
require_once('footer.php');

?>