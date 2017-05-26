 <?php

          $servername = "localhost";
          $username = "admin";
          $password = "password";
          $func = $_POST['but'];
          $conn = mysqli_connect($servername, $username, $password);
          if (!$conn)
          {
              die("Connection failed: " . mysqli_connect_error());
          }
          $exist_file = fopen("log.dat", "r");
          $log = fgets($exist_file, 255);
          $email=$log;
          $username="Sorry? server not found active account...(";  
          if($log){
            if($func==1){
          $sql = "SELECT  name,surname FROM tattoo.user";
          $result = $conn->query($sql);
          error_reporting( error_reporting() & ~E_NOTICE );
          while($row = $result->fetch_assoc()) 
            {
              if(strcmp($email,$row["email"]))
                {
                  $username="";
                  $username="Goodbye ".$row["name"]." ".$row["surname"];
               $exist_file = fopen("log.dat", "w+");
               fclose($exist_file);
                }
            }   
          }  
          else
          {
             $sql = "SELECT  name,surname FROM tattoo.user";
          $result = $conn->query($sql);
            error_reporting( error_reporting() & ~E_NOTICE );
          while($row = $result->fetch_assoc()) 
            {
              if(strcmp($email,$row["email"]))
                {
                  $username="";
                  $username="We will miss you ".$row["name"]." ".$row["surname"];
               $exist_file = fopen("log.dat", "w+");
               fclose($exist_file);
                }
            } 
            $sql2= "DELETE FROM tattoo.user WHERE email=='$email'";
          $result = $conn->query($sql2);
            
          } 
        }
               echo "<p style=\"text-align: center\">".$username."</p>";
        ?>  