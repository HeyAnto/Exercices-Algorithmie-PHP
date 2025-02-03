<?php include_once "../includes/head.php" ?>

<head>
    <title>Exercices 0.2</title>
</head>

<body>
    <main>
        <section>
            <h1>Exercice 0.2</h1>
        </section>

        <section class="mt-50">
            <p>
                J'ai utilisé les structures conditionnelles
                <mark>if</mark>
                et
                <mark>else if</mark>
                pour créer deux conditions qui vérifient la valeur de la variable
                <mark>$genre</mark>.
                En fonction des résultats de ces comparaisons,
                j'affiche le message correspondant indiquant si la personne est un homme ou une femme.
            </p>
        </section>

        <section class="mt-50">
            <h2>Résultat</h2>
            <?php
            $genre = "male";

            if ($genre === "male") {
                echo "Je suis un homme.";
            } else if ($genre === "female") {
                echo "Je suis une femme.";
            }
            ?>
        </section>

        <section class="mt-50">
            <a class="btn btn-primary" href="/index.php">Retour</a>
        </section>
    </main>
</body>

</html>