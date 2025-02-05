<?php include_once "../includes/head.php" ?>

<head>
    <title>Exercices 1</title>
</head>

<body>
    <main>
        <section>
            <h1>Exercice 1</h1>
        </section>

        <section class="mt-50">
            <p>
                J'ai créé une fonction
                <mark>calcMoyenne</mark>
                qui calcule la moyenne d'un tableau de notes.
                J'ai utilisé une condition
                <mark>if</mark>
                pour vérifier si le tableau est vide et retourner
                <mark>0</mark>
                dans ce cas.
                <br>
                <br>
                Ensuite, j'ai parcouru le tableau avec une boucle
                <mark>foreach</mark>
                pour additionner les notes, puis j'ai divisé la somme par le nombre de notes pour obtenir la moyenne.
                <br>
                <br>
                Pour afficher le résultat, j'ai utilisé
                <mark>echo</mark>
                et
                <mark>implode</mark>
                pour convertir le tableau en une chaîne lisible.
            </p>
        </section>

        <section class="mt-50">
            <h2>Résultat</h2>
            <?php
            function calcMoyenne($notes)
            {
                if (count($notes) === 0) {
                    return 0;
                }

                $somme = 0;

                foreach ($notes as $note) {
                    $somme += $note; // Ajoute chaque note à la somme
                }

                return $somme / count($notes); // Retourne la moyenne
            }

            // Exemple
            $tableau = [4, 2, 14, 18, 13];
            echo "[" . implode(", ", $tableau) . "] Moyenne : " . calcMoyenne($tableau);
            ?>
        </section>

        <section class="mt-50">
            <a class="btn btn-primary" href="/index.php">Retour</a>
        </section>
    </main>
</body>

Exercice 1
Créer une fonction qui à partir d'un tableau de chiffre nous donne une moyenne.
Si aucune note n'est présente dans le tableau, la fonction va nous rendre 0.

</html>