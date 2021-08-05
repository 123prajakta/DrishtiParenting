<?php include 'config.php'?>
<?php
$sql = "SELECT fname,lname,password,cpassword,gender,email,phone FROM register";  
$result = mysqli_query($conn, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
     <tr>  
       <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone Number</th>
      </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["fname"].'</td>  
         <td>'.$row["lname"].'</td>  
         <td>'.$row["password"].'</td>  
         <td>'.$row["gender"].'</td>  
         <td>'.$row["email"].'</td>
         <td>'.$row["phone"].'</td>
       </tr>  
        ';  
     }
     ?>
     <form method="post" action="expo.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
    </table>
    <br />
    
   </div>  
  </div>  
 </body>  
</html>
