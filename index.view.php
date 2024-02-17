
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo1</title>
    <style>
        body{
            display: grid;
            place-items:center;
            height:100vh;
            margin:0;
            font-family:sans-serif;
        }
    </style>
</head>
<body>
    <h1>Recommended Books:</h1>

    <ul>
        <?php foreach($filteredItems as $serie) : ?>
            <li>
                Name: <?= $serie['name']; ?>
            </li>
            <li>   
                Author: <?= $serie['author']; ?>
            </li>
            <li>   
                Buy here: <?= $serie['purchaseLink']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>