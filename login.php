<?php
include("./config/db.php");
if (isset($_POST["checkInfo"])) {

    $username = addslashes($_POST["username"]);
    $password = addslashes($_POST["password"]);

    $rslt = $conn->query("select * from user where username='".$username."' and password='".$password."'");
    
    if ($rslt->num_rows == 1) {
        setcookie("userConnected",true);
        header("Location: ./dashboard.php");
    } else {
        $error = true;
    }
}
?>
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
    <title>Login | Ibn Sina</title>
</head>

<body>
    <?php include("./components/nav.php"); ?>
    <?php
    if (!isset($_COOKIE["login"])) {
        include("./components/formLogin.php");
    } else {
        include("./components/admin.php");
    }
    ?>
    <?php include("./components/footer.php"); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>