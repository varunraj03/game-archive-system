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
    <title>game detail</title>
    <link rel="stylesheet" type="text/css" href="styles2.css" />

</head>

<body>
    <div class="heads">
        <div class="upper">
            <h1 class="home" id="head1">HYDRA GAMING</h1>
           
        </div>
    

        <nav class="navbar">
            <ul>
                
                <li><a href="svm_signup.html">SignIn</a></li>
                <li><a href="svmlogin.html">Login</a></li>
                <li><a href="svmhome.html" target="">Home</a></li>
                <!-- <div class="search">
                <input type="text" name="search" id="search" placeholder="Search ">
            </div> -->
            </ul>
        </nav>
      </div>
    
        <div class="rightone">
        
            <div class="game1">
                <div class="combo"><div class="ids">#<?php
                    echo $result1['id'];
                      ?></div>
                <div class="titles"><?php
                   if(isset($result1['game_name'])){
                    echo $result1['game_name'];
                   }
                   
                    ?></div>
                    <br>
                    
                    
                 
                </div>
                <div class="titles">
                      <br>
                    <img  src="
                    <?php echo $result1['photo'];

                    ?>
                    "height="300" width = "300" >
                  
                  </div>
                    
                <br>
                <div class="headings">GAME UPDATES</div>
                <div class="gamedes">
                    <?php
                    echo $result1['game_updates'];
                    ?>
                </div>
                <div class="headings">SYSTEM REQUIREMENTS:</div>
                <div class ="gamedes"><?php
                   if(isset($result1['system_requirements'])){
                    echo $result1['system_requirements'];
                   }
                   
                    ?> </div>
                <div class="gamereqs">
                <?php
                if(isset($result1["system_req"])){
                         echo $result1['system_requirements'];}
                  ?>
                </div>
                <div class="headings">GAME DESCRIPTION:</div>
                <div class="gamedes"><?php
                    echo $result1['description'];
                      ?>
                </div>
                
                <!-- <div class="headings">PC FEATURES</div>
                <div class="gamedes">High Fidelity Graphics
                    Striking visuals enhanced on PC. Enjoy true 4K resolution, on supported devices, [MU1] with unlocked
                    framerates for peak performance. Dial in your settings via a wide range of graphical presets and
                    options including higher resolution shadows, improved screen space reflections, the addition of GTAO
                    and SSDO, and much more.

                    NVIDIA® DLSS and Reflex Support
                    Quality meets performance. Harness the AI power of NVIDIA Deep Learning Super Sampling (DLSS) to
                    boost frame rates and generate beautiful, sharp images on select Nvidia GPUs. Utilize NVIDIA Reflex
                    low latency technology allowing you to react quicker and hit harder combos with the responsive
                    gameplay you crave on GeForce GPUs.

                    Controls Customization
                    Play your way. With support for the DUALSHOCK®4 and DUALSENSE® wireless controllers, a wide range of
                    other gamepads, and fully customizable bindings for mouse and keyboard, you have the power to
                    fine-tune every action to match your playstyle.

                    Ultra-wide Support
                    Immerse yourself like never before. Journey through the Norse realms taking in breathtaking vistas
                    in panoramic widescreen. With 21:9 ultra-widescreen support, God of War™ presents a cinema quality
                    experience that further expands the original seamless theatrical vision.
                </div> -->
                <div class="headings">INSTALLATION STEPS</div>
                <div class="installation">
                    <p> 1- Run the installer as administrator</p>
                    <p>2- Click on the page
                    <p>3- Press the up arrow on your keyboard
                    <p>4- Click Install
                    <p> 5- Click Continue
                    <p> 6- Select installation destination
                    <p> 7- Click Next
                    <p> 8- Select a component
                    <p>9- Install
                </div>
                <div class="headings">DOWNLOAD HERE</div>
                <div class="buttons">
                <button class="btn"> <a href="https://pastefg.hermietkreeft.site/?a7e7b5791a5cba68#8UYRTVTt5JMHryLfuKiRoTBJZtvizn8ShrojdpUuKrRU" target="_blank">Download</a></button>
                </div>
                
                <div class="headings">RATING</div>
                <div class="gamereqs"><?php
                echo $result1['rating'];
                ?></div>
               

            </div>

        </div>

    </div>







    </div>
    </div>
    <div class="lowerupper">

        <div class="new1">
            <h3>Developers
            </h3>
            <ul>
                <li>JIYA</li>
                <li>KHYATI</li>
                <li>MANAS</li>
                <li>KARAMVEER</li>
                <li>HARSHIT</li>
            </ul>
        </div>
        <div class="new2">
            <h3>About
            </h3>
            <ul>
                <li>HYDRA games was developed in the year 2022 in order to store games for enthusiastic gamers</li>
                <li>developed by young fellow gamers in order to help the gaming community thrive in the college</li>
                <li>now one of the biggest esports franchise in the entire world</li>
            </ul>
        </div>


        <div class="new3">
            <h3>Contact Us
            </h3>
            <ul>
                <li>swissaklo@gmail.com</li>
                <li>panichor@gmail.com</li>
                <li>waterboy@gmail.com</li>
            </ul>
        </div>



    </div>
    <div class="foots">

        <p>Presented by svmcorp©.</p>
    </div>

</body>

</html>