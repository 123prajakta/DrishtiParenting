<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Feedback</title>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   <?php include 'navbar.html'?>
    <style>
        .heading {
            text-align: center;
            margin-top: 3%;
            background: lightgreen;
            font-family: Calibri;
            font-weight: bold;
        }

        .feedmain {
            background: -webkit-linear-gradient(left, #FFA07A, #BC8F8F);
            margin-top: 2%;
            padding: 3%;
        }

        .feed-left {
            text-align: center;
            color: #fff;
            margin-top: 3%;
        }

        .feedright {
            color: black;
            font-weight: bold;
        }

        .submitfeed {
            width: 30%;
        }


        .headingrate {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

         {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top: 10px;
        }

        .middle {
            margin-top: 10px;
            float: left;
            width: 70%;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {
            width: 60%;
            height: 18px;
            background-color: #4CAF50;
        }

        .bar-4 {
            width: 30%;
            height: 18px;
            background-color: #2196F3;
        }

        .bar-3 {
            width: 15%;
            height: 18px;
            background-color: #00bcd4;
        }

        .bar-2 {
            width: 10%;
            height: 18px;
            background-color: #ff9800;
        }

        .bar-1 {
            width: 4%;
            height: 18px;
            background-color: #f44336;
        }
       
    </style>
</head>

<body>
    <form id="feeedform" method="POST" action="Feedback_insert.php">
        <div class="container feedmain">
            <div class="row">
                <div class="col-md-4 feed-left">
                    <div class="float-left fa fa-home warning" style="font-size:x-large;font-weight:bold">
                        <a href="#">Go to Homepage</a>
                    </div>
                    <br />
                    <br />
                    <h4>Welcome</h4>
                    <p>to Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class</p>
                    <p>Please fillup the Feedback Form after Attending the sessions for your betterment.We will get to know your understaning more and get back to know you soon.</p>
                    <p>Please leave comments/feedback or any suggestions below,your feedback is valueable to us.</p>
                    <img src="https://cdn0.iconfinder.com/data/icons/business-finance-round/128/6-512.png" Width="200px" />
                </div>
                <!--End of feed-left-->

                <div class="col-md-8 feedright">
                    <div class="form-group ">
                        <label style="font-weight: bold; font-size: x-large;">Send us your feedback :</label>
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Full Name :</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter your Full Name *" value="" required/>
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Mobile / Contact Number :</label>
                        <input type="Number" class="form-control" name="phone" placeholder="Enter your Contact Number *" value="" required/>
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Email address :</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email *" required/> 
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Your Understanding with the class :</label>
                        <div class="form-control">
                            <label class="radio inline"> 
                                <input type="radio" name="radio1" value="Poor">
                                <span> Poor </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio1" value="Average">
                                <span>Average </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio1" value="Good">
                                <span>Good </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio1" value="Excellent">
                                <span>Excellent </span> 
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Concept Clearance during lectures :</label>
                        <div class="form-control">
                            <label class="radio inline"> 
                                <input type="radio" name="radio2" value="Poor">
                                <span> Poor </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio2" value="Average">
                                <span>Average </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio2" value="Good">
                                <span>Good </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio2" value="Excellent">
                                <span>Excellent </span> 
                            </label>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Teaching technique and methodology :</label>
                        <div class="form-control">
                            <label class="radio inline"> 
                                <input type="radio" name="radio3" value="Poor">
                                <span> Poor </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio3" value="Average">
                                <span>Average </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio3" value="Good">
                                <span>Good </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio3" value="Excellent">
                                <span>Excellent </span> 
                            </label>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">The materials distributed were helpfull :</label>
                        <div class="form-control">
                            <label class="radio inline"> 
                                <input type="radio" name="radio4" value="Poor">
                                <span> Poor </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio4" value="Average">
                                <span>Average </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio4" value="Good">
                                <span>Good </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio4" value="Excellent">
                                <span>Excellent </span> 
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Overall Experience :</label>
                        <div class="form-control">
                        <label class="radio inline"> 
                                <input type="radio" name="radio5" value="Poor">
                                <span> Poor </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio5" value="Average">
                                <span>Average </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio5" value="Good">
                                <span>Good </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="radio5" value="Excellent">
                                <span>Excellent </span> 
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold;">Provide your valuable Feedback :</label>
                        <textarea rows="6" cols="50" name="feed" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                       <input type="submit" class="submitfeed btn btn-warning" name="Submit" value="Submit"/>
                    </div>
                </div>
                <!--End of feedright-->
            </div>
            <!--End of row-->

            <!--Start of star Rating -->
            <span class="headingrate">User Rating</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p>4.1 average based on 254 reviews.</p>
            <hr style="border: 3px solid #f1f1f1">

            <div class="row">
                <div class="side">
                    <div>5 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-5"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>150</div>
                </div>
                <div class="side">
                    <div>4 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-4"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>63</div>
                </div>
                <div class="side">
                    <div>3 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-3"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>15</div>
                </div>
                <div class="side">
                    <div>2 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-2"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>6</div>
                </div>
                <div class="side">
                    <div>1 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-1"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>20</div>
                </div>
            </div>
        </div>
        <!--End of Container-->
    </form>
    <?php include 'footer.php'?>
</body>
</html>
