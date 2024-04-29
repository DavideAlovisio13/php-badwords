<?php
 $textExample = '...E quel maledetto stronzo di Frank Drebin.... Cazzo, vorrei proprio capire fino a che punto può essere così cattivo !';
 $textExample2 = 'Guarda chi è qui, il detective con la faccia da stronzo. Non hai mai avuto una possibilità contro di noi maledetto porco...';
 $textExample3 = 'Hai mai pensato di cambiare mestiere, brutto stronzo? Forse fare il giardiniere sarebbe più adatto alla tua intelligenza .'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <div class="title">
        <h1>BadWords</h1>
    </div>
    <div class="form">
        <form action="censor.php" method="GET">
            <input type="text" name="text">
            <input type="submit">
        </form>
    </div>
    <div>
        <h2>Esempi da poter utilizzare:</h2>
        <ul>
            <li><?php echo $textExample ?></li>
            <li><?php echo $textExample2 ?></li>
            <li><?php echo $textExample3 ?></li>
        </ul>
    </div>

</body>
</html>