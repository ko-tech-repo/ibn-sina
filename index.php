<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="./assets/logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="./styles/style.css"  />
    <title>Welcome to Ibn Sina</title>
</head>

<body>
    <?php include("./components/nav.php"); ?>
    <?php include("./components/header.php"); ?>
    <?php include("./components/caracteristique.php"); ?>
    <?php include("./components/motsDirecteur.php"); ?>
    <?php include("./components/counter.php"); ?>
    <?php include("./components/instructor.php"); ?>

    <?php include("./components/event.php"); ?>


    <p class="title_maps">Localisation :</p>
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=madaris%20ibn%20sina%20linajah%20oujda&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

    <?php include("./components/footer.php"); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>