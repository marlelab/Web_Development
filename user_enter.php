 <!DOCTYPE html >
<html lang="en">
<head>
     <meta charset="utf-8">
	<script src="jquery-3.2.0.js"></script> 
    <script src="jquery-3.2.0.min.js"></script>			 	
	<title>Sign In</title>
	<link rel="shortcut icon" href="resources/logo_all/logo_icon.ico" type="image/png">
    <link href="css/style_enter.css" rel="stylesheet">
 <script>
    </script>
</head>	    
<body>
	<section class="content">
        <div class="logo">
            <h1><a href="main.html">URBAN INK </a></h1>
            <h3>Unique. Inked. Urban.</h3></div>
        <form role = "form" action = "login_api.php" method = "post" class="logform">
        <ul class="log_fields">
            <li><h1>Welcome back.</h1>
            </li>
           <li class="log_li"> <input type = "text" name = "email" placeholder = " E-mail or Username">
            <input type = "password" name = "password" placeholder = " Password">
            <h3><input type = "checkbox" name = "remember" value="0"> Remember me</h3>
             <input type="submit" name = "login" value="Sign In" id="but">
           </li>
           <li> <h3><a href="">Enable to enter? Restore acces.</a></h3>
            <h3>Gonna join to Urban Ink society? <a href="sign_up.php">Sign Up </a></h3>
            </li>
</ul>
         </form>     
         <div class="coverfoot">COPYRIGHT&nbsp; | &nbsp;POLINA KLOMINA&nbsp; | &nbsp;LVIV 2017</div>    
	</section>
    
</body>
</html>
  