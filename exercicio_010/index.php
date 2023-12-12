<?php 

$randomValues = [];
$random_value = 0;

for ($n = 0; $n < 20; $n++){
    while (in_array($random_value, $randomValues)){
        $random_value = rand(1, 100);
    }
    array_push($randomValues, $random_value);
}

sort($randomValues);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 010</title>
</head>
<body>

    <?php foreach($randomValues as $value): ?>
        <p><?= $value ?></p>
    <?php endforeach; ?>
</body>
</html>