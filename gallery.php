<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="medias/NS_Logo.svg">
    <?php
    include('connect.php');
    $requete = ('SELECT * FROM PROJETS WHERE ext_domaine=1 ORDER BY id_projets DESC');
    $stmt = $db->query($requete);
    $resultW = $stmt->fetchall(PDO::FETCH_ASSOC);

    $requete = ('SELECT * FROM PROJETS WHERE ext_domaine=2 ORDER BY id_projets DESC');
    $stmt = $db->query($requete);
    $resultC = $stmt->fetchall(PDO::FETCH_ASSOC);

    $requete = ('SELECT * FROM PROJETS WHERE ext_domaine=3 ORDER BY id_projets DESC');
    $stmt = $db->query($requete);
    $resultA = $stmt->fetchall(PDO::FETCH_ASSOC);
    ?>

</head>

<body>
    <nav class="navProject">
        <a href="index.html"><img src="medias/NS_Logo.svg" alt="retour à l'acceuil"></a>
        <ul>
            <li><a href="gallery.php">Project</a></li>
            <li><a href="aboutMe.html">About me</a></li>
        </ul>
    </nav>
    <main>
        <p class="domaine">
            <span class="webLink">Web</span>
            <span class="AudVisLink">Audiovisuel</span>
            <span class="comLink">Communication</span>
        </p>
        <div class="project">
            <div class="web">
                <?php foreach ($resultW as $rW) { ?>
                    <div class="descProject">
                        <section class="imgProjet">
                            <img src="<?= $rW["image_projet"] ?>" alt="">
                        </section>
                        <section class="txtProjet">
                            <h1><?= $rW["nom_projet"] ?> (<?= $rW["date_projet"] ?>)</h1>
                            <p><?= $rW["desc_projet"] ?> </p>
                            <br>
                            <a href='project.php?id=<?= $rW["id_projets"] ?>'>
                                <p>En savoir plus >>></p>
                            </a>
                        </section>
                    </div>
                <?php } ?>
            </div>
            <div class="AudVis">
                <?php foreach ($resultA as $rA) { ?>
                    <div class="descProject">
                        <section class="imgProjet">
                            <img src="<?= $rA["image_projet"] ?>" alt="">
                        </section>
                        <section class="txtProjet">
                            <h1><?= $rA["nom_projet"] ?> (<?= $rA["date_projet"] ?>)</h1>
                            <p><?= $rA["desc_projet"] ?> </p>
                            <br>
                            <a href='project.php?id=<?= $rA["id_projets"] ?>'>
                                <p>En savoir plus >>></p>
                            </a>
                        </section>
                    </div>
                <?php } ?>
            </div>
            <div class="Com">
                <?php foreach ($resultC as $rC) { ?>
                    <div class="descProject">
                        <section class="imgProjet">
                            <img src="<?= $rC["image_projet"] ?>" alt="">
                        </section>
                        <section class="txtProjet">
                            <h1><?= $rC["nom_projet"] ?> (<?= $rC["date_projet"] ?>)</h1>
                            <p><?= $rC["desc_projet"] ?> </p>
                            <br>
                            <a href='project.php?id=<?= $rC["id_projets"] ?>'>
                                <p>En savoir plus >>></p>
                            </a>
                        </section>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
<script src="script.js"></script>

</html>