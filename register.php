<?php

if(isset($_POST['signin'])){ 
            
            $username = $_POST['Username'];
            $password = $_POST['Password'];
            
       
         $dbc=mysqli_connect("localhost","root","");
            mysqli_select_db($dbc, "eventmanagement");
            
               
                    
                $result=mysqli_query($dbc, "Select * from user where username = '$username'");
                while($row=mysqli_fetch_array($result))
                {
                 $getusername= $row['username'];
                 $getpassword=$row['password'];
                }
                      if ($username==$getusername  && $password==$getpassword ){
                        echo"Login Successfully.";
                        header('Location:homepage.php' );
          
                        session_start();
                        $_SESSION['identifier']=$_POST['username'];   
                       
                 }
                 else
                 {
                     echo"loginfail";
                 }
                
}  
if(isset($_POST["register"])){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "eventmanagement";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                         die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    else{
                   
                   $username = $_POST['Username'];
                   $name = $_POST['name'];
                   $email_address = $_POST['Email_address'];
                   $password = $_POST['Password'];
                   $confirm=$_POST['Confirm_Password'];
                   
                    if ($confirm==$password){
                        echo"Successfully.";
                        header('Location:register.php' );
                    }
                    
                $sql = "INSERT INTO user (username, name, email_address, password)
                VALUES ('$username', '$name', '$email_address','$password' )";

                                if (mysqli_query($conn, $sql)) {
                                    echo "<script> alert('Event Booked!');window.location.replace('register.php'); </script>";
                                }
                                else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            }
                            mysqli_close($conn);
                           
                    }
                            
                
                           
           ?>


<!DOCTYPE html>
<html>
<head>
        <title>Main Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
              crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head> 
<style>
    .menu-bar
        {
            background-image: linear-gradient(-90deg,#9eb4ca ,#f6f8fa);
         
        }
    .hero{
        height: 100%;
        width: 100%;
        background-position: center;
        background-size: cover;
        position: absolute;
    }
    .form-box{
        width: 380px;
        height: 510px;
        position: relative;
        margin: 3% auto;
        background: #9DC5C3;
        padding:5px;
        overflow: hidden;
        
    }
    
    .button-box{
        width: 220px;
        margin: 35px auto;
        position:relative;
        box-shadow: 0 0 20px 9px white;
        border-radius: 30px;
    }
    
    .toggle-btn
    {
        padding: 8px 28px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
        
    }
    
    #btn{
        top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        border-radius: 30px;
        transition: .5s;
        background: linear-gradient(to right, rgb(192,192,192), rgb(200,200,200));
        
    }
    
    .input-group{
        top: 123px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }
    .input-field{
        width: 100%;
        padding: 9px 0;
        margin: -2px 0;
        border-left: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        background: transparent;
    }
    .submit-btn {
        width: 85%;
        padding: 8px 28px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right, rgb(192,192,192), rgb(200,200,200));
        border: 0;
        outline: none;
        border-radius: 10px;
        
        
    }
    .btn{
         width: 85%;
        padding: 8px 28px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right, rgb(192,192,192), rgb(200,200,200));
        border: 0;
        outline: none;
        border-radius: 10px;
    }
    
    .check-box{
        margin: 7px 6px 12px 0;
    }
    .span{
        color: #777;
        font-size: 12px;
        bottom: 68px;
        position: absolute;
    }
    #login{
        left: 50px;
    }
    
    #register{
        left: 450px;
    }
</style>
<body>    
    
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                 <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form action="#" method="post" id="login"class="input-group">
          
                <input type="text" class="input-field" name="Username" placeholder="User Name" required>
                <input type="password" class="input-field" name="Password" placeholder="Password" required>
                <input type="checkbox" class="check-box"> <span> Remember Password</span>
                <input type="submit" class="btn" name="signin" value="Log In">
               
               
            </form>
            <form action="#" method="post" id="register" class="input-group"> 
                <input type="text" class="input-field" name="Username" placeholder="User Name" required>
                <input type="text" class="input-field" name="name" placeholder="Name" required>
                <input type="email" class="input-field" name="Email_address" placeholder="Email Address" required>
                <input type="password" class="input-field" name="Password" placeholder="Password" required>
                <input type="password" class="input-field" name="Confirm_Password" placeholder="Confirm Password" required>
                <input type="checkbox" class="check-box"> <span>I accept the <a href="#">Term of Use</a> & <a href="">Private Policy</a></span>
                <input type="submit" class="submit-btn" name="register"value="Register">
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
        crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
        crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
     <script>
             var x = document.getElementById("login");
             var y = document.getElementById("register"); 
             var z = document.getElementById("btn");
            
            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
            </script>
</body>
</html>
