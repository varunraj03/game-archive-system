<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME LIST</title>
    <!-- <link rel="stylesheet" href="svmgamelist.css"> -->
    <style>
        body{
    background-image: url('image15.jpg');  
    /* background-color: #000000; */
    color: #FFFFFF;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    margin-left: 30.75%;;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    }
    
    .box2{
        
        
        border-radius: 10px;
        margin-top: 5%;
        background-color:#000000;
        padding: 20px;
        opacity: 0.8;
        display: inline-block;
        padding:15px;
        font-style:bold;
        font-size: 20px;
        margin-left:100px;



    }
  .navbarr{
    padding-left:700px;
    display:flex;
    
  }
    
.first li, .second li, .third li{
    list-style:none;
}
.first, .second, .third{
    margin-right:20px;
}
.navbarr li a{
    padding: 3px 3px;
    text-decoration: none;
    color: black;
}
.navbarr li a:hover{
    color: red
}

.leftmenu{
    /* want hydra gaming to be in box with black background */

    background-color: #000000;
    opacity: 0.8;
    border-radius: 10px;
    padding: 0px;
    margin-top: 3%;
    margin-left: 18%;
    display: inline-block;
    padding:15px;
    font-style:bold;
    font-size: 20px;
    
}
.button1{
      all: unset;
      height: 30px;
      width: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      color: black;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.2s ease;
      margin-bottom: 5px;
      cursor: pointer;
      margin-top: 10px;
      margin-left:5px;
      background:none;
      border:2px solid black;

      
    }
}

    </style>
</head>

<body>

        <div class="menu">

            <div class="leftmenu">
                HYDRA GAMING
                
            </div>
            <ul>
                    <div class="navbarr">
                 <div class="button1">   <div class="first"><li><a href="svmhome.html">HOME</a></li></div></div>
                 <div class="button1">   <div class="second"><li><a href="svm_signup.html">SIGN IN</a></li></div></div>
                 <div class="button1">  <div class="third"><li><a href="svmlogin.html">LOGIN</a></li></div></div>
                </div>
                    

            </ul><br>
            
            
          

             

            
        


            
       
    
    
    <div class="box2">
    <?php include('conf.php');
    $sql = "select game_name,id from game_list ";
    $res = mysqli_query($conn, $sql);
    echo '<table class="deptab"border="1"><tr><th>game id</th><th>game name</th><th>game details</th></tr>';
    while ($result = mysqli_fetch_assoc($res)) {
        echo '<tr><td>' . $result['id'] . '</td><td>' . $result['game_name'] . '</td><td><a href="game_details.php?uid=' . $result['game_name'] . '"><button>View Details</button></a></td></tr>';
    }
    echo '</table>';
    ?>
    </div>
</body>

</html>