<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Łączenie kodu HTML z kodem PHP | PHP</title>
    <style>
        :root
        {
            --text-color: 68, 68, 68;
        }

        *
        {
            font-family: Lato, sans-serif;
            color: rgb(var(--text-color));
            line-height: 1.4;
        }

        body
        {
            margin: 1rem;
            padding: 0;
        }
    </style>
</head>
<body>
        <h1>Data i Godzina</h1>
        <p>
            <?php
            echo date("l, d F Y H:i");
            ?>
        </p>
        <?php require "index2.php"; ?>
</body>
</html>