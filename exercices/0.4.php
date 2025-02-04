<?php include_once "../includes/head.php" ?>

<head>
    <title>Exercices 0.4</title>
</head>

<body>
    <main>
        <section>
            <h1>Exercice 0.4</h1>
        </section>

        <section class="mt-50">
            <p>
                J'ai employé une structure conditionnelle
                <mark>if</mark>
                pour vérifier si l'âge est supérieur ou égal à 18 ans et si la taille dépasse 140 cm,
                en combinant les deux conditions avec l'opérateur logique
                <mark>&&</mark>.
                <br>
                <br>
                Cette approche utilise des opérateurs de comparaison
                <mark>>=</mark>
                pour évaluer les valeurs des variables et une structure conditionnelle simple pour gérer les différents cas de figure.
            </p>
        </section>

        <section class="mt-50">
            <h2>Résultat</h2>
            <?php
            $age = 21;
            $height = 175;

            if ($age >= 18 && $height >= 140) {
                echo "Je peux rentrer dans le manège.";
            } else echo "Je n'ai pas le droit de rentrer dans le manège.";
            ?>
        </section>

        <section class="mt-50">
            <a class="btn btn-primary" href="/index.php">Retour</a>
        </section>
    </main>
</body>

</html>