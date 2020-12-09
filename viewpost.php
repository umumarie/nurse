
<?php require_once('header.php');?>
<html><body bgcolor="green">
<center>
<table>
<tr>
<td>
<a href="index.php"><button>Home</button></a></td>
<td>
<a href="activities.php"><button>Add Post</button></a></td>


<td>
<a href="viewpost.php"><button>View Posts</button></a></td>



<td>
<a href="createcandidate.php"><button>Candidate</button></a></td>
<td>
<a href="report.php"><button>Report</button></a></td>
</tr>
</table>



<fieldset style="width: 600px;height:315px;border: solid green">
<fieldset style="background-color: green; width: 900px;border: solid black;border-radius: 14px">

<center>
<fieldset style="width: 750px;background-color: darkred;color: white">
	<legend style="color: yellow;background-color: silver;border-radius: 14px">List Of Posts available</legend>

<table style="width: 300px" border="4">
			<tr style="background: silver;color: black">
	<tr>
		<td>Post Id</td><td>Post Name</td><td colspan="2">Decison</td>
	</tr>
	<?php

	require_once('connection.php');
$select="SELECT* FROM post";

$query=mysqli_query($con,$select);

while ($row=mysqli_fetch_array($query)) {
	$postid=$row['PostId'];
	$postname=$row['PostName'];?>

<tr>
	<td><?=$postid;?> </td>
	<td><?=$postname;?> </td>
	<td><a href="updatepost.php?PostId=<?php echo $up=$row['PostId'];?>">Upadate</a> </td>
	<td><a href="deletepost.php?PostId=<?php echo $del=$row['PostId'];?>">Delete</a></td>
</tr>

<?php }

	?>
</table>
</center>
</fieldset>
</tr>
</table>
</fieldset>
</center>
</fieldset>
</fieldset>
</center>

</body>
</html>
<?php
require_once('footer.php');

?>