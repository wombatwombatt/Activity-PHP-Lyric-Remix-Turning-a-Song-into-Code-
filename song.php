<?php
    $title = "Always Forever";           
    $artist = "Cults";                  
    $mood = "romantic";                 
    $name = "Estella Mae E. Bermas";    
    $block = "CYB-201";                 
    $month = "November";                // string variable
    $day = 20;                         // integer variable
    $year = 2025;                      // integer variable

    $date = $month . " " . $day . ", " . $year;  // type juggling 1: concatenated date (string + int to string)

    // numeric variables for calculations
    $repeatChorus = 3;                  // how many times chorus repeats
    $versesCount = 2;                   // number of verses in song    
    // array of nouns for lyrics
    $nouns = ["pocket", "locket", "you", "me", "eye", "darling", "things", "us", 
             "apart", "forever", "together", "around", "here"];
    
    // array of verbs for lyrics
    $verbs = ["know", "got", "have", "wait", "keep", "come", "settle", "stay", 
            "say", "get", "could", "heard", "think", "be"];
    
    // array of adjectives for lyrics
    $adjectives = ["always", "alone", "better", "wandering", "alarming", "just", 
                  "never", "severed", "down", "oh"];    // song sections using arrays
    // verse 1 array
    $verse1 = ["<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
               "<p>We $verbs[10] $verbs[7] $adjectives[1] $nouns[10]</p>",
               "<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
               "<p>$verbs[8] $nouns[2]'ll $verbs[7], $adjectives[6] $verbs[13] $adjectives[7]</p>"
              ];
                    
    // chorus array
    $chorus = ["<p>$nouns[2] $verbs[0] $nouns[2]'ve $verbs[1] $nouns[2] in your $nouns[0]</p>",
               "<p>$nouns[2] don't $adjectives[5] $verbs[2] to $verbs[3] $nouns[11]</p>",
               "<p>$nouns[2] $verbs[0] I $verbs[4] $nouns[2] in my $nouns[1]</p>",
               "<p>$adjectives[5] $verbs[5] $nouns[12] and we can $verbs[6] $adjectives[8]</p>"
              ];
              
    // verse 2 array
    $verse2 = ["<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
               "<p>We $verbs[10] $verbs[7] $adjectives[1] $nouns[10]</p>",
               "<p>$verbs[11] $nouns[2] $verbs[8] $nouns[6] $verbs[10] $verbs[13] $adjectives[2]</p>",
               "<p>$nouns[5], don't $verbs[9] a $adjectives[3] $nouns[4]</p>"
              ];
    
    // bridge array
    $bridge = ["<p>$adjectives[9], $nouns[5], it's $adjectives[4]</p>",
               "<p>To $verbs[12] of $nouns[7] $nouns[8]</p>"
              ];
              
    // outro array
    $outro = ["<p>$nouns[2] and $nouns[3], $adjectives[0] $nouns[9]</p>",
              "<p>We $verbs[10] $verbs[7] $adjectives[1] $nouns[10]</p>"
             ];    // operators examples with calculations
    
    // concatenation operator example
    $chorusCount = "\nThe chorus repeats " . $repeatChorus . " times.";

    // multiplication operator with type juggling example 2
    $songDuration = "4.5";  // string representing minutes
    $playbackSpeed = 2;     // integer
    // type juggling 2: string "4.5" automatically converted to float 4.5
    $fastDuration = $songDuration * $playbackSpeed;  // "4.5" * 2 becomes 4.5 * 2 = 9.0

    // addition operator for calculating sections
    $sections = $repeatChorus + $versesCount + 1 + 1; // chorus + verses + bridge + outro

    // array for song information
    $songInfo = [
        "title" => $title,
        "artist" => $artist,
        "mood" => $mood
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Lyric Remix</title>    
    <style>        
    body {
            font-family: Arial, sans-serif;
            background-image: url('https://cdn.wallpapersafari.com/49/97/u2IblU.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            text-align: center;
            min-height: 100vh;
        }        h1, h2, h3 {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            margin: 10px auto;
            max-width: 800px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .lyrics-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            margin: 10px auto;
            max-width: 800px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
            background-color: transparent;
            padding: 0;
            border-radius: 0;
            box-shadow: none;
        }
        h1 {
            font-size: 28px;
            font-weight: bold;
        }
        h2 {
            font-size: 22px;
        }        h3 {
            font-size: 20px;
            margin-top: 20px;
        }
        .footer {
            background-color: #1e3a8a;
            color: white;
            padding: 20px;
            margin: 20px auto 0;
            max-width: 800px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .footer p {
            background-color: transparent;
            color: white;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<!-- displays the song's title, artist, and mood -->
<h1><?php echo $title; ?></h1>
<h2><?php echo $artist; ?></h2>
<p>Mood: <?php echo $mood; ?></p>

<div class="lyrics-section">
<?php // displays verse 1 ?>
<h3>Verse 1</h3>
<?php foreach($verse1 as $line) { echo $line; } ?>

<?php // displays chorus ?>
<h3>Chorus</h3>
<?php foreach($chorus as $line) { echo $line; } ?>

<?php // displays verse 2 ?>
<h3>Verse 2</h3>
<?php foreach($verse2 as $line) { echo $line; } ?>

<?php // displays chorus ?>
<h3>Chorus</h3>
<?php foreach($chorus as $line) { echo $line; } ?>

<?php // displays bridge ?>
<h3>Bridge</h3>
<?php foreach($bridge as $line) { echo $line; } ?>

<?php // displays chorus ?>
<h3>Chorus</h3>
<?php foreach($chorus as $line) { echo $line; } ?>

<h3>Outro</h3>
<?php 
// foreach loop to repeat outro lines 4 times
for($i = 0; $i < 4; $i++) {
    foreach($outro as $line) { 
        echo $line; 
    } 
}
?>
</div>

<!-- displays chorus count -->
<p><?php echo $chorusCount; ?></p>

<!-- displays total sections in song -->
<p>Total sections in song: <?php echo $sections ?></p>

<!-- displays song duration at 2x speed -->
<p>Song duration at 2x speed: <?php echo $fastDuration ?> minutes</p>

<!-- displays footer containing my name, block, and date -->
<div class="footer">
<p><?php echo $name ?></p>
<p><?php echo $block ?></p>
<p><?php echo $date ?></p>
</div>

</body>
</html>
