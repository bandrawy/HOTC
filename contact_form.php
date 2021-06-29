<?php
    
     if ( isset( $_POST['name']) &&  isset( $_POST['email']) &&  isset( $_POST['mobile']) &&  isset( $_POST['message'])) {
        
        $name = $_POST['name'];
		 $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        //DB connection
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hocapital";
        // $servername = "107.180.40.29";
        // $username = "eadesign";
        // $password = "B0lt_D3v";
        // $dbname = "eaDesign";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      
          $sql = "INSERT INTO interestedUser (`name`,`mobile`, `email`, `Date`, `message` ) VALUES ('$name', '$mobile','$email', '$date', '$message')";

            if ($conn->query($sql) === TRUE) {
              header("http://localhost/EstateAgency/contact.html");
			  echo "Your message has been sent. Thank you.";
              // header("Location: http://www.eadhouse.com/contact/index.html");
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }
    else{
        echo "Error: one or more form values are not properly sent.";
    }
   
?>