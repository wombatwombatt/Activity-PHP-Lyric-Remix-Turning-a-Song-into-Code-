<!--Bermas, Estella Mae E.
    CYB-201
    November 29, 2025
-->
<?php
    $title = "Always Forever";
    $artist = "Cults";
    $name = "Estella Mae E. Bermas";
    $block = "CYB-201";
    $month = "November";
    $day = 29;
    $year = 2025;
    $date = $month . " " . $day . ", " . $year;

    $bpm = 163;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE Loop + MATCH - Tempo Analysis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="for-loop-match.php">FOR Loop + MATCH</a></li>
        <li><a href="while-loop-match.php" class="active">WHILE Loop + MATCH</a></li>
        <li><a href="do-while-loop-match.php">DO...WHILE Loop + MATCH</a></li>
        <li><a href="if-statement.php">IF Statement</a></li>
        <li><a href="if-else-statement.php">IF...ELSE Statement</a></li>
        <li><a href="if-elseif-else-statement.php">IF...ELSEIF...ELSE Statement</a></li>
    </ul>
</nav>

<div id="song-title">
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $artist; ?></h2>
</div>

<div class="lyrics-section">
    <h3>WHILE Loop + MATCH Demonstration</h3>
    <p>This page demonstrates a WHILE loop combined with a MATCH expression to classify the song's tempo based on BPM (Beats Per Minute).</p>
</div>

<div class="tempo-box">
    <h3>Tempo Analysis Result</h3>
    <?php
    $checkBPM = 1;
    
    while ($checkBPM == 1) {
        $tempoClassification = match(true) {
            $bpm <= 60 => "Largo - Very slow",
            $bpm <= 80 => "Adagio - Slow",
            $bpm <= 108 => "Andante - Moderate",
            $bpm <= 120 => "Moderato - Medium",
            $bpm <= 156 => "Allegro - Fast",
            $bpm <= 176 => "Vivace - Very fast",
            $bpm <= 200 => "Presto - Extremely fast",
            default => "Prestissimo - As fast as possible"
        };
        
        echo "<p><strong>Song BPM:</strong> $bpm</p>";
        echo "<p><strong>Tempo Classification:</strong> $tempoClassification</p>";
        
        $checkBPM = 0;
    }
    ?>
</div>

<div class="lyrics-section">
    <h3>Tempo Classifications Reference</h3>
    <p><strong>Largo:</strong> 0-60 BPM (Very slow)</p>
    <p><strong>Adagio:</strong> 61-80 BPM (Slow)</p>
    <p><strong>Andante:</strong> 81-108 BPM (Moderate)</p>
    <p><strong>Moderato:</strong> 109-120 BPM (Medium)</p>
    <p><strong>Allegro:</strong> 121-156 BPM (Fast)</p>
    <p><strong>Vivace:</strong> 157-176 BPM (Very fast)</p>
    <p><strong>Presto:</strong> 177-200 BPM (Extremely fast)</p>
    <p><strong>Prestissimo:</strong> 201+ BPM (As fast as possible)</p>
</div>

<div class="footer">
    <p><?php echo $name ?></p>
    <p><?php echo $block ?></p>
    <p><?php echo $date ?></p>
</div>

</body>
</html>
