<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    
    <meta name="twitter:card" content="La domotique c'est fantastique"></meta>
    <link rel="canonical" href="http://noamsebahoun.fr">
    <meta name="description" content="Découvrez mon univers ainsi que mes différents travaux dans différents domaine grâce à ce portfolio qui vous donneront un avant goût de ce l'on peux faire une fois que nous sommes poussé par la passion.">
    <meta name="keywords" content="portfolio, études, communication, audiovisuel, web, developpeur, technologie, informatique">

</head>

<body>
    <nav class="navProject">
        <a href="index.html"><img src="medias/NS_Logo.svg" alt="retour à l'acceuil"></a>
        <ul>
            <li><a href="gallery.php" class="navLink">Projets</a></li>
            <li><a href="aboutMe.html" class="navLink">A propos</a></li>
        </ul>
    </nav>
    <main>
        <p class="ariane"><span class="arianePass"> <a href="index.html" class="linkAriane">Accueil </a>/ </span>Projet</p>

        <p class="domaine" data-aos="fade-left" data-aos-duration="1000">
            <span class="webLink">Web</span>
            <span class="AudVisLink">Audiovisuel</span>
            <span class="comLink">Communication</span>
        </p>
        <div class="project" data-aos="fade-up" data-aos-duration="1000">
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="script.js"></script>

</html>