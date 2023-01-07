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
    $requete = "SELECT * FROM PROJETS WHERE id_projets={$_GET["id"]}";
    $stmt = $db->query($requete);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $projet = $_GET["id"];

    if (empty($projet)) {
        header('location: ../index.php');
    }
    ?>

<meta name="twitter:card" content="La domotique c'est fantastique"></meta>
    <link rel="canonical" href="http://noamsebahoun.fr">
    <meta name="description" content="Découvrez mon univers ainsi que mes différents travaux dans différents domaine grâce à ce portfolio qui vous donneront un avant goût de ce l'on peux faire une fois que nous sommes poussé par la passion.">
    <meta name="keywords" content="portfolio, études, communication, audiovisuel, web, developpeur, technologie, informatique">
</head>

<body>
    <nav class="navHome">
        <a href="index.html"><img src="medias/NS_Logo.svg" alt="retour à l'acceuil"></a>
        <ul>
            <li><a href="gallery.php" class="navLink">Projets</a></li>
            <li><a href="aboutMe.html" class="navLink">A propos</a></li>
        </ul>
    </nav>
    <div class="imageTitle">
        <img src="<?= $result['image_projet'] ?>" alt="">
        <div class="title">
            <h1><?= $result['nom_projet'] ?></h1>
        </div>

    </div>
    <p class="ariane"><span class="arianePass"><a href="index.html" class="linkAriane">Accueil</a> / <a href="gallery.php" class="linkAriane">Projet</a> / </span><?= $result['nom_projet']?></p>

    <main class="mainProjet">
        <div class="specTechnique">
            <?= $result['icons'] ?>
        </div>
        <div class="ligneVertical"></div>
        <div class="ligneHorizontal"></div>

        <div class="descProjFull">
            <?= $result['desc_projet_full'] ?>
        </div>
    </main>
    <footer>
        <a href="<?= $result['lien_projet']?>" class="linkToProject"><div class="seeProject">
        Voir le projet
    </div></a>
    <?php if($_GET['id']==4){?>
 <a href="https://linktr.ee/lerelais" class="linkToSocial"><div class="seeSocial">
        Voir les réseaux sociaux
    </div></a>
   <?php } ?>
    </footer>
    

</body>
<script src="script.js"></script>

</html>