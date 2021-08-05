<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
img{
	border-radius: 10%;
	width:200px;
	height:200px;
	border-style:solid;
	padding:5px;
	transition: transform 0.8s;
    transform-style: preserve-3d;
}
img:hover{
  transform: rotateY(180deg);
}
</style>
<?php include 'navbar.html'?>
</head>
<body>
<div class="col-md-12 form-group">
	<label class="form-control text-center " style="font-size:x-large;font-weight:bold;background-color:#FFEFD5;margin-top: 3%;";>Image Gallery : Glimpses of Drishti Parenting</label>
</div>
<?php
$query="select * from gallery";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) {
		echo "<img src='".$result['picsource']."'>";
	}
}
else{
	echo "No Records Found";
}
?>
</body>
</html>
<?php include 'footer.php'?>