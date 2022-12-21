<!DOCTYPE html>
<html lang="fr">

<?php
include('connexion.php');
$requete = ('SELECT * FROM PROJETS WHERE ext_domaine=1 ORDER BY id_projets DESC');

$stmt = $db->query($requete);
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porte Folio NS</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="icon" href="NS_Logo.svg" />
</head>

<body>
    <nav>
        <div class="logo">
            <a class="navBar" href="index.html">
                <img src="NS_Logo.svg" alt="Accueil" class="logo">
            </a>
        </div>
        <div class="menu">
            <ul>

                <li><a class="navBar" href="project.html">Projets</a></li>


                <li><a class="navBar" href="about.html">A propos</a></li>


                <li><a class="navBar" href="contact.html">Contact</a></li>

            </ul>
        </div>
    </nav>
    <main class="projets">
        <?php foreach ($result as $r) { ?>
            <div class="descProject">
                <section class="imgProjet">
                    <img src="<?= $r["image_projet"] ?>" alt="">
                </section>
                <section class="txtProjet">
                    <h1><?= $r["nom_projet"] ?> (<?= $r["date_projet"] ?>)</h1>
                    <p><?= $r["desc_projet"] ?> </p>
                    <br>
                    <a href="<?= $r["lien_projet"] ?>">
                        <p>Voir le Projet >>></p>
                    </a>
                </section>
            </div>
        <?php } ?>
    </main>
</body>

</html>