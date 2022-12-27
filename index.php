<!DOCTYPE html>
<html lang="en">
<head>
<title>SJNHS - Senior High School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery-2.2.3.min.js"></script>
<link rel="icon" href="images/logo.png" sizes="16x16">  
<style>
#subMenu .dropdown-menu{
	margin-left:170px;
	margin-top:-20px;
	background:lightgreen;
}
#subMenu:hover{
	opacity:1;
	transition:opacity 1s,left 1s;
}
#subMenu {
height:110px;
width:700px;
background: url(images/LOGOGO.PNG) no-repeat;
display:none;
position:fixed;
top:0;
left:0;
z-index:500;
opacity:.3;
padding:15px;
font-size:2.5em;
}
.ha {
    position: absolute;
    bottom: 20px;
    left: 110px;
	font-size:20px;
    color:white;
}
.he{
    position: absolute;
    bottom: 20px;
    left: 185px;
	font-size:20px;
    color:white;
}
.haa{
    position: absolute;
    bottom: 20px;
    left: 270px;
	font-size:20px;
    color:white;
}
.hi {
    position: absolute;
    bottom: 20px;
    left: 355px;
	font-size:20px;
    color:white;
}
.ho{
    position: absolute;
    bottom: 20px;
    left: 430px;
	font-size:20px;
    color:white;
}
</style>
</head>

<body> 
	<!-- header -->
	<div class="header">
		<div class="container">  
			<div class="navbar-right">
				<p><i class="fa fa-external-link "></i> Also visit our <a href=""><u>San Josef National High School Website</u></a></p> 
			</div>
<?php
ini_set('error_reporting',E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
session_start();
if(!isset($_SESSION["name"]))
{
	echo "<i class='fa fa-exclamation-triangle'></i> You are not logged in!";
}
else
{
	echo "Logged in as <i class='fa fa-user'></i> <font color='blue'>$_SESSION[name]</font> ";
}
if ($_SESSION['role'] == 'admin') : {
							echo" (Admin)";
							} 
elseif ($_SESSION['role'] == 'student') : {
	echo" (Student)";
}
	elseif ($_SESSION['role'] == 'teacher') : {
	echo" (Teacher)";
} 
?>
<?php endif; ?>
			</div>
	</div>
	<!-- //header -->
<div id="subMenu">
	<a class="ha" href="index.php"><u>Home</u></a>
	<a class="he" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		<span data-letters="Pages">Offers</span><span class="caret"></span>
	</a>
	<ul class="dropdown-menu"> 
		<li><a href="academic.php">Academic</a></li>
		<li><a href="tvl.php">TVL</a></li>
	</ul>
	<a class="haa" href="gallery.php">Gallery</a>
	<a class="hi" href="about.php">About</a>
	<a class="ho" href="contact.php">Contact</a>
</div>
<script>
    $(document).ready(function() {
        var headerTop = $('#header').offset().top;
        var headerBottom = headerTop + 120; // Sub-menu should appear after this distance from top.
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop(); // Current vertical scroll position from the top
            if (scrollTop > headerBottom) { // Check to see if we have scrolled more than headerBottom
                if (($("#subMenu").is(":visible") === false)) {
                    $('#subMenu').fadeIn('slow');
                }
            } else {
                if ($("#subMenu").is(":visible")) {
                    $('#subMenu').hide();
                }
            }
        });
    });
</script>
	<!-- banner -->
	<div class="banner">
		<div class="bnr"> 
			<!-- navigation -->
			<div class="top-nav">
	<div id="header">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>  
						<h1><a href="index.php"><img id="sjlogo" src="images/logo.png" width="90px"></a></h1> 
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="navbar-right">
							<ul class="nav navbar">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Program Offerings</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="academic.php">Academic</a></li>
										<li><a href="tvl.php">TVL</a></li>
									</ul>
								</li> 
								<li><a href="gallery.php">Gallery</a></li> 		
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
<?php
include_once('config.php');
if(!isset($_SESSION["name"]))
{
	echo "<li><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
			<span data-letters='Pages'>Account</span><span class='caret'></span></a>
			<ul class='dropdown-menu'> 
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal'><i class='fa fa-sign-in'></i> Sign In</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal2'><i class='fa fa-file-text-o'></i> Sign Up</a></li>
		</ul></li>";
}
elseif ($_SESSION['role'] == 'admin')
{
	echo "<li><a  href='users.php' ><i class='fa fa-users'></i> Users</a></li>
			<li><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
			<span data-letters='Pages'>More</span><span class='caret'></span></a>
			<ul class='dropdown-menu'> 
				<li><a  href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal6'><i class='fa fa-comments-o'></i> Chat</a></li><li><a  href='mymessage.php' ><i class='fa fa-envelope'></i> Messages</a></li>
			
				<li><a  href='lobby.php'><i class='fa fa-home'></i> Lobby</a></li>
				<li><a  href='grades.php'><i class='fa fa-envelope'></i> Grades</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal7'><i class='fa fa-sign-out'></i> Log Out</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal3'><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal5'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deactivate</a></li>
			</ul></li>";
}
elseif ($_SESSION['role'] == 'teacher') {
	echo"<li><a  href='grades.php' ><i class='fa fa-envelope'></i> Grades</a></li>
			<li><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
			<span data-letters='Pages'>More</span><span class='caret'></span></a>
			<ul class='dropdown-menu'> 
		<li><a  href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal6'><i class='fa fa-comments-o'></i> Chat</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal7'><i class='fa fa-sign-out'></i> Log Out</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal3'><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal5'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deactivate</a></li>
			</ul></li>";
} 
elseif ($_SESSION['role'] == 'student') {
	echo"<li><a  href='lobby.php' ><i class='fa fa-home'></i> Lobby</a></li>
			<li><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
			<span data-letters='Pages'>More</span><span class='caret'></span></a>
			<ul class='dropdown-menu'> 
			<li><a  href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal6'><i class='fa fa-comments-o'></i> Chat</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal7'><i class='fa fa-sign-out'></i> Log Out</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal3'><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</a></li>
				<li><a href='' data-dismiss='modal' data-toggle='modal' data-target='#myModal5'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deactivate</a></li>
			</ul></li>";
} 
						?>

							</ul>
						</div> 
						<div class="clearfix"> </div>  
					</div>
				</div>	
			</div>	
			<!-- //nav -->
			<div class="banner-text">
				<div class="container">
					<h2><br></h2>
					<div class="sj">
						<a class="sj1" href="about.php">
						<span>More...</span>
						</a>
					</div> 
				</div> 
			</div> 
		</div>
		</div>
	</div>
	<!-- //banner --> 
	<!-- about -->
	<div class="jumbotron">
		<div class="container">
			<div class="about">
				<h3 class="sj2"><font face="Calibri">Welcome to <b>SJNHS</b><br><font size="6px">Senior High School Website.</font></font></h3>
				<p>In this website you will be able to see the latest updates in <b>San Josef National High School</b> (SJNHS). Our achievements, activities, offers, news and more. We will try our best to assist, entertain and provide you the information mostly about our <b>Senior High School Program.</b></p>
</div>	
</div>
</div>
	<!-- //about -->
	<!-- welcome --> 
		<div class="container"><br><br>
			<div class="col-md-6 about-left">
			<br><h3 class="sj2">Vision</h3>
				<a  href="images/vision.JPG">
					<img src="images/vision.JPG" class="img-responsive" alt=""/>
				</a>	
			</div>
			<div class="col-md-6 about-left">
			<br><h3 class="sj2">Mission</h3>
				<a  href="images/mission.JPG">
					<img src="images/mission.JPG" class="img-responsive" alt=""/>
				</a>	
			<br><br>
			</div>
		</div>
	<!-- //welcome -->
		<!-- news -->
	<div class="services news">
		<div class="container">   
			<h3 class="sj2">News & Events</h3>  
			<div class="news">
				<div class="col-sm-4 sj5">
					<div class="news-gridtext">
						<div class="sj6">
							<a href="#"><img src="images/n1.jpg" class="img-responsive zoom-img" height="100px" /></a>
						</div>
						<div class="sj7">
							<h5 class="sj8">DATE...</h5>
							<h4><a href="#">Topic...</a></h4> 
							<p>Description...</p>
							<a class="sj9" href="#" data-toggle="modal" data-target="#news1"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 sj5">
					<div class="news-gridtext">
						<div class="sj6">
							<a href="#"><img src="images/n2.jpg" class="img-responsive zoom-img" height="100px" /></a>
						</div>
						<div class="sj7">
							<h5 class="sj8">DATE...</h5>
							<h4><a href="#">Topic...</a></h4> 
							<p>Description...</p>
							<a class="sj9" href="#" data-toggle="modal" data-target="#news1"><span>Read More</span></a> 
						</div>
					</div>
				</div>
				<div class="col-sm-4 sj5">
					<div class="news-gridtext">
						<div class="sj6">
							<a href="#"><img src="images/n3.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="sj7">
							<h5 class="sj8">DATE...</h5>
							<h4><a href="#">Topic...</a></h4> 
							<p>Description...</p> 
							<a class="sj9" href="#" data-toggle="modal" data-target="#news1"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
            <div class="news">
				<div class="col-sm-4 sj5">
					<div class="news-gridtext">
						<div class="sj6">
							<a href="#"><img src="images/n4.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="sj7">
							<h5 class="sj8">DATE...</h5>
							<h4><a href="#">Topic...</a></h4> 
							<p>Description...</p>
							<a class="sj9" href="#" data-toggle="modal" data-target="#news1"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 sj5">
					<div class="news-gridtext">
						<div class="sj6">
							<a href="#"><img src="images/n5.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="sj7">
							<h5 class="sj8">DATE...</h5>
							<h4><a href="#">Topic...</a></h4> 
							<p>Description...</p>
							<a class="sj9" href="#" data-toggle="modal" data-target="#news1"><span>Read More</span></a> 
						</div>
					</div>
				</div>
				<div class="col-sm-4 sj5">
					<div class="news-gridtext">
						<div class="sj6">
							<a href="#"><img src="images/n6.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="sj7">
							<h5 class="sj8">DATE...</h5>
							<h4><a href="#">Topic...</a></h4> 
							<p>Description...</p> 
							<a class="sj9" href="#" data-toggle="modal" data-target="#news1"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news --> 
	<!--chat-->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><i class='fa fa-comments-o'></i> Chat</font> &nbsp; &nbsp;
			<font color="lightgreen">
			<?php 
			$con = mysql_connect("localhost","root","");
			mysql_select_db("ajaxdb",$con);
			$result = mysql_query("select count(1) FROM user WHERE user_status=1");
			$row = mysql_fetch_array($result);
			$total = $row[0];
			echo "(Online: ".$total.")";
			mysql_close($con);
			?>
			</font>
			</h4>
                        </div>
                        <div class="modal-body"><br>
						<h4 style="margin-top:-3px;"><font size="2px">Conversations will restart every 100 messages.</font>
						<font size="2px" color="white">
			
			</font>
			</h4>
                <script>
					function getText() {
						var $a =	document.getElementById('text').value;
						xhr = new XMLHttpRequest();
						xhr.open('POST' , 'chatdb.php',true);
						xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
						xhr.send('chat='+$a);
						xhr.onreadystatechange=function(){
						if (xhr.responseText){
						//	document.getElementById('chatarea').innerHTML=xhr.responseText;
											}
													}
										}
						
					function setText(){
						xhr = new XMLHttpRequest();
						xhr.open('POST' , 'chatFetch.php' , true);
						xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
						xhr.send();
						xhr.onreadystatechange = function(){
						//	alert(xhr.responseText);
						document.getElementById('chatarea').innerHTML = xhr.responseText;
															}
		
										}
						setInterval("setText()",2000);
						setInterval("users()",3000);
	
					function users(){
						xhr1 = new XMLHttpRequest();
						xhr1.open('POST' , 'userFetch.php' , true);
						xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
						xhr1.send();
						xhr1.onreadystatechange = function(){
						//	alert(xhr.responseText);
						document.getElementById('loginperson').innerHTML = xhr1.responseText;
															}
									}
				</script>

							<div id="chatbox">
							<div id ="chatarea"></div>
							<div id="loginperson"></div>
							<form id="reset">
								<textarea name="message-to-send" id="text" placeholder ="Type your message here!" rows="2" col="2"></textarea>
							</form>
							</div><br>
                        </div>
                        <div class="modal-footer">
							<button id="sad" class="btn btn-secondary" form="reset" type="reset" onclick="getText()">Send</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			
<!-- Account modal-->
	<!--login-->
	         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><i class='fa fa-sign-in'></i> Login form</font></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="send" action="process.php">
							 <div class="form-group">
								<label>Email:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="email" name="email" maxlength="30" placeholder="Type your Email here!" class="form-control" id="email"  required autofocus /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>Password:</label><br>
								<div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" placeholder="Type your password here!" class="form-control" required />
								</div>
							</div>
							<input type="hidden" type="submit" />
							</form><br>
							<p>Forgot password? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#myModal4">Click Here!</a></p>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="send" >Log In</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			
			<!--signup-->
			<?php
			include_once('config.php');
			$result = mysqli_query($conn , 'select * from country');
			if(!$result){
			echo 'query failed';}
			?>
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><i class='fa fa-file-text-o'></i> Sign Up</font></h4>
                        </div>
                        <div class="modal-body">
							<form method="post" id="send1" action="insert.php">
							 <div class="form-group">
								<label>Username:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="name" maxlength="15" placeholder="Type your Name here!" class="form-control" autofocus required />
								</div>
							</div>
							<div class="form-group">
								<label>Email:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="email" name="email" onBlur="getEmail(this.value)" placeholder="Type your Email here!" class="form-control" id="email"  required />
								</div>
							</div><div id="emailDiv"></div>
							<div class="form-group">
								<label>Grade:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span>
								<select name="country">
								<?php while($row = mysqli_fetch_assoc($result)){?>
								<option value="<?php echo $row['country_id']; ?>"> <?php echo $row['country_name']; ?>
								</option>
								<?php } ?>
								</select><div id="city_display"></div></span>
								</div>
							</div>
							<div class="form-group">
								<label>Password:</label><br>
								<div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="pass1" placeholder="Type your password here!" class="form-control" id="password1" required />
								</div>
							</div>
							<div class="form-group">
								<label>Confirm Password:</label><br>
								<div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="pass2" placeholder="Re-type your Password here!" class="form-control" id="password2" required />
								</div>
							</div>
							<div class="form-group">
								<input type ="hidden" type="text" name="role" value="student"/>
								</div>
							</form><br>
							<p>Already have an account? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Log In here!</a></p>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="send1" >Sign Up</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			
			<!--update-->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><span class='glyphicon glyphicon-time' aria-hidden='true'></span> Update</font></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="send2" action="update.php">
							 <div class="form-group">
								<label>New Username:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="name" maxlength="15" placeholder="Type your new username here!" value="<?php echo $_SESSION['name']; ?>" class="form-control" required autofocus /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>New Password:</label><br>
								<div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" placeholder="Type your new password here!" class="form-control" required />
								</div>
							</div>
							</form><br>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="send2" >Update</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			
			<!--recovery-->
			  <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><i class='fa fa-repeat'></i> Recovery</font></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="send3" action="forgot.php">
							 <div class="form-group">
								<label>Email:</label><br>
								<div class="input-group pb-modalreglog-input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="email" name="email"  placeholder="Type your Email here!" class="form-control" required autofocus /> <br>
								</div>
							</div>
							<div class="form-group">
								<label>New Password:</label><br>
								<div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" placeholder="Type your password here!" class="form-control" id="" required />
								</div>
							</div>
							</form><br>
                        </div>
                        <div class="modal-footer">
							<button type="submit" class="btn btn-secondary" form="send3" >Recover</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			
			<!--logout-->
		<?php
			include_once('config.php');						
			if (isset($_GET['logout'])){
				$result = mysqli_query($conn, "UPDATE user
				SET user_status = '0'
				WHERE user_email = '$_SESSION[email]';");
				session_destroy();
				echo "<script language='javascript'>window.location='index.php';</script>";
			}
		?>
			<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><i class='fa fa-sign-out'></i> Log Out</font></h4>
                        </div>
                        <div class="modal-body">
                            <form action="">
							<div class="form-group">
								<label><font size="5px">Logging out will remove some contents of this page.<br>Are you sure?</font></label>
							</div><br><br>
							<input type="submit" name="logout" class="btn btn-secondary" value="Yes">
							<input type="submit" data-dismiss="modal" class="btn btn-secondary" value="No">
							</form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
 
			<!--delete-->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font color="white"><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deactivate</font></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="delete.php">
							 <div class="form-group">
								<label><font size="5px">Do you really want to delete your account?</font></label><br><br>
							</div>
							<button type="submit" class="btn btn-secondary" >Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
							</form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<!-- Account modal- END -->
       
	   <!-- modal news-->
	<div class="modal fade" id="news1" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="background:black;" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 style="color:skyblue;">News</h4>
				</div>
				<div class="modal-body">
					<div class="model-img-info"><br>
						<img src="images/demo.png" width="200PX"/>
						<p>Description...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal news-->


<!--footer-->
	<div class="copy-right"> 
		<div class="container">
			<p>© 2018 SJNHS - Senior High School | Developed by <a href="https://m.facebook.com/raymarkxdelacruz">Raymark E. dela Cruz</a> <br>
  </p>
		</div>
	</div>  
<!-- //footer -->

	<!--confirmpass and country-->
	<script>
function getcity(id) {
			xhr = new XMLHttpRequest();
			xhr.open('GET' , 'test.php?idd='+id, true);
			xhr.send();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status==200){
					document.getElementById("city_display").innerHTML = xhr.responseText;
					}
			
				}


}

function getEmail(emailid){

			email  = new XMLHttpRequest();
			email.open('GET' , 'test2.php?email='+emailid, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					
					document.getElementById('emailDiv').innerHTML = email.responseText;
					}
				
				}
	
	
	}

</script>
<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
<!-- scrolling -->
	<script src="js/SmoothScroll.min.js"></script> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //move-up -->   
	<!-- load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>