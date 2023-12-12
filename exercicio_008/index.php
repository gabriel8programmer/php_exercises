
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 008</title>
</head>
<body>

    <?php for($tab = 2; $tab <= 6; $tab++): ?>
        <?php for($n = 1; $n <= 10; $n++): ?>
            <p><?= "$tab x $n =" . $tab*$n ?></p>
        <?php endfor; ?>
        <?= $tab != 6? '<hr>': ''; ?>
    <?php endfor; ?>

</body>
</html>