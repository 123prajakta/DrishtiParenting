<?php include 'config.php'?>
<?php   
 session_start();  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_sno");  
           if(!in_array($_GET["sno"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_sno'        =>     $_GET["sno"],  
                     'item_name'       =>     $_POST["hidden_name"],  
                     'item_price'      =>     $_POST["hidden_price"],  
                     'item_quantity'   =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
                echo '<script>alert("Item Added to Cart")</script>';
                echo '<script>window.location="product.php"</script>';
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="product.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
              'item_sno'         =>     $_GET["sno"],  
              'item_name'        =>     $_POST["hidden_name"],  
              'item_language'    =>     $_POST["hidden_language"],
              'item_number'      =>     $_POST["hidden_number"],
              'item_price'       =>     $_POST["hidden_price"],  
              'item_quantity'    =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
           echo '<script>alert("Item Added to Cart")</script>';
           echo '<script>window.location="product.php"</script>';
      }  
 }  
 // Code for Removing Item from Cart using SESSION Variable.
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_sno"] == $_GET["sno"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
<!DOCTYPE html>
<html>
<head>  
<title>My Cart</title>  
<style type="text/css">
  .footer{
    margin-top: 320px;
  }
  .table{
    font-weight: bold;
    font-size: larger;
   }
 .container{
  font-weight: bold;
  font-style:initial;
   }
</style>
<?php include 'navbar.html'?> 
</head>
<body class="container-fluid"></br>
<h3 align="center">Order Details</h3></br>  
<div class="row">
    <div class="table-responsive col-lg-8">  
         <table class="table table-bordered table-striped">  
              <tr class="text-center">  
                   <th>Item Name</th> 
                   <th>Item Quantity</th>
                   <th>Price</th>
                   <th>Amount</th>  
                   <th>Remove Item</th>
              </tr>  
              <?php   
              if(!empty($_SESSION["shopping_cart"]))  
              {  
                   $total = 0;  
                   foreach($_SESSION["shopping_cart"] as $keys => $values)  
                   {  
              ?>  
              <tr class="text-center">  
                   <td><?php echo $values["item_name"]; ?></td>
                   <td><?php echo $values["item_quantity"]; ?></td>
                   <td><?php echo $values["item_price"]; ?></td>
                   <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                   <td><a href="cart.php?action=delete&sno=<?php echo $values["item_sno"]; ?>"><span class="text-danger">Remove</span></a></td> 
              </tr>  
              <?php  
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                   }  
              ?>  
              <tr>  
                   <td colspan="3" align="right">Total</td>
                   <td align="right">$ <?php echo number_format($total, 2); ?></td>
                   <td></td>  
              </tr>  
              <?php  
              }  
              ?>  
         </table> 
    </div>  
    <!-- Start of Purchase -->
         <div class="col-lg-4">
            <div class="border bg-light rounded p-4">
              <h3 class="text-center">Total</h3>
              <h4 class="text-left">Grand Total :</h4>
              <h4 class="text-right">$ <?php echo number_format($total, 2); ?></h4>
              
              <?php 
                if(isset($_SESSION['shopping_cart']) && count($_SESSION['shopping_cart'])>0)
                {
              ?>
              <form action="Purchase.php" method="POST">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" name="Full_Name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" name="Email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="number" name="Phone_no" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Home Address</label>
                  <input type="text" name="Address" class="form-control" required>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Pay_Mode" value="COD" checked>
                  <label class="form-check-label" for="coddefault">
                      <b>Cash On Delivery  </b>                  
                  </label>
                </div><br>
                <button class="btn btn-success btn-block" name="purchase">Proceed Now</button>
              </form>
              <?php
                }
                ?>
            </div>
         </div>
    <!-- End of Purchase -->
</div>
<footer>
    <?php include 'footer.php'?>  
</footer>
</body>

</html>