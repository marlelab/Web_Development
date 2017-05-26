 <!DOCTYPE html >
<html lang="en">
<head>
     <meta charset="utf-8">
	<script src="js/jquery-3.2.0.js"></script> 
    <script src="js/jquery-3.2.0.min.js"></script>			 	
	<title>Sign Up</title>
	<link rel="shortcut icon" href="resources/logo_all/logo_icon.ico" type="image/png">
    <link href="css/sign_up_style.css" rel="stylesheet">
 <script>
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) { 
                $('.user_avatar')
                    .attr('src', e.target.result)
                  
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function switch_add()
    {
        if($(".data_add").css("display")=="none")
          //  $(".data_add").css("display","flex");
      $(".data_add").slideDown(500);
        else   //$(".data_add").css("display","none"); 
        $(".data_add").slideUp(500);
    }
    </script>
</head>	    
<body>
	<section class="content">
        <div class="logo">
            <h1><a href="main.html">URBAN INK</a></h1>
            <h3>Unique. Inked. Urban.</h3></div>
        <form role = "form" action = "reg_api.php" method = "post" class="logform">
        <ul class="log_fields">
            <li><h1>Create account.</h1>
            </li>
           <li class="log_li"> 
           <input type = "email" name = "email" placeholder = " E-mail">
           <input type = "text" name = "username" placeholder = " Username">
            <input type = "password" name = "password1" placeholder = " Create password">
             <input type = "password" name = "password2" placeholder = " Repeat password"><br>
             <p>Birthday <input lang="en" type = "date" name = "bday"></p>
              <p><input type = "radio" name = "master"> I am tattoo master.</p>
              <p><input type = "radio" name = "model"> I am model.</p>
              <p>I am from <select>
                   <option value="eur">Europe</option>
                   <option value="namr">North America</option>
                    <option value="samr">Latin America</option>
                     <option value="as">Asia</option>
                      <option value="afr">Africa</option>
                       <option value="ocn">Australia / Oceania</option>
               </select></p>
            <h3><input type = "checkbox" name = "remember" value="0">I agree to <a href>Terms of Use</a></h3>
            <h3><input type = "checkbox" name = "remember" value="0">Remember me</h3>
            </li>
             <li class="data_add">
                  <textarea name="discription" rows="5" cols="30" placeholder="Describe yourself"></textarea>
                  <input type="file" onchange="readURL(this);" >
                  <img class="user_avatar">
             </li>
             <li>
             <input type="submit" name = "signup" value="Sign Up" class="sub_but">
           </li>
           <li> <h3> Want to personalisate your acc more? <a class="add_link" onclick="switch_add();">Additional fields.</a></h3>
            <h3> Already have account? <a href="user_enter.php">Sign In! </a></h3>
            </li>
</ul>
         </form>     
         <div class="coverfoot">COPYRIGHT&nbsp; | &nbsp;POLINA KLOMINA&nbsp; | &nbsp;LVIV 2017</div>    
	</section>
    
</body>
</html>
  