<?php 
session_start();
?>
<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head> 
	<title>Admin Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<style>
.gall{
	margin-top:4%;
}
.heading{
	padding: 0.25%;
	background-color: #9ACD32;
}
</style>
<?php include 'admin_navbar.html'?>
</head>
<body class="container-fluid">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="heading">
			<?php
			if($_SESSION["name"]) {
			?>
			<h2><b>Welcome</b>  <?php echo $_SESSION["name"]; ?>.  <a href="logout.php" class="float-right btn btn-lg btn-success">Logout</a></h2>
			<?php
			}else{
				header("Location:Admin_login.php");
			}
			?>
		</div>
		<hr style="border:solid 3px;">
		<div class=" container-fluid row">
		<div class="col-sm-6" style="border:2px solid black;">			
			
			<div>
				<table class="table-borderless table-responsive-md">
					<tr>
						<td><label class="float-right" style="font-size:large;font-weight: bold;">Upload Image in Gallery here :</label> </td>
						<td><input type="file" class="form-control" name="uploadfile"><input type="submit" class="btn btn-warning form-control" value="Upload" name="submit"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label class="float-right" style="font-size:large;font-weight: bold;">Post a Notification or Update here :</label></td>
						<td><textarea class="form-control"rows="6" name="notify"></textarea>&nbsp;<input type="submit" class="btn btn-warning form-control" value="Post" name="Postnotify"></td>
					</tr>
				</table>
			</div>
		</div>
				
			<div class="col-sm-6" style="border:2px solid black;"><!--Start of Insert Product-->
				<h4>Add Materials to Cart</h4>
				<p><b>Enter Product Name :</b></p>
				<input type="" name="name" class="form-control"><br>

				<p><b>Enter Product Language :</b></p>
				<input type="" name="language" class="form-control"><br>

				<p><b>Enter Number of Cards :</b></p>
				<input type="" name="number" class="form-control"><br>

				<p><b>Enter Product Price :</b></p>
				<input type="" name="price" class="form-control"><br>

				<p><input type="submit" style="width: 30%;" name="add_product" class="btn btn-warning" value="Save Product"></p>

			</div><!--End of Insert Product-->	
	</div>
			
			<hr style="border:solid 3px;">
			<input type="submit" class="btn btn-info" value="Show Registered User" name="showuser">
			<input type="submit" class="btn btn-info" value="Show Notification" name="shownotify">
			<input type="submit" class="btn btn-info" value="Show Reviews" name="showreviews">
			<input type="submit" class="btn btn-info" value="Show Follow ups" name="showfollowup">
			<input type="submit" class="btn btn-info" value="Follow ups Post Course" name="followup">
			<input type="submit" class="btn btn-info" value="Show Materials" name="showmaterials">
			<input type="submit" class="btn btn-info" value="Show Orders" name="showorders">
		</div><!--End of container-->
	</form>
	
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="gallery/".$filename;
	move_uploaded_file($tempname,$folder);

	if($filename!="")
	{
		$query="INSERT INTO gallery VALUES ('$folder')";
		$data=mysqli_query($conn,$query);

		if($data)
		{
			echo "<font color='red' size='4'>Image Uploaded Successfully</font>";
		}
		else{
			echo "<font color='red' size='4'>Failed Uploading Image!</font>";
		}

	}
}
?>
<?php
if(isset($_POST['Postnotify']))
{
	$notify=$_POST['notify'];

	$sql_query="INSERT INTO notification(notify) VALUES('$notify')";

	if(mysqli_query($conn,$sql_query))
	{ 
		echo "<font color='red' size='4'>Successfully Posted Update !</font>";
	}
	else{
		echo "<font color='red' size='4'>Not Posted Try Again!</font>";
	}
}
?>
<!--Displaying All Notifications-->
<?php
if(isset($_POST['shownotify']))
{
	$query="SELECT * FROM notification";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
		?>
		<table class=" table table-striped table-responsive-md">
				<tr>
					<th>ID</th>
					<th>Notification</th>
					<th colspan="2">Opreations</th>
				</tr>
			
		<?php
		while ($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<th>".$result['id']."</th>
					<th>".$result['notify']."</th>
					<th><a class='btn btn-success' href='editupdate.php?id=$result[id]'>Update</a></th>
					<th><a class='btn btn-success' href='deleteupdate.php?id=$result[id]'>Delete</a></th>
				  </tr>";
		}
		
	}
	else{
	echo "No Records Found!";
	}
}
?>
</table><!--End of Notify Table-->
<?php
if(isset($_POST['showreviews']))
{
	$query="SELECT * FROM review";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0){
	?>
	<table class=" table table-striped table-responsive-md">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Experience</th>
				<th>Operation</th>
			</tr>
			
		<?php
		while ($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<th>".$result['id']."</th>
					<th>".$result['name']."</th>
					<th>".$result['email']."</th>
					<th>".$result['experience']."</th>
					<th><a class='btn btn-success' href='deletereview.php?id=$result[id]'>Delete</a></th>
				  </tr>";
			}
		
	}
	else{
	echo "No Records Found!";
	}
}
?>
</table><!--End of Review Table-->
<?php
if(isset($_POST['showuser']))
{
	$query="SELECT fname,lname,password,cpassword,gender,email,phone FROM register";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0){
	?>
	<form method="post" action="expo.php">
     <input type="submit" name="export" class="btn btn-success float-right" value="Export to Excel" />
    </form>
	<table class=" table table-striped table-responsive-md">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Password</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Phone Number</th>
			</tr>
			
		<?php
		while ($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<th>".$result['fname']."</th>
					<th>".$result['lname']."</th>
					<th>".$result['password']."</th>
					<th>".$result['gender']."</th>
					<th>".$result['email']."</th>
					<th>".$result['phone']."</th>
				  </tr>";
			}	
	}
	else{
	echo "No Records Found!";
	}
}
?>
</table><!--End of Registered User Table-->
<br />
<?php
if(isset($_POST['showfollowup']))
{
	$query="SELECT * FROM followup";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0){
	?>
	<table class=" table table-striped table-responsive-md">
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Date of Session</th>
				<th>Are you Doing Sleep Talks</th>
				<th>Are you Doing Walking</th>
				<th>Are you Showing Flash/Dot Cards</th>
				<th>Are you Doing Daily Exercise</th>
				<th>Give Brief about the session</th>
				<th>What you have started implementing in Prenting</th>
				<th>Email</th>
				<th>Session Topic</th>
				<th>Understanding from the class</th>
				<th>What/How you feel after attending the session</th>
			</tr>
			
		<?php
		while ($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<th>".$result['id']."</th>
					<th>".$result['fname']."</th>
					<th>".$result['dos']."</th>
					<th>".$result['radio1']."</th>
					<th>".$result['radio2']."</th>
					<th>".$result['radio3']."</th>
					<th>".$result['radio4']."</th>
					<th>".$result['brief']."</th>
					<th>".$result['implement']."</th>
					<th>".$result['email']."</th>
					<th>".$result['topic']."</th>
					<th>".$result['understanding']."</th>
					<th>".$result['feel']."</th>
				  </tr>";
			}
		
	}
	else{
	echo "No Records Found!";
	}
}
?>
</table><!--End of Followup Table-->

<?php
if(isset($_POST['followup']))
{
	$query="SELECT * FROM followupcourse";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0){
	?>
	<table class=" table table-striped table-responsive-md">
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Are you Doing Sleep Talks</th>
				<th>Are you Doing Walking</th>
				<th>Are you Showing Flash/Dot Cards</th>
				<th>Are you Doing Daily Exercise</th>
				<th>Activities/Practice implementing</th>
				<th>Email</th>
				<th>Progress of your child</th>
			</tr>
			
		<?php
		while ($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<th>".$result['id']."</th>
					<th>".$result['fname']."</th>
					<th>".$result['radio1']."</th>
					<th>".$result['radio2']."</th>
					<th>".$result['radio3']."</th>
					<th>".$result['radio4']."</th>
					<th>".$result['implement']."</th>
					<th>".$result['email']."</th>
					<th>".$result['progress']."</th>
				  </tr>";
			}
		
	}
	else{
	echo "No Records Found!";
	}
}
?>
</table><!--End of Followup after Course Table-->

<?php
	if(isset($_POST['add_product']))
	{

		$name = $_POST['name'];
		$language = $_POST['language'];
		$number = $_POST['number'];
		$price = $_POST['price'];
	
		$query = "INSERT INTO `materials`(`name`, `language`, `number`, `price`) VALUES ('$name','$language','$number','$price')";

		
		$run=mysqli_query($conn,$query);
		
		if($run == true)
		{	
			echo "<script>alert(' Your Product has Added successfully..!!')</script>";
		}
		else
		{
			echo "<script>alert(' Something Went Wrong..!!')</script>";
		}


	}
?>

<?php
if(isset($_POST['showmaterials']))
{
	$query="SELECT * FROM materials";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0){
	?>
	<table class=" table table-striped table-responsive-md">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Language</th>
				<th>Numbers of Cards</th>
				<th>Price</th>
			</tr>
			
		<?php
		while ($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<th>".$result['sno']."</th>
					<th>".$result['name']."</th>
					<th>".$result['language']."</th>
					<th>".$result['number']."</th>
					<th>".$result['price']."</th>
					<th><a class='btn btn-success' href='editmaterial.php?sno=$result[sno]'>Update</a></th>
					<th><a class='btn btn-success' href='deletematerial.php?sno=$result[sno]'>Delete</a></th>
				  </tr>";
			}
		
	}
	else{
	echo "No Records Found!";
	}
}
?>

<!-- Showing Orders Placed by Users -->
<?php
if(isset($_POST['showorders']))
{
	$query="SELECT * FROM order_manager";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0){
	?>
	<table class=" table table-striped table-responsive-sm table-info">
			<tr><!-- `Order_id`, `Full_Name`, `Email`, `Phone_no`, `Address`, `Pay_Mode` -->
				<th>Order ID</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Phone Numbers</th>
				<th>Address</th>
				<th>Payment Mode</th>
				<th>Materials</th>
			</tr>
			
		<?php
		while ($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<th>".$result['Order_id']."</th>
					<th>".$result['Full_Name']."</th>
					<th>".$result['Email']."</th>
					<th>".$result['Phone_no']."</th>
					<th>".$result['Address']."</th>
					<th>".$result['Pay_Mode']."</th>
					<th>
						<table class='table table-responsive-sm'>
							<tr>
								<th>Item Name</th>
								<th>Item Quantity</th>
								<th>Item Price</th>
							</tr>
							
							";
						$order_query="SELECT * FROM user_orders WHERE Order_id='$result[Order_id]'";
						$order_result=mysqli_query($conn,$order_query);
						while ($order=mysqli_fetch_assoc($order_result)) {
								echo "
									<tr>
										<td>".$order['item_name']."</td>
										<td>".$order['item_quantity']."</td>
										<td>".$order['item_price']."</td>
									</tr>
								";
							}	
						echo "
							
						</table>	
					</th>
				  </tr>";
			}
		
	}   
	else{
	echo "No Records Found!";
	}
}
?>
<!-- End of Show orders -->
</table><!--End of Materials Table-->
<?php include 'footer.php'?>