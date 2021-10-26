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
    <title>Gallery | Ibn Sina</title>
</head>

<body>
    <?php include("./components/nav.php"); ?>
    <?php include("./components/header_eleves.php"); ?>

    <ul class="listPhoto">
        <li onclick="show('./assets/promo/1.jpg')"><img src="./assets/promo/1.jpg" /></li>
        <li onclick="show('./assets/promo/2.jpg')"><img src="./assets/promo/2.jpg" /></li>
        <li onclick="show('./assets/promo/3.jpg')"><img src="./assets/promo/3.jpg" /></li>
        <li onclick="show('./assets/promo/4.jpg')"><img src="./assets/promo/4.jpg" /></li>
        <li onclick="show('./assets/promo/5.jpg')"><img src="./assets/promo/5.jpg" /></li>
        <li onclick="show('./assets/promo/6.jpg')"><img src="./assets/promo/6.jpg" /></li>
        <li onclick="show('./assets/promo/7.jpg')"><img src="./assets/promo/7.jpg" /></li>
        <li onclick="show('./assets/promo/8.jpg')"><img src="./assets/promo/8.jpg" /></li>
        <li onclick="show('./assets/promo/9.jpg')"><img src="./assets/promo/9.jpg" /></li>
        <li onclick="show('./assets/promo/10.jpg')"><img src="./assets/promo/10.jpg" /></li>
        <li onclick="show('./assets/promo/11.jpg')"><img src="./assets/promo/11.jpg" /></li>
        <li onclick="show('./assets/promo/12.jpg')"><img src="./assets/promo/12.jpg" /></li>
        <li onclick="show('./assets/promo/13.jpg')"><img src="./assets/promo/13.jpg" /></li>
    </ul>
    <div id="idshowPicture" class="showPicture displayNone">
        <button onclick="cacheimage()" ><i class="bi bi-x"></i></button>
        <img src="./assets/promo/1.jpg" id="imagetoshow" />
    </div>
    <?php include("./components/footer.php"); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>