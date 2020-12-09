<?php require_once('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Candidate</title>
</head>
<body bgcolor="green">
<center>

<table>
<tr>
<td>
<a href="index.php"><button>Home</button></a></td>


<td>
<a href="viewpost.php"><button>View Posts</button></a></td>



<td>
<a href="createcandidate.php"><button>Candidate</button></a></td>
<td>
<a href="report.php"><button>Report</button></a></td>
</tr>
</table>



<td>
<fieldset style="width: 600px;height:315px;border: solid green">

<fieldset style="background-color: green; width: 900px;border: solid black;border-radius: 14px">

<center>
<fieldset style="width: 750px;background-color: darkred;color: white">
	<legend style="color: yellow;background-color: silver;border-radius: 14px">Candidates for Waiter Post</legend>


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
						Post Name
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
	
	$sql="SELECT candidatesresult.CandidateNationalId,
	candidatesresult.FirstName,
	candidatesresult.LastName,
	candidatesresult.Gender,
	candidatesresult.DateOfBirth,
	candidatesresult.PostId,
	post.PostName,
	candidatesresult.ExamDate,
	candidatesresult.PhoneNumber,
	candidatesresult.Marks 
	FROM candidatesresult INNER JOIN post ON  candidatesresult.PostId=post.PostId WHERE post.PostName='waiter' order by Marks Desc";

	$query=mysqli_query($con,$sql);

	while ($row=mysqli_fetch_assoc($query)){
		

	$nid=$row['CandidateNationalId'];
	$fname=$row['FirstName'];
	$lname=$row['LastName'];
	$gender=$row['Gender'];
	$dob=$row['DateOfBirth'];
	$pid=$row['PostId'];
	$pname=$row['PostName'];
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
		<td><?=$pname?></td>
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
</fieldset></center>
</body>
</html>

<?php
require_once('footer.php');

?>