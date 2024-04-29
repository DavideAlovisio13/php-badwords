<?php
    $badWords = ['maledetto', 'cazzo', 'porco', 'stronzo', 'cattivo'];
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
    <link rel="stylesheet" href="./css/style_censor.scss">
    <title>censor</title>
</head>
<body>
    <div class="container">
        <img src="img/15144211.jpg" alt="frank">
        <div class="text">
            <p>Testo censurato: <? echo $censoredText ?></p>
            <p>Testo originale: <? echo $UpperCaseFirst ?></p>
            <p>Lunghezza: <? echo $stringLenght ?></p>
        </div>
    </div>
</body>
</html>