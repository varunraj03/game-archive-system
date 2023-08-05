<?php

include('conf.php');
 $Username=$_POST['Username']; 
 $password=$_POST['password'];
$sql="select *from admin_login where Username='$Username' and password='$password' "; 
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['Username']=$result['Username'];

// $sql1="SELECT name FROM form WHERE name='$Username'";
// $re=mysqli_query($conn, $sql1);
// $result2= mysqli_fetch_assoc($re);

echo"connection established";
header('location:game_entry1.html?uid=' . $result['Username'].'');
// header('location:profile.php');
} else {
header('location:admin_login.html');
echo"wrong password";
 }




?>