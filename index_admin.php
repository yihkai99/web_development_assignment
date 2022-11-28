<?php
session_start();
$conn = mysqli_connect("localhost",'root','',"db_event");


        
       
            

?>


<!DOCTYPE html>

<html>
    <head>
        <title>Index_Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        body{
            text-align: center;
        }
        
        .field{
            margin-bottom: 200px;
        }
    </style>
    <body>
        <h2>Please Login</h2>
        <div>
            <form action="index_admin.php"method="post">
                <input type="text" name="username" placeholder="Username" required=""></br>
                <input type="password" name="password" placeholder="Password" required=""></br>
                <input type="submit" class="field" name="login" value="login"></br>
            </form> 
        </div>
        <?php
         if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            
            $select= mysqli_query($conn,"SELECT * FROM `admin` WHERE username ='$username'AND'$password'");
            $row=mysqli_fetch_array($select);
            
            if(is_array($row)){
                $_SESSION["username"] =$row['username'];
                $_SESSION["password"] =$row['password'];
            }
 else {
                echo '<script type="text/javascript">';
                echo 'alert("Invalid Username or Password")';
                echo 'window.location.href="index_admin.php"';
                echo'</script>';
 }
            }
        if(isset($_SESSION["username"])){
            header('Location:login_admin.php');
        }
            ?>
        
        
    </body>
</html>
