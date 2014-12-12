<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css"/>
	<link rel="stylesheet" href="login_css/style.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/modal.js'></script>
    <script src='js/TMForm.js'></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
    
    <style> 
    table, tr, td, th {
		border: 2px solid black;
		color: black;
		font-weight:500;
		}
	th{
		background: #129894;
		color: white;
		}
    </style>
    
    <script>
		function validate(){
			var name = document.getElementById("username").value;
			var pass = document.getElementById("password").value;
			
			if (name == 'doctor' && pass == 'doctor'){
					window.location = "doctor_home";
				}else if(name == 'receptionist' && pass == 'receptionist'){
					window.location = "receptionist_home";
					
				}else if(name == 'lab_manager' && pass == 'lab_manager'){
					window.location = "labmanager_home";
					
				}else if(name == 'accountant' && pass == 'accountant'){
					window.location = "accountant_home";
					
				}else if(name == 'admin' && pass == 'admin'){
					window.location = "admin_home";
					
				}else{
					alert("Invalid UserName or Password!");
				}
				
			}
		</script>
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="index">
                                    <img src="images/logo_new1.jpg" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
                                <li><a href="index">Home</a></li>
                                <li>
                                    <a href="about">About</a>
                                    <ul>
                                        <li><a href="#">Lorem ipsum</a></li>
                                        <li><a href="#">Dolor sit amet</a>
                                        <li><a href="#">Ctetur adipisicing</a>
                                        <li><a href="#">Elit sed do</a>
                                            <ul>
                                                <li><a href="#">Iusmod tempor</a></li>
                                                <li><a href="#">Incididunt ut labore</a></li>
                                                <li><a href="#">Et dolore magna</a></li>
                                                <li><a href="#">Aliqua Ut enim</a></li>
                                                <li><a href="#">Minim veniam</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="services">Services</a></li>
                                
                                <li><a href="contacts">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
	<br>
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Employee Login
            </div>
		</div>
		<br><br><br>
		<div class="login">
			<div class="login-card">
				<h1>Login!</h1><br>
				<form>
				<input type="text" name="user" id="username" placeholder="Username">
				<input type="password" name="pass" id="password" placeholder="Password">
				<input style="width:100%" onClick="validate()" type="button" name="login" class="login login-submit" value="login">
				</form>

				<div class="login-help">
				<a href="#">Forgot Password</a>
				</div>
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br>
        <center>
 <table style="margin-top: 100px;text-align:center;" width="393">
  <tr>
    <th width="207" style="text-align: center"><strong>User Name</strong></th>
    <th width="183" style="text-align: center"><strong>Password</strong></th>
  </tr>
  <tr>
    <td>doctor</td>
    <td>doctor</td>
  </tr>
  <tr>
    <td>receptionist</td>
    <td>receptionist</td>
  </tr>
  <tr>
    <td>admin</td>
    <td>admin</td>
  </tr>
  <tr>
    <td>lab_manager</td>
    <td>lab_manager</td>
  </tr>
  <tr>
    <td>accountant</td>
    <td>accountant</td>
  </tr>
</table>

 </center>
      <div class="container">
            <div class="row wrap_9 wrap_4 wrap_10">
                <div class="grid_12">
                    <div class="header_1 wrap_3 color_3">
                        Get in Touch
                    </div>
                    <div class="box_3">
                        <ul class="list_1">
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-google-plus" href="#"></a></li>
                            <li><a class="fa fa-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    © <span id="copyright-year"></span> | <a href="#">Electronic Medical Records</a> <br/>
                    Website designed by <a href="" rel="nofollow">EMR Team - VU Software House</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>