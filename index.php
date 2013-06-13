<?php
session_start();
?>


<html>
<head>
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Welcome to P-Club</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.css" />
 <link rel="stylesheet" href="css/index.css" />
  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css" />

  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/vendor/jquery.js"></script>

  <script>
  $(document).ready(function() {
   $('.club').mouseenter(function() {
       $(this).animate({
           height: '+=10px'
       });
   });
   $('.club').mouseleave(function() {
       $(this).animate({
           height: '-=10px'
       }); 
   });
   $('.club').click(function() {
       $(this).toggle(1000);
   }); 
});
  </script>


  <style> 
.club {
    height:100px;
    width:100px;
    display: inline-block;
    font-size:70px;
    text-align:center
}

#green {
    background-color:#008800;
}

#red {
    background-color:#FF0000;
}

#blue {
    background-color:#0000FF;
}

#yellow {
    background-color:#E2BE22;
}

#green2 {
    background-color:#008800;
}

div.inline{
  display:inline-block;
  width:100px;
  height:60px;
}

#ok
{
width:100px;
height:60px;
background:green;
position:relative;
animation:mymove 5s infinite;
-webkit-animation:mymove 5s infinite; /*Safari and Chrome*/
}

@keyframes mymove
{
from {left:0px;}
to {left:230px;}
}

@-webkit-keyframes mymove /*Safari and Chrome*/
{
from {left:0px;}
to {left:230px;}
}
</style>


</head>
<body>
	<div data-alert class="alert-box alert" id='error' style="display:none">
  <!-- Your content goes here -->
  <a href="#" class="close">&times;</a>
</div>

	<div class="row">
  <div class="small-6 large-8 columns">
    <!--<div id="ok" class="inline"></div>
    <div class="inline" style="font-size:50px; position:absolute; text-align:left;color:white;">Pclub</div>-->
        <div class="club" id="green"><p>P<p></div>
        <div class="club" id="blue"><p>C<p></div>
        <div class="club" id="yellow"><p>L<p></div>
        <div class="club" id="red"><p>U<p></div>
        <div class="club" id="green2"><p>B<p></div>
  </div>
<?php
if(!isset($_SESSION['username']))
{
  if(isset($_SESSION['error']))  { echo "
  									<script>
  									var x=document.getElementById('error');
  									x.innerHTML='The Userid or Password you entered is not available in our database !!! Please make sure to register yourself before you login.<a class=close>&times;</a>' ;
  									x.style.textAlign='center';
  									x.style.display='block';
  									</script>
  									"; unset($_SESSION['error']);
  								 }
  if(isset($_SESSION['error1'])) { echo "
  									<script>
  									var x=document.getElementById('error');
  									x.innerHTML='Username you want to use is already in use !!! Please try again with different username.  <a class=close>&times;</a>' ;
  									x.style.textAlign='center';
  									x.style.display='block';
  									</script>
  									";
  									unset($_SESSION['error1']); 
  								 }
  echo '<div class="small-6 large-2 columns"><a href="#" data-reveal-id="myModal">Login</a></div>
  <div class="small-12 large-2 columns"><a href="#" data-reveal-id="myModal1">Register</a></div>';
}
  else 
  	{	
  		echo "<a href=PHP/user.php target='_blank'>";
  		echo $_SESSION['name'];
  		echo '</a><a href="PHP/logout.php">Logout</a>';
  	}
  ?>

</div>
<div id="sticky-anchor"></div>
<div id="sticky">
<ul class="button-group radius even-8">
  <li><a href="#" class="button success ">Home</a></li>
  <li><a href="#" class="button success ">Tutorial</a></li>
  <li><a href="#" class="button success  ">Projects</a></li>
  <li><a href="#" class="button success ">Achivements</a></li>
  <li><a href="#" class="button success ">Contact</a></li>
  <li><a href="#" class="button success ">Forum</a></li>
  <li><a href="#" class="button success ">Online Judge</a></li>
  <li><a href="admin.php" class="button success " target="_blank">Admin Login</a></li>
</ul>

</div>

<div class="row" style="width:50%">
  
  <div class="small-12 columns">
      <ul data-orbit>
  <li>
<img src="img/i1.jpg">
    <div class="orbit-caption">ACM ICPC</div>
  </li>
  <li>
<img src="img/i2.jpg">
    <div class="orbit-caption">Microsoft Appathone</div>
  </li>
  <li>
<img src="img/i3.jpg">
    <div class="orbit-caption">Lectures</div>
  </li>
    <li>
<img src="img/i4.jpg">
    <div class="orbit-caption">Imagine Cup</div>
  </li>
</ul>

</div>




<div class="row">
  <div class="small-6 large-2 columns"><b>Events</b><br><hr>
    <div class="panel callout radius">
Up comming events
</div>
  </div>
  <div class="small-6 large-8 columns">
    P-Club is one of the oldest club of IIT Kanpur. It is run by students of <b>IIT Kanpur</b>. It is responsible for various activities of Programming held in campus and also develope programming culture in the campus.
  </div>
  <div class="small-12 large-2 columns"><div class="panel callout radius">
Rank of Online Judge
</div>
  </div>
</div>


<hr>







<div id="t">This is test</div>

<div id="myModal" class="reveal-modal">
<form name="loginForm" action="PHP/login.php" method="POST" onsubmit="return validateLoginForm()">
  <fieldset>
    <legend>Login to continue</legend>

    <div class="row">
      <div class="large-6 columns">
        <label>Login Id</label>
        <input id="loginform_username" type="text" placeholder="Enter login Id" name="username">
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label>Password</label>
        <input id= "loginform_pwd" type="password" placeholder="Enter your password" name="pwd">
      </div>
    </div>


    <button id="loginn_button">Login</button>
    <font color="red"> <div id="login_error_info" class="error"></div></font>
  </fieldset>
</form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="myModal1" class="reveal-modal">
<form name="signupForm" action="PHP/register.php"  method= "POST" onsubmit="return validateSignUpForm()">
  <fieldset>
    <legend>Register Here</legend>

    <div class="row">
      <div class="large-6 columns">
        <label>Login Id</label>
        <input id="signupform_username" type="text" placeholder="Enter login Id" name="username">
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label>Name</label>
        <input id="signupform_name" type="text" placeholder="Enter Your Name" name="name">
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label>Password(minimum 6 characters)</label>
        <input id="signupform_pwd" type="password" placeholder="Enter your password" name="pwd">
      </div>
    </div>
    <button>Register</button>
    <font color="red"> <div id="signup_error_info" class="error"></div></font>
  </fieldset>
</form>
  <a class="close-reveal-modal">&#215;</a>
</div>







 <script type="text/javascript">

function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = $('#sticky-anchor').offset().top;
  if (window_top > div_top) {
    $('#sticky').addClass('stick');
  } else {
    $('#sticky').removeClass('stick');
  }
}

$(function() {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
});

function validateLoginForm()
{
	var x=document.forms['loginForm']['username'].value;
	var flag=true;
	if(x==null||x=="") 
	{
		$("#loginform_username").addClass("error");
		flag=false;
	}
	else $("#loginform_username").removeClass("error");
	x=document.forms['loginForm']['pwd'].value;
	if(x.length<6)
	{
		$("#loginform_pwd").addClass("error");
		flag=false;
	}
	else $("#loginform_pwd").removeClass("error");
	if(!flag) document.getElementById("login_error_info").innerHTML="* invalid form submission";
	//$("#login_error_info").addClass("error");
	return flag;
}
function validateSignUpForm()
{
	var x=document.forms['signupForm']['username'].value;
	var flag=true;
	if(x==null||x=="") 
	{
		$("#signupform_username").addClass("error");
		flag=false;
	}
	else $("#signupform_username").removeClass("error");

	x=document.forms['signupForm']['name'].value;
	if(x==null||x=="") 
	{
		$("#signupform_name").addClass("error");
		flag=false;
	}
	else $("#signupform_name").removeClass("error");

	x=document.forms['signupForm']['pwd'].value;
	if(x.length<6)
	{
		$("#signupform_pwd").addClass("error");
		flag=false;
	}
	else $("#signupform_pwd").removeClass("error");
	if(!flag) document.getElementById("signup_error_info").innerHTML="* invalid form submission";
	//$("#login_error_info").addClass("error");
	return flag;
}

  </script>
   <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 </body>
</html>


