<?php include 'config.php'?>
<!DOCTYPE html>

<html>
<head runat="server">
    <title>Notifications and Review.</title>
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
    background: -webkit-linear-gradient(left, #000000, #00c6ff);
    margin-top: 2%;
    padding: 2%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 3%;
}
.register-right{
    background: #f8f9fa;
}
.register .white-part{
    padding: 5%;
    margin-top: 5%;
}
.reviewbox {
    padding:5%;
    margin-top: 3%;
    }
.rtext {
    color: #fff;
    font-weight:bold;
    font-size:large;
}
.rrtext {
    color: #fff;
    font-weight:bold;
    font-size:large;
}
</style>
</head>
<body>
    <form method="POST" action="Review.php">
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">                   
            <div class="float-left fa fa-home warning" style="font-size:x-large;font-weight:bold">
                <a href="#">Go to Homepage</a>
            </div>
                <br /><br />
                <h4>Welcome</h4>                     
                <p>to Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class</p>
                <p>All the latest Updates and Notifications will be updated here.Please give the reviews about the Parenting below in the Review Pannel.</p>   
                <div></br>
                    <p><h3>Post Your Review below...</h3></p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Circle-icons-arrow-down.svg/1024px-Circle-icons-arrow-down.svg.png" width="200px" />
                </div>                              
            </div><!--ENd of register-left-->

             <div class="col-md-9 register-right"> <!--Notice board-->	
                 <div class="row white-part">
	                <div class="col-md-12" style="border:5px solid black;border-bottom: groove; border-radius: 30px;">
		                <h3 style="font-size: 25px;font-weight: bold;text-align: center; font-family: verdana;">Notifications and Updates</h3>
	                </div>
		
		            <div class="col-md-12" style="border:2px solid black; height:500px; border-radius: 0px;">
                        <!--Displaying all notices here-->
                        <marquee direction="up" scrollamount="3">
                        <?php
                        
                                $query="SELECT notify FROM notification";
                                $data=mysqli_query($conn,$query);
                                $total=mysqli_num_rows($data);
                                if($total!=0)
                                {
                                    ?>
                                    <table class=" table table-striped table-responsive">
                                            <tr>
                                                <th style="font-style:italic;color:green;font-size:x-large; ">Recent Notifications / Updates<span style="color:red"> *IMPORTANT*</span></th>
                                            </tr>
                                        
                                    <?php
                                    while ($result=mysqli_fetch_assoc($data)) {
                                        echo "<tr>
                                                <th>".$result['notify']."</th>
                                              </tr>";
                                    }
                                    
                                }
                                else{
                                echo " No Updates till now!";
                                }
                            
                        ?></table></marquee>
                    </div>
               </div>
             </div><!-- closing of Notice board-->

            <div class="col-sm-12 reviewbox" >
                <div style="border:5px solid black;border-bottom:solid; border-top-right-radius:30px;border-top-left-radius:30px;background:#f6d7a1">
		                <h3 style="font-size: 25px;font-weight: bold;text-align: center; font-family: verdana;">Review</h3>
	            </div><!--Closing of Review heading-->

                <div style="border:2px solid black; height:350px; border-radius: 0px; background-color:#FAEBD7"><!--Review Box-->
                    <?php
                        
                        $query="SELECT name,email,experience FROM review";
                        $data=mysqli_query($conn,$query);
                        $total=mysqli_num_rows($data);
                        if($total!=0)
                        {
                            ?>
                            <table class=" table table-striped table-responsive">
                                    <thead><tr>
                                        <th>Name </th>
                                        <th>Email </th>
                                        <th>Reviews </th>
                                    </tr></<thead>
                                
                            <?php
                            while ($result=mysqli_fetch_assoc($data)) {
                                echo "<tr>
                                        <th>".$result['name']."</th>
                                        <th>".$result['email']."</th>
                                        <th>".$result['experience']."</th>
                                      </tr>";
                            }
                            
                        }
                        else{
                        echo " No Review !";
                        }
                            
                        ?></table>
                </div><!--Closing of Review Box-->
                <div class="form-group row rtext">
                  <div class="col-12 col-md-5">Name : <input type="text" class="form-control" name="name" placeholder="Enter your Name *" value="" required/></div>
                  
                  <div class="col-6 col-md-7">Email : <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" required /></div>
                </div>
                <div class="row form-group rrtext">
                    <div class="col-12 col-md-7">Share details of your own experience at this place : 
                        <textarea rows="6" cols="50" name="experience" class="form-control" required></textarea>
                    </div>                    
                    </div>
                    <input type="submit" class="col-md-2 submitfeed btn btn-warning" name="Post" value="Post"/>
            </div><!--ENd of reviewbox colsm12-->
        </div><!--ENd of row-->
    </div><!--ENd of container-->
    </form>
   <?php include 'footer.php'?> 
</body>
</html>
