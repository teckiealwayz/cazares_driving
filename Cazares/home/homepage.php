<html>
<head>

	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

	<link rel="shortcut icon" href="http://www.cazaresdriving.com/images/favicon.gif"/>
	<script type="text/javascript" src="home/functions.js"></script>


<title>Cazares Driving</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body onload="myFunction()" sytle="margin:0;" id="main_body">


<div id="loader"></div>
<div class="row fade-out" id="pic">
	<div>
	<img id="flash_img" class="img-responsive center-block" style="height: auto;" src="casaresclear.png">
	</div>
</div>

<div style="display:none;" id="myDiv" class="animate-bottom">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button style="color: silver; background-color: black;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-road"></i>
                </button>
                <a class="navbar-brand page-scroll" href="" onclick="return false;"><img id="logo_nav" src="casaresclear.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                	<!-- drop down for courses -->
                    <li class="nav-item dropdown">
                        <a style="color: black;" class="dropdown-toggle" data-toggle="dropdown" href="#">Courses<span class="caret"></span></a>
                        <div class="dropdown-menu">
                        	<a style="color: black;" class="dropdown-item" href="info/teen_driving.php">Teen Driver Education</a>
                        	<div class="dropdown-divider"></div>
                        	<a style="color: black;" class="dropdown-item" href="info/adult_driving.php">Adult Driver Education</a>
                        	<div class="dropdown-divider"></div>
                        	<a style="color: black;" class="dropdown-item" href="info/defensive_driving.php">Defensive Driving</a>
                        	<div class="dropdown-divider"></div>
                        	<a style="color: black;" class="dropdown-item" href="#">Road Testing</a>
                        	<div class="dropdown-divider"></div>
                        	<a style="color: black;" class="dropdown-item" href="info/cpr_courses.php">CPR Courses</a>
                        </div>
                    </li>
                    <li>
                        <a style="color: black;" class="page-scroll" href="tabs/locations.php">Locations</a>
                    </li>
                    <li>
                        <a style="color: black;" class="page-scroll" href="tabs/resources.php">Resources</a>
                    </li>
                    <li>
                        <a style="color: black;" class="page-scroll" href="tabs/FAQ.php">FAQ</a>
                    </li>
                    <li>
                        <a style="color: black;" class="page-scroll" href="https://www.myeform3.net/cazares/student/studentlogin.aspx" target="_blank">Student Login</a>
                    </li>
                    <li>
                        <a style="color: black;" class="page-scroll" href="tabs/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<br><br><br><br>
<div class="row container-fluid">
	<img style="width: 1920px; height: auto; position: relative;" class="img-responsive center-block" src="main_page.png">
	<h1 id="title_say" style="position: absolute; top: 125px; left: 25px; color: tomato; text-shadow: 2px 1px black;" class="col-md-4 col-xs-6 text-left"><strong>Take Your Driving Test With Us!</strong></h1>
	<button id="sign_up" class="btn btn-primary text-center">Sign Up Now</button>
	<button id="language" class="btn btn-primary text-center">Español</button>
</div>

<div class="container-fluid">
<div style="background-color: black;" class="well well-sm">
	<p class="text-center"><strong style="color: white;">Cazares Driving School is authorized by the Texas Department of Public Safety to administer the Official Road Skills Test "Driving Test" for ALL teens and adults from all driving schools. Driving Tests are scheduled daily! Walk-ins are welcome for testing Mon - Thurs 8 - 11am and 3 - 5pm at Cazares McAllen Location.<br> Call <a href="tel:9566831444">956-683-1444</a> for more information.</strong></p>
</div>
</div>

<div class="text-center row">
	
</div>
<!-- end of main title -->
<br><br><br><br>

<!-- panels 1 and 2 -->
<!-- panel 1 -->
<div class="row">
<div class="panel panel-default col-sm-6 text-center">
	<div class="panel-body">
	<h1><a href="info/teen_driving.php" type="button" class="btn btn-info btn-sm">info</a> Fast Track Teen Drivers Ed
	</h1>
		<img class="img-responsive center-block sm_pic" src="TEEN_DRIVER_PIC.jpg">
		<br>
		<p>Courses for ages 15-17 are held Monday - Saturday(16 days of classroom training /2 hours per day). Depending on space availability,students...
	<br><a style="background-color: tomato;" href="https://www.myeform3.net/cazares/student/studentwebsignupTeen.aspx?Param=FTP" type="button" class="btn btn-danger" target="_blank">Register Today</a>
	</p>
</div>
</div>
<!-- panel 2 -->
<div class="panel panel-default col-sm-6 text-center">
	<div style="padding: 25px;" class="panel-body">
		<h1 class="text-center"><a href="info/adult_driving.php" type="button" class="btn btn-info btn-sm">info</a> Adult 6-Hour Course</h1>
<img class="img-responsive center-block sm_pic" src="ADULT_6_HR_PIC.jpg">
		<br>
		<p>If you are 18 to 24 years old it is now required that you take a 6 hour Adult Education Course. This course...
		<br><a style="background-color: tomato;" href="https://www.myeform3.net/cazares/student/studentwebsignupTeen.aspx?Param=ADE" type="button" class="btn btn-danger" target="_blank">Register Today</a>
		</p>
	</div>
</div>
</div>
<!-- end of panels 1 and 2 -->
<!-- panels 3 and 4 -->
<div class="row">
	<!-- panel 3 -->
	<div class="panel panel-default col-sm-6 text-center">
		<div style="padding: 32px;" class="panel-body">
			<h1><a href="info/defensive_driving.php" type="button" class="btn btn-info btn-sm">info</a> Defensive Driving <br> For Ticket Dismisal
			</h1>
			<img class="img-responsive center-block sm_pic" src="DEFENSIVE_DRIVING_PIC.jpg">
	<br>
	<p>If you have received a traffic ticket, your first step is to go to the court as indicated on your ticket. Ask for authorization to dismiss your...
	<br><a style="background-color: tomato;" href="https://www.myeform3.net/cazares/student/studentwebsignupTeen.aspx?Param=DDC" type="button" class="btn btn-danger" target="_blank">Register Today</a>
	</p>
		</div>
	</div>
	<!-- panel 4 -->
	<div class="panel panel-default col-sm-6 text-center">
		<div class="panel-body">
		<h1><a href="info/cpr_courses.php" type="button" class="btn btn-info btn-sm">info</a> CPR Courses:<br> Starting at $45.00
		</h1>
		<img class="img-responsive center-block sm_pic" src="CPR_PIC.jpg">
	<br>
	<p>American Heart Association Heart Saver and Healthcare Provider CPR Courses are held on Fridays at 2:30pm at our Mcallen...
	<br><a style="background-color: tomato;" href="https://www.myeform3.net/cazares/student/studentwebsignupTeen.aspx?Param=CPR" type="button" class="btn btn-danger" target="_blank">Register Today</a>
	</p>
		</div>
	</div>
</div>
<br><br><br><br><br><br>

<footer style="background-color: black;" class="text-center footer-col row">
	
	<p style="color: silver;" class="col-xs-6 text-center">Contact Us
	<br>
	Phone: <a href="tel:9566831444">(956)683-1444</a><br>
	Email: <a href="mailto:cazaresdriving@sbcglobal.net">cazaresdriving@sbcglobal.net</a>
	</p>
	<p style="color: silver;" class="col-xs-6 text-center">Quick Links
	<br>
	<a style="color: silver;" href="https://www.myeform3.net/cazares/Admin/Login.aspx">Staff Login</a>
	<br>
	<span>
	<a style="color: silver;" href="https://www.facebook.com/pages/Cazares-Driving-School/118500358255059">Visit Us on Facebook</a>
	<span style="font-size:25px; color: #3b5998;" class="fa fa-facebook-official"></span>

	<p class="text-center" style="color: tomato"> &copy; cazaresdriving 2017</p>
	<p class="text-center" style="color: silver">lic# c1594 (a)(b)(c)(d)</p>
	</span>
	</p>
</footer>


<!-- div for animate bottom -->
</div>

</body>


</html>