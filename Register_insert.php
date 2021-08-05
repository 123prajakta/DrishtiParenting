<?php include 'config.php'?>
<?php
if(isset($_POST['Register']))
{
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];
	$gen=$_POST['gender'];
	$Email=$_POST['email'];
	$Phone=$_POST['phone'];
	$secu=$_POST['security'];
	$Answer=$_POST['answer'];

	$sql_query="INSERT INTO register(fname,lname,password,cpassword,gender,email,phone,security,answer)
	VALUES('$firstname','$lastname','$pass','$cpass','$gen','$Email','$Phone','$secu','$Answer')";

	if(mysqli_query($conn,$sql_query))
	{ 
		?>
		<script> alert("Successfully Registered !");</script>
		<?php
		echo '<script>window.location="Register.php"</script>';
	}
	else{
		?>
		<script> alert("Not Registered Try Again!");</script>
		<?php
	}
	mysqli_close($conn);
}
?>