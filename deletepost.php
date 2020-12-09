<?php require_once('header.php');?>

<?php
require_once('connection.php');

if (isset($_GET['PostId'])) {
	
	$PostId=$_GET['PostId'];


$del="DELETE FROM post WHERE PostId='$PostId'";

$query=mysqli_query($con,$del);

header('location:viewpost.php');
}



?>

<?php
require_once('footer.php');

?>