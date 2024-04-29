<?php
    $badWords = ['bad', 'words', 'here'];
    $text = $_GET['text'];
    $censoredText = str_replace($badWords, '***', $text);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censor</title>
</head>
<body>
    <p><? echo $censoredText ?></p>
</body>
</html>