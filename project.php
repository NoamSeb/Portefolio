<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <?php
    include('connect.php');
    $requete = "SELECT * FROM PROJETS WHERE id_projets={$_GET["id"]}";
    $stmt = $db->query($requete);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $projet = $_GET["id"];
    ?>
</head>

<body>
    <nav class="navHome">
        <a href="index.html"><img src="medias/NS_Logo.svg" alt="retour à l'acceuil"></a>
        <ul>
            <li><a href="gallery.php" class="navLink">Project</a></li>
            <li><a href="aboutMe.html" class="navLink">About me</a></li>
        </ul>
    </nav>
    <div class="imageTitle">
        <img src="<?= $result['image_projet'] ?>" alt="">
        <div class="title">
            <h1><?= $result['nom_projet'] ?></h1>
        </div>

    </div>
    <main class="mainProjet">
        <div class="specTechnique">
            <img src="<?php $result['icon1']?>" alt="<?php $result['altIcon1']?>">
            <img src="<?php $result['icon2']?>" alt="<?php $result['altIcon2']?>">
            <img src="<?php $result['icon3']?>" alt="<?php $result['altIcon3']?>">
        </div>
       
    </main>
</body>

</html>