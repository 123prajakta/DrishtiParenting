<?php include 'config.php'?>
<?php
$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from notification where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $notify = $_POST['notify'];
    
    $edit = mysqli_query($conn,"update notification set id='$id', notify='$notify' where id='$id'");
    
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:Admin_home.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Data Not Updated! Please Try Again";
    }       
}
if(isset($_POST['cancle'])) // when click on Update button
{
    header("location:Admin_home.php"); // redirects to all records page
        exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Notifications</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>
<body class="container-fluid">
    <form method="POST">
    <div class="noti row form-group jumbotron"><!--Start of Noifications-->               
        <div class="col-md-6">
            <label class="text-center" style="font-size:x-large;font-weight:bold;">Update/Edit the Notification here :</label>   </br>
            <b>Notification ID :</b>
            <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>"><br>
            <b>Notification :</b>
            <input type="text" class="form-control" name="notify" value="<?php echo $data['notify'] ?>"></br>
            <input type="submit" class="btn btn-warning col-md-2" value="Update" name="update">
            <input type="submit" class="btn btn-warning col-md-2" value="Cancle" name="cancle">
        </div>          
    </div><!--End of Notifications-->
</form>
</body>
</html>

