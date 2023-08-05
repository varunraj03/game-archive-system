<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP PAGE</title>
    
<style>
body {
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

  
    
    
  }

  .BOX{
    
    
}
.pdetail{
   
}
</style>

</head>
<body>

<div class="BOX">
<?php
include('conf.php');
$name=$_POST['name'];
$age=$_POST['age'];
$phone_num=$_POST['phone_num'];
$Username=$_POST['Username'];
$password=$_POST['password'];

// create assertion so that no value is null

if (empty($name) || empty($age) || empty($phone_num) || empty($Username) || empty($password)) {
    echo "Please fill all the fields";
    exit();
} 

else {
    // check if username already exists
    $sql = "SELECT * FROM admin_login WHERE Username='$Username'";
    $result1 = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result1);
    if ($resultCheck > 0) {
        echo "Username already exists";
        exit();
    } else {
        // insert user into database
        $sql = "INSERT INTO login(name, age, phone_num, Username, password) VALUES ('$name', '$age', '$phone_num', '$Username', '$password')";
        $result1 = mysqli_query($conn, $sql);
        if ($result1) {
            header("Location: svmhome.html");
            exit();
        } else {
            echo "Signup failed";
            exit();
        }
    }
}

$sql="INSERT INTO login(Username,password,name,age,phone_num) VALUES('$Username','$password','$name','$age','$phone_num')";
$res=mysqli_query($conn,$sql);

if($res)
{
    
    header('location:svmlogin.html');
}
else
{
echo"connection not established";
}
?>

</div>

</body>
</html>




























