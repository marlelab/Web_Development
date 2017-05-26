 <?php
          $servername = "localhost";
          $username = "admin";
          $password = "password";

          $conn = mysqli_connect($servername, $username, $password);

          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          $email = $_POST["email"];
          $password = $_POST["password"];

          $sql = "SELECT  email, password FROM tattoo.user";
          $result = $conn->query($sql);

          $find = 0;
          if ($result->num_rows > 0)
           {
              while($row = $result->fetch_assoc()) 
              {
                if(!strcmp($email, $row["email"]) && !strcmp($password, $row["password"]))
                {
                   echo "<p style=\"text-align: center\">Welcome</p>";
                   $find = 1;
                   $exist_file = fopen("log.dat", "w");
                   $log = $email;
                   fputs($exist_file, $log);
                   fclose($exist_file);
                    
              }
            }
              if(!$find) echo "<p style=\"text-align: center\">Wrong data or user not found</p>";
          } 
          $conn->close();
        ?>  