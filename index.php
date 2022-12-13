<?php 
$text = "PHP è un linguaggio di scripting general-purpose open source molto utilizzato, specialmente indicato per lo sviluppo web perchè può essere facilmente integrato nell'HTML. Nasce nel 1994 come progetto personale (originalmente l’acronimo era Personal Home Page), poi è
stato adottato da una ampia community che lo ha migliorato (e trasformato) fino alla recentissima
versione PHP 8, rilasciata appena il 26 novembre 2020.";
$word = $_GET['word'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h3>Paragrafo:</h3>
    <span><?php echo $text?></span>

    <h3>Lunghezza paragrafo:</h3>
    <span><?php echo strlen($text)?> parole</span>

    <h3>Paragrafo con parola censurata:</h3>
    <form method="get">
        <input type="text" name="word" placeholder="Parola da censurare">
    </form>
    <span><?php echo str_replace($word,"***", $text) ?></span>
</body>
</html>