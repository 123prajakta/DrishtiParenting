<?php include 'config.php'?>
<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $result = mysqli_query($conn,"SELECT * FROM adminlogin WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "<font color='red' size='5'>Invalid Username or Password!</font>";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:Admin_home.php");
    }
?>
<!DOCTYPE html>

<html>
<head>
    <title>Admin Login</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<?php include 'navbar.html'?>
<style>
.register{
background: -webkit-linear-gradient(left, #A52A2A, #00c6ff);
margin-top: 2%;
padding: 3%;
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
                <h3 class="register-heading">Admin Login to Drishti Parenting</h3>
                    <div class="row register-form">
                        <div class="form-group col-md-6">
                            <label style="font-weight: bold;">User Name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="Enter Your User Name *" value="" required/>
                        </div>
                        <div class="form-group col-md-4"></div>
                        <div class="form-group col-md-6">
                            <label style="font-weight: bold;">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password *" id="pass" value="" required/>
                        <span id=upass style="color:red;"></span>
                        </div>
                        <div class="form-group col-md-6"></div>
                        <div class="col-md-6">
                            <input type="submit" class="btnLogin btn btn-warning" name="submit" value="Login"/>
                       </div>
                            <div class="message"><?php if($message!="") { echo $message; } ?></div>
                   </div>
            </div><!--End of login registerright-->
        </div><!--End of Row-->
    </div><!--End of Container-->
    </form>
    <!-- Footer -->
    <div class="container-fluid cloud-divider">
      <!-- Clouds SVG Divider -->
      <svg id="deco-clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100"
        viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
                  M0 100 Q 5 0 10 100
                  M5 100 Q 10 30 15 100
                  M10 100 Q 15 10 20 100
                  M15 100 Q 20 30 25 100
                  M20 100 Q 25 -10 30 100
                  M25 100 Q 30 10 35 100
                  M30 100 Q 35 30 40 100
                  M35 100 Q 40 10 45 100
                  M40 100 Q 45 50 50 100
                  M45 100 Q 50 20 55 100
                  M50 100 Q 55 40 60 100
                  M55 100 Q 60 60 65 100
                  M60 100 Q 65 50 70 100
                  M65 100 Q 70 20 75 100
                  M70 100 Q 75 45 80 100
                  M75 100 Q 80 30 85 100
                  M80 100 Q 85 20 90 100
                  M85 100 Q 90 50 95 100
                  M90 100 Q 95 25 100 100
                  M95 100 Q 100 15 105 100 Z">
        </path>
      </svg>
    </div>
    <footer>
      <div class="container-fluid">
        <!-- Newsletter -->
        <div class="col-lg-4 col-md-6 text-justify res-margin">

          <!-- Form -->
          <!-- /mc_embed_signup -->
        </div>
        <!-- /col-lg-4 -->
        <!-- Bottom Credits -->
        <div class="col-lg-4 col-md-6 res-margin">
          <a href="#page-top"><img src="logo.png" alt="Drishti Parenting logo" width="150px" class="center-block"></a>
          <!-- social-icons -->
          <div class="social-media">
            <a href="#" title=""><i class="fa fa-twitter"></i></a>
            <a href="#" title=""><i class="fa fa-facebook"></i></a>
            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
            <a href="#" title=""><i class="fa fa-instagram"></i></a>
          </div>
        </div>
        <!-- /col-lg-4 -->
        <!-- Opening Hours -->
        <div class="col-lg-4 col-md-12 text-justify">
          <!-- Sign-->
          <h6 class="text-light">Opening Hours:</h6>
          <!-- Table-->
          <table class="table">
            <tbody>
              <tr>
                <td class="text-left">Sunday</td>
                <td class="text-right">10 a.m. to 1:30 p.m.</td>
              </tr>
              <tr>
                <td class="text-left">Weekend Days / Holidays</td>
                <td class="text-right"><span class="label label-danger">Closed</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /col-lg-4 -->
      </div>
      <!-- / container -->
      <hr>
      <p>Copyright © 2020 Designed by <a href="http://www.bidwai.com/">Bidwai Technologies</a></p>
      <!-- /container -->
      <!-- Go To Top Link -->
      <div class="page-scroll hidden-sm hidden-xs">
        <a href="#page-top" class="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>
      </div>
    </footer>
    <!-- /footer ends -->
</body>
</html>
