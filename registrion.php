<?php
 $name=$user=$pass1=$pass2=$email="";
$conn=@mysqli_connect("localhost","root","root","emandi");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["name"];
$user=$_POST["user"];
$pass1=$_POST["pass1"];
 $pass2=$_POST["pass2"];
$email=$_POST["email"];
 if($pass1==$pass2)
 {
 $query="insert into register values('".$name."','".$user."' ,'".$pass1."','".$pass2."','".$email."')";
 $result=@mysqli_query($conn,$query);
 if($result)
 {
 echo '<script type="text/javascript"> alert("USER REGISTERED 
SUCCESFULLY") </script>';
 }
 }
 else
 {
 echo '<script type="text/javascript"> alert("passwords did not match") 
</script>';
 }
 }
 ?>
