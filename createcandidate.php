<?php require_once('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Candidate Creations</title>
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

<fieldset style="width: 600px;height:315px;border: solid green">




<fieldset style="background-color: green; width: 500px;border: solid black;border-radius: 14px">
<fieldset style="width: 450px;background-color: darkred;color: white">
	<legend style="color: yellow">Create|Insert Candidates Info</legend>


	<form method="POST">
		
		<center>

		<table style="width: 400px" border="4">
			<tr>
				<td>
				National Id
				</td><td>:</td><td>
					<input type="text" name="nid" style="width: 200px">
				</td>



				</tr>
				<tr>
				<td>
					First Name
				</td>
				<td>:</td><td>
					<input type="text" name="fname" style="width: 200px">
				</td>

				</tr>
				<tr>

				<td>
					Last Name
				</td>
				<td>:</td><td>
					<input type="text" name="lname" style="width: 200px">
				</td>

				</tr>
				<tr>
				<td>
					Gender
				</td>

				<td>:</td><td>
					<select name="gender" style="width: 200px">
						<option>Male</option>
						<option>Female</option>
					</select>
				</td>

				</tr>
				<tr>
				<td>
						Date Of Birth
				</td>

				<td>:</td><td>
					<input type="date" name="dob" style="width: 200px">
				</td>
				</tr>
				<tr>
				<td>
						Post Id
				</td>

				<td>:</td>
				<td>
				<select name="postid" style="width: 200px">
					
					
<?php
require_once('connection.php');

$select="SELECT PostId FROM post";

$query=mysqli_query($con,$select);

while ($row=mysqli_fetch_assoc($query)) {
	$postid=$row['PostId'];?>
	<option>
	<?=$postid;?>

	</option>
<?php }

?>

					
				</select>
				</td>
				</tr>
				<tr>
				<td>
					Exam Date
				</td>

				<td>:</td><td>
					<input type="date" name="exdate" style="width: 200px">
				</td>

				</tr>
				<tr>
				<td>
					Phone Number
				</td>

				<td>:</td><td>
					<input type="text" name="phone" style="width: 200px">
				</td>

				</tr>
				<tr>
				<td>
					Marks
				</td>

				<td>:</td><td>
					<input type="text" name="marks" style="width: 200px">
				</td>
			</tr>

			<tr>
				<td colspan="3">
				<center>	<input type="submit" name="Candidate" value="Save" style="width: 120px"></center>
				</td>
			</tr>
		</table>
		</center>
	</form>
</fieldset>
</fieldset>
</fieldset>
</body>
</html>



<?php
if (isset($_POST['Candidate'])) {
	
	$nid=$_POST['nid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$pid=$_POST['postid'];
	$exdate=$_POST['exdate'];
	$phone=$_POST['phone'];
	$marks=$_POST['marks'];


	$Insert="INSERT INTO candidatesresult VALUES(
	'$nid',
	'$fname',
	'$lname',
	'$gender',
	'$dob',
	'$pid',
	'$exdate',
	'$phone',
	'$marks')";

	$query=mysqli_query($con,$Insert);
}


?>

<?php
require_once('footer.php');

?>