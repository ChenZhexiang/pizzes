<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FES LA TEVA PIZZA</title>
</head>
<a href="pizza.html">Retorna al formulari de selecció d’ingredients</a>
<body>
    <?php
    $preu = 8;
    $IVA = 21;

    if (empty($_GET['ingr'])) {
        $pvp = ((100 + $IVA) / 100) * $preu;
        echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
#        exit;
    } else {
        $pvp = ((100 + $IVA) / 100) * ($preu + count($_GET['ingr']));
        echo "Has demanat la pizza bàsica amb:<br>";
        
        foreach ($_GET['ingr'] as $ingredient) {
            if (!empty($ingredient)) {
                echo "* " . htmlspecialchars($ingredient) . "<br>";
            }
        }
        
        echo "El preu és $pvp € (IVA inclòs)<br>";
    }
    ?>
    <br>
    <p>Autor: zhch</p>
</body>
</html>
