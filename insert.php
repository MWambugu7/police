<?php

$con=mysqli_connect ('127.0.0.1','root','');
if (!$con)
{
    echo 'not connected';

}
if(!mysqli_select_db ($con,'reset'))
{
    echo'database not selected';
}
$username =$_POST['username'];
$password =$_POST['password'];


$sql = "INSERT INTO reset(Username, Password) VALUES ('$username','$password')";

if (!mysqli_query($con,$sql))
{
    echo'not inserted';
}
else {
    echo'inserted';
}
header("refresh:2; url=Sign.html");

?>