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
        $stringa = "Questo è il paragrafo da stampare" 
    ?>
    <p><?php echo $stringa ?></p>
    <p>Lunghezza del paragrafo: <?php echo strlen($stringa) ?></p>
</body>
</html>