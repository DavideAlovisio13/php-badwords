<?php
    $badWords = ['', '', ''];
    $text = $_GET['text'];
    $UpperCaseFirst = ucfirst($text);
    $censoredText = str_replace($badWords, '***', $UpperCaseFirst);
    $stringLenght = strlen($censoredText); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censor</title>
</head>
<body>
    <p>Testo censurato: <? echo $censoredText ?></p>
    <p>Testo originale: <? echo $UpperCaseFirst ?></p>
    <p>Lunghezza: <? echo $stringLenght ?></p>
</body>
</html>