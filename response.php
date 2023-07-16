<?php
$censored_word = $_GET[trim('censored-word')];
$paragraph = $_GET[trim('paragraph')];
$censored_paragraph = str_replace(strtolower($censored_word), '***', strtolower($paragraph));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?= $paragraph, ' ',
        strlen($paragraph) ?>
    </p>

    <p>
        <?= $censored_paragraph, ' ',
        strlen($censored_paragraph) ?>
    </p>
</body>

</html>