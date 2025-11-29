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

    $repeatChorus = 3;
    $versesCount = 2;
    $sections = $repeatChorus + $versesCount + 1 + 1; // chorus + verses + bridge + outro
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO...WHILE Loop + MATCH - Section Counter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="for-loop-match.php">FOR Loop + MATCH</a></li>
        <li><a href="while-loop-match.php">WHILE Loop + MATCH</a></li>
        <li><a href="do-while-loop-match.php" class="active">DO...WHILE Loop + MATCH</a></li>
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
    <h3>DO...WHILE Loop + MATCH Demonstration</h3>
    <p>This page demonstrates a DO...WHILE loop combined with a MATCH expression to count and categorize all sections of the song.</p>
</div>

<div class="section-list">
    <h3>Section Counter Results</h3>
    <?php
    $sectionCount = 0;
    do {
        $sectionCount++;
        
        $sectionType = match(true) {
            $sectionCount <= 2 => "Verse section",
            $sectionCount <= 5 => "Chorus section",
            $sectionCount == 6 => "Bridge section",
            default => "Outro section"
        };
        
        $icon = match($sectionType) {
            "Verse section" => "[V]",
            "Chorus section" => "[C]",
            "Bridge section" => "[B]",
            "Outro section" => "[O]",
            default => "[*]"
        };
        
        echo "<p>$icon Part $sectionCount: $sectionType</p>";
        
    } while ($sectionCount < $sections);
    ?>
</div>

<div class="lyrics-section">
    <h3>Song Structure Summary</h3>
    <p><strong>Total Sections:</strong> <?php echo $sections; ?></p>
    <p><strong>Verse Count:</strong> <?php echo $versesCount; ?></p>
    <p><strong>Chorus Repetitions:</strong> <?php echo $repeatChorus; ?></p>
    <p><strong>Bridge:</strong> 1</p>
    <p><strong>Outro:</strong> 1</p>
    <p><em>The DO...WHILE loop executes at least once and continues until all sections are counted.</em></p>
</div>

<div class="footer">
    <p><?php echo $name ?></p>
    <p><?php echo $block ?></p>
    <p><?php echo $date ?></p>
</div>

</body>
</html>
