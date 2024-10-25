<?php

$liste = [
    ["nom" => "durant", "prenom" => "loic", "age" => "29", "metier" => "webmaster", "site" => "openclassroom", "lien" => "https://www.openclassrooms.com/", ],
    ["nom" => "dupont", "prenom" => "michel", "age" => "55", "metier" => "intégrateur", "site" => "alsacreations", "lien" => "https://www.alsacreations.com/.", ], 
    ["nom" => "martin", "prenom" => "yannick", "age" => "25", "metier" => "développeur", "site" => "creative juiz", "lien" => "https://www.creativejuiz.fr/", ]
];

echo '<pre>';
print_r($liste);
echo '</pre>';



?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproduction</title>

    <style>
        
    </style>

</head>

<body>

    <?php

    $lgTabListe = count($liste);

    echo '<table border="1" width="100%"><tr><th>Nom</th><th>Prenom</th><th>Age</th><th>Metier</th><th>Site Web</th>';

    foreach ($liste as $personne) {
        echo "<tr>";
        echo "<td>{$personne['nom']}</td>";
        echo "<td>{$personne['prenom']}</td>";
        echo "<td>{$personne['age']}</td>";
        echo "<td>{$personne['metier']}</td>";
        echo "<td><a href=\"{$personne['lien']}\" target=\"_blank\">{$personne['site']}</a></td>";
        echo "</tr>";
    }

    ?>

</body>

</html>