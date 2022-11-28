<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "jackleeleow@gmail.com.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $header = "From:p17008961@gmail.com \r\n";
         
        $mail_sent= mail($to, $subject, $message,$header);
        if($mail_sent==true)
        {
            echo"mail sent";
        }
 else {
     echo"mail failed";
 }
      ?>
      
   </body>
</html>


