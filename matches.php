<?php
include 'db.php';

// Fetch all matches
$result = $conn->query("SELECT * FROM matches ORDER BY match_date DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Matches - RJ E-SPORTS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>All Matches</h2>

<?php while($match = $result->fetch_assoc()){ ?>
<div class="card">
    <h3><?php echo $match['match_name']; ?> (<?php echo $match['match_date']; ?>)</h3>
    <a href="show_player.php?match_id=<?php echo $match['id']; ?>">Show Players</a>
<h4>Add Player</h4>
    <form action="add_player.php" method="POST">
        <input type="hidden" name="match_id" value="<?php echo $match['id']; ?>">
        <input type="text" name="player_name" placeholder="Player Name" required>
        <input type="text" name="team_name" placeholder="Team Name" required>
        <input type="number" name="slot_number" placeholder="Slot Number" required>
        <button type="submit">Add Player</button>
    </form>
</div>
<?php } ?>
</body>
</html>