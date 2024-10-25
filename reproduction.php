<?php

// tableau fourni
$liste = [
    ["nom" => "durant", "prenom" => "loic", "age" => "29", "metier" => "webmaster", "site" => "openclassroom", "lien" => "https://www.openclassrooms.com/", ],
    ["nom" => "dupont", "prenom" => "michel", "age" => "55", "metier" => "intégrateur", "site" => "alsacreations", "lien" => "https://www.alsacreations.com/.", ], 
    ["nom" => "martin", "prenom" => "yannick", "age" => "25", "metier" => "développeur", "site" => "creative juiz", "lien" => "https://www.creativejuiz.fr/", ]
];

// debug
/*
echo '<pre>';
print_r($liste);
echo '</pre>';
*/

?>

<!-- partie HTML -->
<!DOCTYPE html>
<html lang="fr"> <!-- langue : Français -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproduction</title> <!-- titre page -->

    <!-- CSS -->
    <style>

        /* variables */
        :root {
            --bordures : 2px solid black;
        }

        /* modification de la table et de ses cellules */
        table {
            border: var(--bordures);
            width: 50%;
            border-collapse: collapse;
        }

        th, td {
            border: var(--bordures);
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #000;
            color: white;
            text-transform: uppercase; /* tous les textes "th" seront en majuscule */
        }

        td {
            background-color: #FF0000;
            color: white;
            text-transform: capitalize; /* tous les textes "td" auront leur première lettre en majuscule */
        }

        a {
            color: #FFF;
            text-transform: lowercase; /* tous les liens seront en minuscule */
        }

        /* je centre le tableau */
        #container {
            display: flex;
            justify-content: center;
            margin-top: 10%;
        }

    </style>

</head>

<body>
    <div id="container"> <!-- container pour centrer le tableau -->
        <table>
            <!-- entête de la table -->
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Metier</th>
                <th>Site Web</th>
            </tr>

            <!-- données de la table -->
            <?php

            $lgTabListe = count($liste); // j'attribue à la variable "$lgTabListe" le nombre de lignes de la table que l'on compte avec "count()";

            /* echo '<table border="1" width="100%"><tr><th>Nom</th><th>Prenom</th><th>Age</th><th>Metier</th><th>Site Web</th>';
            je m'étais inspiré du cours, mais j'ai ajusté avec la balise <style> */

            foreach ($liste as $personne) { // boucle "foreach()" pour parcourir la table "$liste" et la variable "$personne" aura la valeur associée
                echo "<tr>";
                echo "<td>{$personne['nom']}</td>"; // chaque case est remplie de la valeur de l'emplacement de la table correspondante
                echo "<td>{$personne['prenom']}</td>";
                echo "<td>{$personne['age']}</td>";
                echo "<td>{$personne['metier']}</td>";
                echo "<td><a href=\"{$personne['lien']}\" target=\"_blank\">{$personne['site']}</a></td>"; // j'affiche le nom du site correspondant à la personne présentée, en ajoutant le lien du site à ce dernier et rendant le nom clicable, renvoyant dans une nouvelle fenêtre sur le site correspondant
                echo "</tr>";
            }

            ?> <!-- je referme php pour terminer le code HTML -->
        </table>
    </div>
</body>

</html>