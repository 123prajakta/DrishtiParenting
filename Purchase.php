<?php
session_start();

include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['purchase']))
	{
		$query1="INSERT INTO `order_manager`(`Full_Name`, `Email`, `Phone_no`, `Address`, `Pay_Mode`) 
		VALUES ('$_POST[Full_Name]','$_POST[Email]','$_POST[Phone_no]','$_POST[Address]','$_POST[Pay_Mode]')";
		if(mysqli_query($conn,$query1))
		{
			$Order_id=mysqli_insert_id($conn);
			$query2="INSERT INTO `user_orders`(`Order_id`, `item_name`, `item_quantity`, `item_price`) VALUES (?,?,?,?)";
			$stmt=mysqli_prepare($conn,$query2);
			if($stmt)
			{
				mysqli_stmt_bind_param($stmt,"isii",$Order_id,$item_name,$item_quantity,$item_price);
				foreach ($_SESSION['shopping_cart'] as $key => $values) {
					$item_name=$values['item_name'];
					$item_quantity=$values['item_quantity'];
					$item_price=$values['item_price'];
					mysqli_stmt_execute($stmt);
				}
				unset($_SESSION['shopping_cart']);
				echo "<script>
				alert('Successfully Placed your Order');
				window.location.href='product.php';
				</script>";
			}
			else
			{
				echo "<script>
				alert('SQL Query Prepared Error');
				window.location.href='cart.php';
				</script>";
			}
		}
		else
		{
			echo "<script>
				alert('SQL Error');
				window.location.href='cart.php';
				</script>";
		}
	}
}
?>