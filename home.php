
<?php
session_start();
//echo"<script>alert('welcome')</script>";
if($_POST["t1"]=="madan"&&$_POST["t2"]=="madan")
{
     $_SESSION['user']="pavanchikka";
    $con = mysqli_connect("localhost","root","","Petshop_management");
if(!$con)
{ 
die("could not connect database");
}
  
else
{
    echo"<script>location.href='index1.php'</script>";
}
}

else
{
     echo"<script>alert('invaild username or password')</script>";
    echo"<script>location.href='login.php'</script>";
}

?>

