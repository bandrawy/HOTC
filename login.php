<?php   
session_start();   
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hocapital";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
		$_SESSION['nID'] = 1;
			    echo "<script> window.location.assign('admin.php'); </script>";
			exit();
        }  
        else{  
			 $_SESSION["login"] = false;
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  