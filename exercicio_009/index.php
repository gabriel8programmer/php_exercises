<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 009</title>
</head>
<body>
    
    <?php for($n = 0; $n < 20; $n++): ?>
        <?php $randomNumber = rand(1, 100); ?>
        <p><?= "$randomNumber x 3 = " . $randomNumber*3 ?></p>
    <?php endfor; ?>
</body>
</html>