<?php      
    include('connection.php');  
    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
      
        //to prevent from mysqli injection 
        $fname = stripcslashes($fname);
        $lname = stripcslashes($lname);
        $mobileno = stripcslashes($mobileno);
        $email = stripcslashes($email);
        $password = stripcslashes($password); 
        $cpassword = stripcslashes($cpassword);  
        $fname = mysqli_real_escape_string($con, $fname);
        $lname = mysqli_real_escape_string($con, $lname);
        $mobileno = mysqli_real_escape_string($con, $mobileno);
        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);  
        $cpassword = mysqli_real_escape_string($con, $cpassword);  
      
        $sql = "insert into user (First_Name,Last_Name,Password,Contact_Number,Email) values('$fname','$lname','$password','$mobileno','$email')";  
        $result = mysqli_query($con, $sql);  
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        //$count = mysqli_num_rows($result);  
          
        if($result){  
            //echo "<h1><center> Login successful </center></h1>"; 
            header("Location:index.php"); 
        }  
        else{  
            echo "<h1> Register failed. </h1>";  
        }     
?>  