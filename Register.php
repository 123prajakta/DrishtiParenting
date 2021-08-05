<!DOCTYPE html>
<title>Registration</title>
<head>
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
    background: -webkit-linear-gradient(left, #FFB6C1, #00c6ff);
    margin-top: 2%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 2%;
}
.register-right{
    background: #f8f9fa;
}
.register-left p{
    font-weight:bold;
    padding: 5%;
    margin-top: -5%;
}
.register .register-form{
    padding: 5%;
    margin-top: 15%;
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
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

</style>
<script type="text/javascript">
	function validate(){
		var a=document.getElementById("pass").value;
		var b=document.getElementById("cpass").value;
		if(a==""){
			document.getElementById("upass").innerHTML="Please Fill Password";
			return false;
		}
		if(a.length<5){
			document.getElementById("upass").innerHTML="Password length must me greater then 5";
			return false;
		}
		if(a.length>20){
			document.getElementById("upass").innerHTML="Password length must me smaller then 20";
			return false;
		}
		if(a!=b){
			document.getElementById("ucpass").innerHTML="Passwords are not Same";
			return false;
		}
	}
</script>
</head>
<body>
<form method="POST" action="Register_insert.php" onsubmit="return validate()">
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
           <div class="float-left fa fa-home warning" style="font-size:x-large;font-weight:bold"><a href="#">Go to Homepage</a>
           </div>                        
	        <br /><br />                     
	        <p> Welcome to Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class.
	        Class is meant for Parents/Couple those who are Planning/Couple thoose who are planning/Expecting for Normal Delivery and Full Development of Infant/Child.</p>       
	        <a href="https://forms.gle/YugLSjvRv9yL3yrB8" Target="_blank">Click here  to join and fill the details.</a> 
	        <br /><br />Already Registered?
	        <a href="Login.php" Font-Underline="True"> LOGIN HERE</a><br /><br />
	 
            <img src="https://thalassafestival.com/wp-content/uploads/2019/12/registration-icon-png-6-300x300.png" Width="200px"/> 
        </div><!--End of Left-->

        <div class="col-md-9 register-right">
            <h3 class="register-heading">Register with Drishti Parenting</h3>
            <div class="row register-form">
                <div class="col-md-6">
                    <div class="form-group">
                    	<label style="font-weight: bold;">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter your First Name *" value="" required/>
                	</div>
                    <div class="form-group">
                    	<label style="font-weight: bold;">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter your Last Name *" value="" required />                 
                    </div>
                    <div class="form-group">
                    	<label style="font-weight: bold;">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password *" id="pass" value="" />
                        <span id=upass style="color:red;"></span>
                    </div>
                    <div class="form-group">
                    	<label style="font-weight: bold;">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword"  placeholder="Confirm Password *" id="cpass" value=""/>
                        <span id=ucpass style="color:red;"></span>
                    </div>
                    <div class="form-group">
                        <div class="maxl">
                        	<label style="font-weight: bold;">Select Gender</label>
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="male" checked>
                                <span> Male </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="female">
                                <span>Female </span> 
                            </label>
                        </div>
                    </div>
                </div><!--End of Regiser one side-->
                    <div class="col-md-6">
                        <div class="form-group">
                        	<label style="font-weight: bold;">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" required/>       
                        </div>
                        <div class="form-group">
                        	<label style="font-weight: bold;">Mobile/Phone Number</label>
                            <input type="Number" name="phone" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Mobile/Phone *" value="" required/> 
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;">Select Security Question</label>
                            <select class="form-control" name="security">
                                <option class="hidden" selected required disabled>Please select your Sequrity Question</option>
                                <option value="What is your Birthdate?">What is your Birthdate?</option>
                                <option value="What is Your old Phone Number">What is Your old Phone Number</option>
                                <option value="What is your Pet Name?">What is your Pet Name?</option>
                            </select>                                           
                        </div>
                        <div class="form-group">
                        	<label style="font-weight: bold;">Enter Your Answer</label>
                            <input type="text" class="form-control" name="answer" placeholder="Enter Your Answer *" value="" required/>
                        </div>
                        <input type="submit" class="btnRegister btn btn-warning" name="Register" value="Register"/>                            
                    </div>
            </div>      
        </div><!--End of register-right-->
    </div>
 </div>
</form>
</body>
</html>
<?php include 'footer.php'?>