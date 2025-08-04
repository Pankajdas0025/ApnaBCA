
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

        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        
        $check="SELECT EMAIL,PASSWORD FROM bca_user  WHERE EMAIL='$Email' AND PASSWORD='$Password' ";
        $response_email=$dbcon->query($check);        
     if($response_email->num_rows>=1)
        {
            $data="SELECT * FROM bca_user WHERE EMAIL='$Email'";

            $data_fatch=$dbcon->query($data);
            if($data_fatch->num_rows!=0)
            {
                $row = $data_fatch->fetch_assoc();
                echo $row['FULLNAME'];
            }
        }
    else
    {
        echo "Login Failed !";
    }
    }

    else
    {
            echo "Something Wrong ! ";
    }  
}

?>
