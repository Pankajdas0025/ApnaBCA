<?php
$dbcon=new mysqli("sql302.infinityfree.com","if0_38893985","rTZZvt4fKyXgLF","if0_38893985_bca_user");
// $dbcon=new mysqli("localhost","root","","test");
if($dbcon->connect_error)
{
    echo " Not connect succesfully ! ";

}
else
{

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Fullname=$_POST['Fullname'];
        $Email=$_POST['Email'];
       // $Password=md5($_POST['Password']);    when we want to send data encrypted from 
        $Password=$_POST['Password'];
        
        $check="SELECT EMAIL FROM bca_user  WHERE EMAIL='$Email'";
        $response_email=$dbcon->query($check);

        
    if($response_email->num_rows!=0)
        {
            echo "Already registred !";
            return;
        }

        else
    {
        $sql_query= "INSERT INTO bca_user
        values
        ('$Fullname','$Email','$Password')";


        if($dbcon->query($sql_query))
        {
         echo "Register successful";
    
            // $subject = "Register Successful";
            // $message = "
            // <html>
            // <head>
            //   <title>Successful</title>
            // </head>
            // <body>
            //   <div style='padding:15px; background-color:#d4edda; color:#155724; border:1px solid #c3e6cb; border-radius:5px; font-family:Arial, sans-serif;'>
            //      <h1>Welcome to Apna BCA</h1>
            //              $Fullname
            //     <br><br>✅Your registration was successful! 
            //     <br>
            //     <br>
            //      Start exploring now!
            //      <br>
            //      <br>
            //      <h1>Your Password: <h1> $Password
            //      <br>
            //     <a href='https://apnabca.infinityfreeapp.com/' style='color:#0d6efd; text-decoration:none;'>Login Now</a>
            //   </div>
            // </body>
            // </html>
            // ";
            
            // Set headers for HTML email
            // $headers = "MIME-Version: 1.0" . "\r\n";
            // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // // Additional headers (optional)
            // $headers .= "From:ApnaBCA Support <noreply@yourdomain.com>" . "\r\n";
            
            // // Send email
            // if (mail($Email, $subject, $message, $headers))
            // {
            //     echo "Register successful";
            // } 
        }
        
          
        }
    }

    }

  


?>
