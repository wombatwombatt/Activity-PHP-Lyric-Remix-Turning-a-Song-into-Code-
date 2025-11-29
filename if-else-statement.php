<!--Bermas, Estella Mae E.
    CYB-201
    November 29, 2025
-->
<?php
    $title = "Always Forever";
    $artist = "Cults";
    $versesCount = 2;
    $name = "Estella Mae E. Bermas";
    $block = "CYB-201";
    $month = "November";
    $day = 29;
    $year = 2025;
    $date = $month . " " . $day . ", " . $year;

    // IF...ELSE STATEMENT: Check verse count
    if ($versesCount > 1) {
        $songType = "Multi-verse song";
    } else {
        $songType = "Single verse";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF...ELSE Statement - Verse Count</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="for-loop-match.php">FOR Loop + MATCH</a></li>
        <li><a href="while-loop-match.php">WHILE Loop + MATCH</a></li>
        <li><a href="do-while-loop-match.php">DO...WHILE Loop + MATCH</a></li>
        <li><a href="if-statement.php">IF Statement</a></li>
        <li><a href="if-else-statement.php" class="active">IF...ELSE Statement</a></li>
        <li><a href="if-elseif-else-statement.php">IF...ELSEIF...ELSE Statement</a></li>
    </ul>
</nav>

<div id="song-title">
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $artist; ?></h2>
</div>

<div class="lyrics-section">
    <h3>IF...ELSE Statement Demonstration</h3>
    <p>This page demonstrates an IF...ELSE statement that checks whether the song has multiple verses or a single verse.</p>
</div>

<div class="lyrics-section">
    <h3>Result</h3>
    <p><strong>Number of Verses:</strong> <?php echo $versesCount; ?></p>
    <p><strong>Song Type:</strong> <?php echo $songType; ?></p>
</div>

<div class="footer">
    <p><?php echo $name ?></p>
    <p><?php echo $block ?></p>
    <p><?php echo $date ?></p>
</div>

</body>
</html>
