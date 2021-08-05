<?php include 'config.php'?>
<?php
if(isset($_POST['Submit']))
{
	$fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $radio1=$_POST['radio1'];
    $radio2=$_POST['radio2'];
    $radio3=$_POST['radio3'];
    $radio4=$_POST['radio4'];
    $radio5=$_POST['radio5'];
    $feed=$_POST['feed'];

	$sql_query="INSERT INTO feedback(fname,phone,email,radio1,radio2,radio3,radio4,radio5,feed)
	VALUES ('$fname','$phone','$email','$radio1','$radio2','$radio3','$radio4','$radio5','$feed')";

	if(mysqli_query($conn,$sql_query))
	{ 
		?>
		<script> alert("Feedback Successfully Submitted !");</script>
		<?php
		echo '<script>window.location="Feedback.php"</script>';
	}
	else{
		?>
		<script> alert("Not Submitted Try Again!");</script>
		<?php
	}
	mysqli_close($conn);
}
?>