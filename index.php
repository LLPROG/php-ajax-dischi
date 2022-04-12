<?php 
/*
NOTA SU COME STRUTTURARE LA REPO: per la seconda mileston rifate il frontend usando Vue ed Axios da CDN (come visto a lezione) e non da CLI. Mettete i file html e js in una sottocartella.

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere
*/
include __DIR__ ."/db/data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vue-dischi</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include __DIR__ ."/components/header.php";
        include __DIR__ ."/components/main.php";
    ?>
</body>
</html>