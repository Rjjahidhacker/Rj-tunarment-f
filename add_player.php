<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $match_id = $_POST['match_id'];
    $player_name = $_POST['player_name'];
    $team_name = $_POST['team_name'];
    $slot_number = $_POST['slot_number'];

    $sql = "INSERT INTO players (match_id, player_name, team_name, slot_number)
            VALUES ('$match_id','$player_name','$team_name','$slot_number')";
    
    if($conn->query($sql) === TRUE){
        header("Location: matches.php");
    } else {
        echo "Error: ".$conn->error;
    }
}
?>