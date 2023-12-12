<?php 
$fruits = [
    'Maçã',
    'Laranja',
    'Banana',
    'Pêra',
    'Mamão',
    'Melancia',
    'Melão'
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 004</title>
</head>
<body>

    <ul>
        <?php foreach($fruits as $fruit): ?>
            <li><?= $fruit ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>