<?php include 'config.php'?>
<?php  
//export.php  
$conn = mysqli_connect("localhost", "root", "", "drishtidb");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT fname,lname,password,cpassword,gender,email,phone FROM register";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
      <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone Number</th>
      </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
