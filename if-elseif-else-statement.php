<!--Bermas, Estella Mae E.
    CYB-201
    November 29, 2025
-->
<?php
    $title = "Always Forever";
    $artist = "Cults";
    $songDuration = "4.5";
    $name = "Estella Mae E. Bermas";
    $block = "CYB-201";
    $month = "November";
    $day = 29;
    $year = 2025;
    $date = $month . " " . $day . ", " . $year;

    // IF...ELSEIF...ELSE STATEMENT: Categorize duration
    if ($songDuration < 3) {
        $durationCategory = "Short song";
    } elseif ($songDuration <= 5) {
        $durationCategory = "Standard length";
    } else {
        $durationCategory = "Extended track";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF...ELSEIF...ELSE Statement - Duration Category</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="for-loop-match.php">FOR Loop + MATCH</a></li>
        <li><a href="while-loop-match.php">WHILE Loop + MATCH</a></li>
        <li><a href="do-while-loop-match.php">DO...WHILE Loop + MATCH</a></li>
        <li><a href="if-statement.php">IF Statement</a></li>
        <li><a href="if-else-statement.php">IF...ELSE Statement</a></li>
        <li><a href="if-elseif-else-statement.php" class="active">IF...ELSEIF...ELSE Statement</a></li>
    </ul>
</nav>

<div id="song-title">
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $artist; ?></h2>
</div>

<div class="lyrics-section">
    <h3>IF...ELSEIF...ELSE Statement Demonstration</h3>
    <p>This page demonstrates an IF...ELSEIF...ELSE statement that categorizes the song based on its duration.</p>
</div>

<div class="lyrics-section">
    <h3>Result</h3>
    <p><strong>Song Duration:</strong> <?php echo $songDuration; ?> minutes</p>
    <p><strong>Duration Category:</strong> <?php echo $durationCategory; ?></p>
    <p><em>Categories: Less than 3 min = Short song, 3-5 min = Standard length, Over 5 min = Extended track</em></p>
</div>

<div class="footer">
    <p><?php echo $name ?></p>
    <p><?php echo $block ?></p>
    <p><?php echo $date ?></p>
</div>

</body>
</html>
