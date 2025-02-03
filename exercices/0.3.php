<?php include_once "../includes/head.php" ?>

<head>
    <title>Exercices 0.3</title>
</head>

<body>
    <main>
        <section>
            <h1>Exercice 0.3</h1>
        </section>

        <section class="mt-50">
            <p>
                J'ai utilisé les structures conditionnelles
                <mark>if</mark>
                et
                <mark>else if</mark>
                pour créer deux conditions qui vérifient la valeur de la variable
                <mark>$gender</mark>.
                <br>
                <br>
                J'ai utilisé les variables
                <mark>$age</mark>
                et
                <mark>$height</mark>
                pour insérer dynamiquement ces valeurs dans les messages.
            </p>
        </section>

        <section class="mt-50">
            <h2>Résultat</h2>
            <?php
            $gender = "male";
            $height = 175;
            $age = 21;

            if ($gender === "male") {
                echo "J'ai $age ans, je mesure $height centimètres et je suis un homme.";
            } else if ($gender === "female") {
                echo "J'ai $age ans, je mesure $height centimètres et je suis une femme.";
            }
            ?>
        </section>

        <section class="mt-50">
            <a class="btn btn-primary" href="/index.php">Retour</a>
        </section>
    </main>
</body>

</html>