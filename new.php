<?php

include('conf.php');
 
if (isset($_GET['uid']))
 {
    


    $result = $_GET['uid'];

$sqli = "SELECT * FROM game_details  where game_name = '$result'";


$res1=mysqli_query($conn, $sqli);

$result1=mysqli_fetch_assoc($res1);


 }
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>