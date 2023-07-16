<?php
$censored_word = $_GET[strtolower(trim('censored-word'))];
$paragraph = $_GET[strtolower(trim('paragraph'))];
$censured_paragraph = str_replace($censored_word, '***', $paragraph);
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
        <?= $censured_paragraph, ' ',
        strlen($censured_paragraph) ?>
    </p>
</body>

</html>