<?php 
$fruit = [
    
'Maçã',
'Laranja',
'Banana',
'Pêra',
'Mamão',
'Melancia',
'Melão',
'Abacaxi',
'Limão',
'Carambola'

];

sort($fruit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 005</title>
</head>
<body>

    <ul>
        <?php foreach($fruit as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>

    </ul>
</body>
</html>