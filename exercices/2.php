<?php include_once "../includes/head.php" ?>

<head>
    <title>Exercices 2</title>
</head>

<body>
    <main>
        <section>
            <h1>Exercice 2</h1>
        </section>

        <section class="mt-50">
            <p>
                J'ai créé une fonction
                <mark>calcTTC</mark>
                qui calcule le prix total TTC à partir d'un prix HT et d'une quantité.
                La fonction multiplie d'abord le prix HT par la quantité pour obtenir le total HT,
                puis applique la TVA pour obtenir le total TTC.
                <br>
                <br>
                Enfin, j'ai utilisé
                <mark>number_format</mark>
                pour afficher le résultat avec deux décimales et un formatage adapté à l'euro.
            </p>
        </section>

        <section class="mt-50">
            <h2>Résultat</h2>
            <?php
            function calcTTC($prixHT, $quantite)
            {
                $tauxTVA = 0.2; // TVA 20%
                $totalHT = $prixHT * $quantite; // Total HT
                $totalTTC = $totalHT * (1 + $tauxTVA); // Total TTC
                return $totalTTC;
            }

            // Exemple
            $prixHT = 5;
            $produits = 12;

            $totalTTC = calcTTC($prixHT, $produits);
            echo "Total TTC : " . number_format($totalTTC, 2, ',', ' ') . " €";
            ?>
        </section>

        <section class="mt-50">
            <a class="btn btn-primary" href="/index.php">Retour</a>
        </section>
    </main>
</body>

</html>