<?php
session_start();
?>
<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>User Followup</title>
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
    background: -webkit-linear-gradient(left,#2F4F4F,#808080);
    margin-top: 2%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 3%;
}
.register .row{
    padding:2%;
}
.register-right{
    background: #f8f9fa;
}
.register-left p{
    font-weight: lighter;
    padding: 5%;
    margin-top: 12%;
}
.register .white-part{
    padding: 2%;
    margin-top: 2%;
}
.btnLogin {
    border: none;
    border-radius: 1.5rem;
    color: #fff;
    font-weight: 600;
    width: 40%;
    cursor: pointer;
    }
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register-heading{
    text-align: center;
    margin-top: 5%;
    color: #495057;
}
.headingfollow{
    padding: 0.25%;
    background-color: #9ACD32;
}
</style>
<script type="text/javascript">
    function myfun(){
        var a=document.form1.radio1;
        for(i=0;i<a.length;i++){
            if(a[i].checked==true)
                return true;
        }
        document.getElementById("messages").innerHtml="** Please Select Option"
        return false;
    }
</script>
<?php include 'navbar.html'?>
</head>
<body>
    <form id="form1" action="" method="POST" onsubmit="return myfun()">
    <div class="headingfollow col-md-12">           
        <?php
        if($_SESSION["fname"]) {
        ?>
        <h2><b>Welcome</b>  <?php echo $_SESSION["fname"]; ?>.<a href="userlogout.php" class="float-right btn btn-lg btn-success">Logout</a>
        <a href="Followup2.php" class="float-right btn btn-lg btn-danger">Followup Messages</a></h2>
        <?php
        }else{
            header("Location:Login.php");
        }
        ?>          
    </div>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">                   
            <div class="float-left fa fa-home warning" style="font-size:x-large;font-weight:bold">
                <a href="#">Go to Homepage</a>
            </div>
                <br /><br />
                <h4>Welcome</h4>                     
                <p>to Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class</p> 
                <p>Please fillup the Follow Back Form after Attending the sessions for your betterment.We will get to know your understaning more and get back to know you soon.</p>          
                <asp:Image ID="Image1" runat="server" ImageUrl="https://colossalgram.com/wp-content/uploads/2014/11/Testimonials-Flat-Circle-Icon-Converted.eps-011-300x300.png" Width="150px" /> 
            </div><!--End of Login-->

            <div class="col-md-9 register-right">
                <h3 class="register-heading">Follow Up Form</h3>
                    <div class="row white-part">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-weight: bold;">Full Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter your Full Name *" value="" required />
                        </div>
                            <div class="form-group">
                                <label style="font-weight: bold;">Date of Session Attended :</label>
                                <input type="Date" name="dos" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label style="font-weight: bold;">Are you Doing Sleep Talks :</label>
                            <div class="form-control">
                                <label class="radio inline"> 
                                    <input type="radio" name="radio1" value="Yes">
                                    <span> Yes </span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="radio1" value="No">
                                    <span> No </span> 
                                </label>
                                <div><p id="messages"></p></div>
                            </div>
                            </div>
                            <div class="form-group">
                            <label style="font-weight: bold;">Are you Doing Walking :</label>
                            <div class="form-control">
                                <label class="radio inline"> 
                                    <input type="radio" name="radio2" value="Yes">
                                    <span> Yes </span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="radio2" value="No">
                                    <span> No </span> 
                                </label>
                            </div>
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bold;">Give Brief about the session :</label>
                                <textarea rows="6" cols="50" name="brief" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bold;">What you have started implementing in Child Parenting :</label>
                                <textarea rows="6" cols="50" name="implement" class="form-control" required></textarea>
                            </div>                           
                        </div><!--End of Regiser one side-->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-weight: bold;">Enter your Email :</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email *" value="" required/>      
                            </div>
                            
                            <div class="form-group">
                                <label style="font-weight: bold;">Session Topic :</label>
                                <input type="text" class="form-control" name="topic" placeholder="Enter Session Topic *" value="" required/>
                            </div>

                            <div class="form-group">
                            <label style="font-weight: bold;">Are you Showing Flash/Dot Cards :</label>
                            <div class="form-control">
                                <label class="radio inline"> 
                                    <input type="radio" name="radio3" value="Yes">
                                    <span> Yes </span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="radio3" value="No">
                                    <span> No </span> 
                                </label>
                            </div>
                            </div>

                            <div class="form-group">
                            <label style="font-weight: bold;">Are you Doing Daily Exercise :</label>
                            <div class="form-control">
                                <label class="radio inline"> 
                                    <input type="radio" name="radio4" value="Yes">
                                    <span> Yes </span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="radio4" value="No">
                                    <span> No </span> 
                                </label>
                            </div>
                            </div>
    
                            <div class="form-group">
                                <label style="font-weight: bold;">Your Understanding from the class :</label>
                                <textarea rows="6" cols="50" name="understanding" class="form-control" required></textarea>                                          
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bold;">What/How do you feel after attending the session :</label>
                                <textarea rows="6" cols="50" name="feel" class="form-control"></textarea>
                                <input type="submit" class="col-md-4 btnRegister btn btn-warning" name="Follow" value="Submit" required/>
                            </div>                            
                        </div>
                      </div>      
            </div><!--End of Register-right-->
        </div>
      </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['Follow']))
{
    $fname=$_POST['fname'];
    $dos=$_POST['dos'];
    $r1=$_POST['radio1'];
    $r2=$_POST['radio2'];
    $r3=$_POST['radio3'];
    $r4=$_POST['radio4'];
    $brief=$_POST['brief'];
    $implement=$_POST['implement'];
    $email=$_POST['email'];
    $topic=$_POST['topic'];
    $understanding=$_POST['understanding'];
    $feel=$_POST['feel'];

    $sql_query="INSERT INTO followup(fname,dos,radio1,radio2,radio3,radio4,brief,implement,email,topic,understanding,feel) 
    VALUES ('$fname','$dos','$r1','$r2','$r3','$r4','$brief','$implement','$email','$topic','$understanding','$feel')";

    if(mysqli_query($conn,$sql_query))
    { 
        ?>
        <script> alert("Follow Up Successfully Submitted !");</script>
        <?php
        echo '<script>window.location="Followup.php"</script>';
    }
    else{
        ?>
        <script> alert("Not Submitted Try Again!");</script>
        <?php
    }
    mysqli_close($conn);
}
?>
<?php include 'footer.php'?>