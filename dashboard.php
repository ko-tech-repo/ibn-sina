<?php
if (!isset($_COOKIE["userConnected"])) {
    header("Location: index.php");
}else if(isset($_POST["submitEvent"])){
    include("./config/db.php");

    $title=addslashes($_POST["title"]);
    $place=addslashes($_POST["place"]);
    $detail=addslashes($_POST["detail"]);
    $date=addslashes($_POST["date"]);
    $time=$_POST["time"];
    echo $title." - ".$place." - ".$detail." - ".$date." - ".$time;

    $conn->query("INSERT INTO events values(null,'$title','$date $time','$place','$detail')");

    header("Location: ./dashboard.php");

}else if(isset($_POST["submitEventupdate"])){
    include("./config/db.php");

    $title=addslashes($_POST["title"]);
    $place=addslashes($_POST["place"]);
    $detail=addslashes($_POST["detail"]);
    $date=addslashes($_POST["date"]);
    $time=$_POST["time"];

    $sql = "update events set ";

    if(strlen($title)!=0){
        $sql.="title='$title',";
    }
    if(strlen($place)!=0){
        $sql.="place='$place', ";
    }
    if(strlen($detail)!=0){
        $sql.="detail='$detail' ";
    }
    if(strlen($date)!=0 || strlen($time)!=0){
        $sql.=",date='$date $time' ";
    }
    $sql.=" where id=".$_GET['showDetail'];


    $conn->query($sql);
    
    header("Location: ./dashboard.php");

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
    <title>dashboard | Ibn Sina</title>
</head>

<body>
    <?php include("./components/nav.php"); ?>

    <?php
    if (isset($_GET["addnew"])) {
        include("./components/updateevent.php");
    } else if (isset($_GET["delete"])) {
        include("./config/db.php");
        $idevent = addslashes($_GET["delete"]);
        $result = $conn->query("delete from events where id=$idevent");
        header("Location: ./dashboard.php");
    } else if (isset($_GET["showDetail"])) {
        include("./components/updateevent.php");
    }  else if (isset($_GET["deconnect"])) {
        setcookie("userConnected",false,-1);
        header("Location: ./dashboard.php");
    }else {
        include("./components/showtable.php");
    }
    ?>
    <?php include("./components/footer.php"); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>