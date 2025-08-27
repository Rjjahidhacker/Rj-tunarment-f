<?php
include 'db.php';
$match_id = $_GET['match_id'];

$result = $conn->query("SELECT * FROM players WHERE match_id='$match_id' ORDER BY slot_number ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Players - Match</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Players in Match</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Slot</th>
        <th>Player Name</th>
        <th>Team Name</th>
    </tr>
<?php while($row = $result->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $row['slot_number']; ?></td>
        <td><?php echo $row['player_name']; ?></td>
        <td><?php echo $row['team_name']; ?></td>
    </tr>
    <?php } ?>
</table>

<a href="matches.php">Back to Matches</a>
</body>
</html>