
<?php
include('conf.php');

 {
    $id = $_POST['id'];
    $game_name = $_POST['game_name'];
    $description = $_POST['description'];
    $file = $_FILES['photo'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    




    if ($fileerror==0)
    {
    $destfile = 'images/'.$filename;
    move_uploaded_file($filepath,$destfile);
    }
    
    $system_requirements = $_POST['system_requirements'];
    $rating = $_POST['rating'];

    $game_updates = $_POST['game_updates'];
    $download   = $_POST['download'];

    // if (empty($id) || empty($game_name) || empty($description) ||  empty($system_requirements) || empty($rating) ||  empty($game_updates) || empty($download)) {
    //     echo "please fill all the fields";
    //     echo "$id";
    //     echo"$game_name";
    //     echo"$description";
        

    //     echo"$system_requirements";
    //     echo "$rating";
    //     echo "$game_updates";
    //     echo "$download";


    //     exit();
    // } 
    

    
    // else{
        $sql = "INSERT INTO game_details (id,game_name,description,photo,system_requirements,rating,game_updates,download) VALUES ('$id','$game_name','$description','$destfile','$system_requirements','$rating','$game_updates','$download')";
    $res = mysqli_query($conn, $sql);
    // write a code to make sure that all enterries must be taken other wise don't move forward

        // echo var_dump($res);
        // echo "data inserted successfully";


    
    if ($res) {
        echo "data inserted";
        header('location:game_list.php');}
     } 
    

?>