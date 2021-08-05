<?php include 'config.php'?>
<?php
if(isset($_POST['Post']))
{
	$name=$_POST['name'];
    $email=$_POST['email'];
    $experience=$_POST['experience'];
    
	$sql_query="INSERT INTO review(name,email,experience)VALUES ('$name','$email','$experience')";

	if(mysqli_query($conn,$sql_query))
	{ 
		?>
		<script> alert("Review Successfully Posted !");</script>
		<?php
		echo '<script>window.location="Notification.php"</script>';
	}
	else{
		?>
		<script> alert("Review Not Posted Try Again!");</script>
		<?php
	}
	mysqli_close($conn);
}
?>