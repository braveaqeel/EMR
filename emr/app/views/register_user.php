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
        #regForm input[type=text], input[type=password], input[type=email], input[type=number], input[type=tel]{
            width: 95%;
            height: 40px;
           font: 300 18px/36px 'Open Sans', sans-serif;
            margin-top: -4px;
            
        }

        #regForm input:focus, textarea:focus{
            border: 1px solid #129894;
        }

        #pass{
            width: 95%;
            height: 40px;
           font: 300 18px/36px 'Open Sans', sans-serif;
            margin-top: -4px;
        }

        #regForm textarea{
            width: 95%;
            height: 80%;
            font: 300 18px/36px 'Open Sans', sans-serif;
        }

        select{
            width: 70%;
            height: 30px;
            font: 300 18px/36px 'Open Sans', sans-serif;
        }

    </style>
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
                        User Registration
            </div>
		</div>
		<br><br><br>
	   <center>
            <div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">
            <form style="padding: 40px" id="regForm"> 
                <table width="621" height="720" border="0">
              <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      Name:</strong> </span></td>
                <td width="333"><input type="text" id="name"  required></td>
                </tr>
              <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      User ID:</strong> </span></td>
                <td width="333"><input type="text" id="user_id"  required></td>
                </tr>
              <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      Password:</strong> </span></td>
                <td width="333"><input type="password" id="pass"  required ></td>
                </tr>
              <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      Re-type Password:</strong> </span></td>
                <td width="333"><input type="password" id="pass"  required></td>
                </tr>
              <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      User Email:</strong> </span></td>
                <td width="333"><input type="email" id="email"  ></td>
                </tr>
              <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      Gender:</strong> </span></td>
                <td width="333"><span>
                  <label>
                    <input style="width: 30px" type="radio" name="gender" value="male" id="gender_0">
                    Male</label>
                 &nbsp;     &nbsp;     &nbsp;
                  <label>
                    <input style="width: 30px" type="radio" name="gender" value="female" id="gender_1">
                    Female</label>
                 
                </span></td>
                </tr>
                <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      Age:</strong> </span></td>
                <td width="333"><input type="number" id="username"  required></td>
                </tr><tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      City:</strong> </span></td>
                <td width="333"><input type="text" id="city" required></td>
                </tr>
                <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      Address:</strong> </span></td>
                <td width="333"><input type="text" id="username"  required></td>
                </tr>
                <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong>      Phone:</strong> </span></td>
                <td width="333"><input type="tel" id="username" ></td>
                </tr>
                <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong> Access Control:</strong> </span></td>
                <td width="333"><select>
                  <option selected disabled>Select User Role</option>
                  <option value="administrator">Administrator</option>
                  <option value="doctor">Doctor</option>
                  <option value="accountant">Accountant</option>
                  <option value="receptionist">Receptionist</option>
                  <option value="lab_manager">Lab Manager</option>
                </select></td>
                </tr>
                <tr>
                <td width="272" height="55"><span style="font-size: 1.2em"><strong> Branch Name:</strong> </span></td>
                <td width="333"><select style="width: 70%">
                  <option selected disabled>Select Branch</option>
                  <option value="dha">DHA</option>
                  <option value="gulberg">Gulberg</option>
                  <option value="canal_view">Canal View</option>
                  <option value="garden_town">Garden Town</option>
                  <option value="johar_town">Johar Town</option>
                </select></td>
                </tr>
                <tr>
                <td width="272"><span style="font-size: 1.2em;"><strong>Additional Info:</strong> </span></td>
                <td width="333" height="200"><textarea style="font-size: 1.2em; margin-top: 2px; resize: none;"></textarea></td>
                </tr>
                <tr> 
                <td colspan="2"> 
                    <center>
                    <div class="btn-wrap">
                        <a class="btn_3" href="#" data-type="reset">Reset</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a class="btn_3" href="#" data-type="submit">Register</a>
                    </div>
                </center>
                </td>
                </tr>
            </table>
            </form>
            </div>
        </center>
		
		<br><br>

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