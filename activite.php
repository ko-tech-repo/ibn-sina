<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="./assets/logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="./styles/style.css" />
    <title>Nos activites | Ibn Sina</title>
</head>

<body>
    <?php include("./components/nav.php"); ?>
    <?php include("./components/header_activite.php"); ?>
    <ul class="about_performance">
        <li>
            <div class="first">
                <img src="./assets/icons/chant.png" class="img" />
                <p class="title">Activité de chant :</p>
                <p class="description">Développez votre talent de chanteur (se) à travers le Club de Chant ! Que vous soyez débutant ou non, une approche customisée et professionnelle vous sera offerte pour atteindre vos objectifs artistiques personnels <br>La voix est un instrument dont il faut prendre conscience et qu’on peut développer et maîtriser en s’appliquant de façon sérieuse et régulière. Apprenez à chanter avec nous et vivez votre passion à plein cœur !</p>
            </div>
            <img src="./assets/activite/1.jpg" class="img" />
        </li>
        <li>
            <div class="first">
                <img src="./assets/icons/theatre.jpg" class="img" />
                <p class="title">Le Théâtre :</p>
                <p class="description">e Club de Théâtre invite les jeunes apprenants à une activité intégrée à la pédagogie, qui leur apporte une aide importante au niveau de l’expression orale, du développement des facultés artistiques, de l’organisation spatiale, de la découverte de son corps et de nouveaux moyens d’expression</p>
            </div>
            <img src="./assets/activite/2.jpg" class="img" />
        </li>
        <li>
            <div class="first">
                <img src="./assets/icons/sport.png" class="img" />
                <p class="title">Sport :</p>
                <p class="description">Plusieurs activités physiques et sportives sont travaillées chaque année de manière à construire des apprentissages solides. Selon les moyens humains et techniques disponibles, on peut mettre en œuvre :

<br> - pour la réalisation de performances 
<br> - pour l'adaptation à différents environnements
<br> - pour les activités de coopération et d’opposition individuelle ou collective </p>
            </div>
            <img src="./assets/activite/3.png" class="img" />
        </li>
    </ul>


    <?php include("./components/footer.php"); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>