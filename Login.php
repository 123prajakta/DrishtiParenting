<?php include 'config.php'?>
<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $result = mysqli_query($conn,"SELECT * FROM register WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["fname"] = $row['fname'];
        } else {
         $message = "<script>alert('Invalid Username or Password!')</script>";
        }
    }
    if(isset($_SESSION["fname"])) 
    {
        header("Location:Followup.php");
    }
?>

<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<style>
.register{
background: -webkit-linear-gradient(left, #A52A2A, #00c6ff);
margin-top: 2%;
padding: 3%;
}
.register .row{
    padding:2%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 2%;
}
.register-left p{
    font-weight: normal;
    padding:6%;
    margin-top: -6%;
}

.btnLogin {
    border: none;
    border-radius: 1.5rem;
    padding:2%;
    font-weight: 600;
    width: 60%;
    cursor: pointer;
    }
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.register-right{
    background: #f8f9fa;
}

</style>

<?php include 'navbar.html'?>
</head>

<body>

    <form name="" method="POST" action="">
    <div class="container register">
        <div class="row">
            <div class="col-md-4 register-left">                   
            <div class="float-left fa fa-home warning" style="font-size:x-large;font-weight:bold">
                <a href="#">Go to Homepage</a>
            </div>
                 <br /><h4>Welcome</h4>                 
                <p> to Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class.Welcome to the Wonderful World of Scientific Parenting.</p>
                <h5>LOGIN HERE</h5>
                <img src="https://webstockreview.net/images/court-clipart-court-clerk-9.png" Height="170px" Width="200px"/>
            </div><!--end login left-->

            <div class="col-md-8 register-right">   
                <h3 class="register-heading">Login to Drishti Parenting</h3>
                    <div class="row register-form">
                        <div class="form-group col-md-6">
                            <label style="font-weight: bold;">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email *" value="" required/>
                        </div>
                        <div class="form-group col-md-4"></div>
                        <div class="form-group col-md-6">
                            <label style="font-weight: bold;">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password *" id="pass" value="" required/>
                        <span id=upass style="color:red;"></span>
                        </div>
                        <div class="form-group col-md-6"></div>
                        <div class="col-md-6">
                            <input type="submit" class="btnLogin btn btn-warning" name="Login" value="Login"/>
                       </div>
                        <div class="col-md-6">
                            Not Registered?  
                            <a href="Register.php">Create an Account</a >
                       </div>
                       <div class="message"><?php if($message!="") { echo $message; } ?></div>
                   </div>
            </div><!--End of login registerright-->
        </div><!--End of Row-->
    </div><!--End of Container-->
    </form>
    
</body>
</html>
<?php include 'footer.php'?>
