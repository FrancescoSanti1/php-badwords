<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova esercizio</title>
</head>
<body>
    <?php
        $myString = "Questo è il paragrafo da stampare";
        $censored = $_GET["word"]; 
        $censoredString = str_replace($censored, '***', $myString);
    ?>
    <p><?php echo $censoredString ?></p>
    <p>Lunghezza del paragrafo: <?php echo strlen($myString) ?></p>
</body>
</html>