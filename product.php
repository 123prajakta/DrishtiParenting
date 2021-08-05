<?php include 'config.php'?>
<?php   
 session_start();  
 ?>  
<?php include 'navbar.html'?>
<!DOCTYPE html>  
<html>  
<head>  
<title>Shopping Cart</title>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<style type="text/css">
  .table{
    font-weight: bold;
    font-size: larger;
   }
 .container h2{
  font-weight: bold;
  font-style:initial;
   }
 </style> 
</head>  
<body>
<div class="container-fluid mt-3">  
    <h2 align="center">ISP Materials : Shopping Cart of Drishti Parenting 
    <div class="text-center float-right">
        <a href="cart.php" class="btn btn-lg btn-warning">View Cart</a>
    </div>
    </h2><br />    
    <?php include 'config.php'?>
    <?php 
    $query = "SELECT * FROM materials ORDER BY sno ASC";  
    $result = mysqli_query($conn, $query);  
    if(mysqli_num_rows($result) > 0)  
    {  
        ?>
        <table class="table table-light table-hover"> 
              <thead>
                <tr class="primary">
                  <th>Name</th>
                  <th>Language</th>
                  <th>Number</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th></th>
                </tr>
              </thead>
        <?php
         while($row = mysqli_fetch_array($result))  
         {  
    ?>                
        <form method="post" action="cart.php?action=add&sno=<?php echo $row["sno"]; ?>"> 
            <tbody> 
                <tr> 
                   <td><h4 class="text-info"><?php echo $row["name"]; ?></h4></td>
                   <td><h4 class="text-info"><?php echo $row["language"]; ?></h4></td>
                   <td><h4 class="text-info"><?php echo $row["number"]; ?></h4></td>
                   <td><h4 class="text-danger">$ <?php echo $row["price"]; ?></h4></td>
                   <td><input type="number" name="quantity" min="1" class="form-control" value="1" /> </td> 
                   <td><input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /></td>
                   <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                   <input type="hidden" name="hidden_language" value="<?php echo $row["language"]; ?>" />
                   <input type="hidden" name="hidden_number" value="<?php echo $row["number"]; ?>" />  
                   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />            
                </tr> 
            </tbody> 
          </form> 
       
    <?php  
         }  
    }  
    ?> </table>   
    <div style="clear:both"></div>     
    <br />  
</div> 
<?php include'footer.php' ?>
</body>
</html>

