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

    // Song data
    $repeatChorus = 3;
    
    // Array of nouns for lyrics
    $nouns = ["pocket", "locket", "you", "me", "eye", "darling", "things", "us",
            "apart", "forever", "together", "around", "here"];
    
    // Array of verbs for lyrics
    $verbs = ["know", "got", "have", "wait", "keep", "come", "settle", "stay",
            "say", "get", "could", "heard", "think", "be"];
    
    // Array of adjectives for lyrics
    $adjectives = ["always", "alone", "better", "wandering", "alarming", "just",
                "never", "severed", "down", "oh"];
    
    // Verse 1 array
    $verse1 = ["<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
            "<p>We $verbs[10] $verbs[7] $adjectives[1] $nouns[10]</p>",
            "<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
            "<p>$verbs[8] $nouns[2]'ll $verbs[7], $adjectives[6] $verbs[13] $adjectives[7]</p>"
            ];
    
    // Chorus array
    $chorus = ["<p>$nouns[2] $verbs[0] $nouns[2]'ve $verbs[1] $nouns[2] in your $nouns[0]</p>",
            "<p>$nouns[2] don't $adjectives[5] $verbs[2] to $verbs[3] $nouns[11]</p>",
            "<p>$nouns[2] $verbs[0] I $verbs[4] $nouns[2] in my $nouns[1]</p>",
            "<p>$adjectives[5] $verbs[5] $nouns[12] and we can $verbs[6] $adjectives[8]</p>"
            ];
    
    // Verse 2 array
    $verse2 = ["<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
            "<p>We $verbs[10] $verbs[7] $adjectives[1] $nouns[10]</p>",
            "<p>$verbs[11] $nouns[2] $verbs[8] $nouns[6] $verbs[10] $verbs[13] $adjectives[2]</p>",
            "<p>$nouns[5], don't $verbs[9] a $adjectives[3] $nouns[4]</p>"
            ];
    
    // Bridge array
    $bridge = ["<p>$adjectives[9], $nouns[5], it's $adjectives[4]</p>",
            "<p>To $verbs[12] of $nouns[7] $nouns[8]</p>"
            ];
    
    // Outro array
    $outro = ["<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
            "<p>We $verbs[10] $verbs[7] $adjectives[1] $nouns[10]</p>"
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR Loop + MATCH - Chorus Repetition</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="for-loop-match.php" class="active">FOR Loop + MATCH</a></li>
        <li><a href="while-loop-match.php">WHILE Loop + MATCH</a></li>
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
    <h3>FOR Loop + MATCH Demonstration</h3>
    <p>This page demonstrates a FOR loop combined with a MATCH expression to display the chorus with different styled variations for each repetition.</p>
</div>

<div class="lyrics-section">
    <h3>Song Lyrics with Styled Chorus Repetitions</h3>
    
    <h3>Verse 1</h3>
    <?php foreach($verse1 as $line) { echo $line; } ?>
    
    <?php
    // FOR LOOP + MATCH: Display chorus with styled variations
    for ($i = 1; $i <= $repeatChorus; $i++) {
        // Match expression for styling each chorus repeat
        $chorusStyle = match($i) {
            1 => "background: linear-gradient(135deg, #ffeef8 0%, #ffe0f0 100%); border-left: 5px solid #ff69b4;",
            2 => "background: linear-gradient(135deg, #e0f0ff 0%, #d0e8ff 100%); border-left: 5px solid #4169e1;",
            3 => "background: linear-gradient(135deg, #fff0e0 0%, #ffe8d0 100%); border-left: 5px solid #ff8c00;",
            default => "background: rgba(255, 255, 255, 0.8);"
        };
        
        $heading = match($i) {
            1 => "Chorus (First Time)",
            2 => "Chorus (Second Time)",
            3 => "Chorus (Final Time)",
            default => "Chorus (Repeat #$i)"
        };
        
        echo "<div class='chorus-repeat' style='$chorusStyle'>";
        echo "<h3>$heading</h3>";
        foreach($chorus as $line) {
            echo $line;
        }
        echo "</div>";
        
        // Display verse 2 after first chorus
        if ($i == 1) {
            echo "<h3>Verse 2</h3>";
            foreach($verse2 as $line) { echo $line; }
        }
        
        // Display bridge after second chorus
        if ($i == 2) {
            echo "<h3>Bridge</h3>";
            foreach($bridge as $line) { echo $line; }
        }
    }
    ?>
    
    <h3>Outro</h3>
    <?php
    // Display outro 4 times
    for($i = 0; $i < 4; $i++) {
        foreach($outro as $line) {
            echo $line;
        }
    }
    ?>
</div>

<div class="lyrics-section">
    <p><strong>Total Chorus Repetitions:</strong> <?php echo $repeatChorus; ?></p>
    <p><em>Each chorus is styled differently using the MATCH expression based on the iteration number.</em></p>
</div>

<div class="footer">
    <p><?php echo $name ?></p>
    <p><?php echo $block ?></p>
    <p><?php echo $date ?></p>
</div>

</body>
</html>
