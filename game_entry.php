

<?php
include('conf.php');

 {
    $id = $_POST['id'];
    $game_name = $_POST['game_name'];
    
    $sql = "INSERT INTO game_list (id,game_name) VALUES ('$id','$game_name')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "data inserted";
        header('location:game_entry.html');
    } else {
        echo "data not inserted";
    }
}
?>
