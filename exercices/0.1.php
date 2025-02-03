<?php include_once "../includes/head.php" ?>

<head>
    <title>Exercices 0.1</title>
</head>

<body>
    <main>
        <section>
            <h1>Exercice 0.1</h1>
        </section>

        <section class="mt-50">
            <p>
                J'ai utilisé les structures conditionnelles
                <mark>if</mark>,
                <mark>elseif</mark>
                et
                <mark>else</mark>
                pour créer trois conditions qui comparent deux nombres.
            </p>
        </section>

        <section class="mt-50">
            <h2>Résultat</h2>
            <?php
            $number1 = 5;
            $number2 = 10;

            if ($number1 < $number2) {
                echo "Le plus petit nombre est : $number1";
            } elseif ($number1 > $number2) {
                echo "Le plus petit nombre est : $number2";
            } else {
                echo "C'est les mêmes !!";
            }
            ?>
        </section>

        <section class="mt-50">
            <a class="btn btn-primary" href="/index.php">Retour</a>
        </section>
    </main>
</body>

</html>