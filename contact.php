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
    <title>Contact | Ibn Sina</title>
</head>

<body>
    <?php include("./components/nav.php"); ?>

    <form class="contact_form">
        <p class="title">LEAVE US YOUR INFO</p>
        <p class="sousTitle">AND WE WILL GET BACK TO YOU.</p>
        <div class="inputs">
            <input type="text" placeholder="Nom et prénom*" required />
            <input type="email" placeholder="Email*" required />
            <input type="text" placeholder="Sujet*" required />
            <textarea placeholder="Message*" required ></textarea>
        </div>
        <input type="submit" class="submitBtn" value="Submit" name="formSubmit"/>
    </form>

    <?php include("./components/footer.php"); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>