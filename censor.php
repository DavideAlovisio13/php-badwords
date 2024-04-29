<?php
    $badWords = ['maledetto', 'cazzo', 'porco', 'stronzo', 'cattivo'];
    $text = $_GET['text'];
    $UpperCaseFirst = ucfirst($text);
    $censoredText = str_replace($badWords, '***', $UpperCaseFirst);
    $stringLenght = strlen($censoredText); 
    $responseFrank = 'a volte mi sento un povero poliziotto, in un modo di stronzi!'
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
    <h1>Ah! Ah! Ah! che parole !?</h1>  
    <div class="container">
        <img src="img/15144211.jpg" alt="frank" id="frank1">
        <div class="text">
            <p><strong>Testo censurato:</strong> "<? echo $censoredText ?>"</p>
            <p><strong>Testo originale:</strong> "<? echo $UpperCaseFirst ?>"</p>
            <p><strong>Lunghezza:</strong> "<? echo $stringLenght ?>"</p>
        </div>
    </div>

    <div class="container">
        <img src="img/the-naked-gun-from-the-files-of-police-squad-feature.webp" alt="frank-smile" id="frank2">
        <div class="text">
            <p><strong>Frank:</strong>"<? echo $responseFrank ?>"</p>
        </div>
    </div>
</body>
</html>