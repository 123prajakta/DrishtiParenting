<?php include 'config.php'?>
<?php 
$id=$_GET['id'];
$query="DELETE FROM notification WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){ 
        ?>
        <script> alert("Record Deleted form Database");</script>
        <?php
        echo '<script>window.location="Admin_home.php"</script>';
    }
    else{
        ?>
        <script> alert("Failed to Deleted Record form Database");</script>
        <?php
    }
?>