<?php 

$nomes = [
    'João',
    'Maria',
    'José'    
];

$apelidos = [
    'Silva',
    'Teixeira',
    'Oliveira'    
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 006</title>
</head>
<body>
    <ul>
        <?php for($c = 0; $c < count($nomes); $c++): ?>
            <li><?= $nomes[$c] . ' ' . $apelidos[$c] ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>