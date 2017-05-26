 <?php
          $servername = "localhost";
          $username = "admin";
          $password = "password";

          $conn = mysqli_connect($servername, $username, $password);
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          echo "Connected successfully";0

          $email = $_POST["email"];
          $password = $_POST["password"];
          $name=$_POST["name"];
          $surname=$_POST["surname"];

          $sql ="INSERT INTO tattoo.user(name, surname, email, password) VALUES ('$name', '$surname','$email','$password')"; 
          $result = $conn->query($sql);
           if ($result) { 
            echo "<p style=\"text-align: center\">Success</p>"; 
        } 
    else { 
        echo "<p style=\"text-align: center\">Fail</p>"; 
    } 
          $conn->close();
        ?>  