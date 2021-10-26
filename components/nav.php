<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];
?>
<nav>
    <div class="subNav">
        <ul class="left">
            <li>
                <i class="icon bi bi-envelope"></i>
                <p class="text">ibnsinaschools@hotmail.com</p>
            </li>
            <li>
                <i class="icon bi bi-telephone"></i>
                <p class="text">05366-83183</p>
            </li>
        </ul>
        <?php
        if (!isset($_COOKIE["userConnected"])) {
        ?>
            <a class="right" href="./login.php">
                <p class="text">Login</p>
            </a>
        <?php
        } else {
        ?>
            <a class="right" href="./dashboard.php">
                <p class="text">Dashboard</p>
            </a>
        <?php
        }
        ?>

    </div>
    <div class="mainNav">
        <a href="./" class="logo">
            <img alt="logo" class="imagelogo" src="./assets/logo.png" />
            <div class="title">
                <p class="top"><span>Madariss</span> IBN</p>
                <p class="bottom"><span>Sina</span> Linajah</p>
            </div>
        </a>
        <input hidden type="checkbox" id="idCHeckMenu" />

        <label for="idCHeckMenu"><i class="icon bi bi-list"></i></label>
        <label class="iconXlabel" for="idCHeckMenu"><i class="bi bi-x"></i></label>
        <ul class="eles listEleMenu">
            <li class="<?php echo str_contains($url, "php") ? '' : 'active' ?>">
                <a href="./">
                    <i class="icon bi bi-house"></i>
                    <p class="title">Home</p>
                </a>
            </li>
            <li class="<?php echo str_contains($url, "about") ? 'active' : '' ?>">
                <a href="./about.php">
                    <i class="icon bi bi-blockquote-left"></i>
                    <p class="title">About</p>
                </a>
            </li>
            <li class="<?php echo str_contains($url, "eleves") ? 'active' : '' ?>">
                <a href="./eleves.php">
                    <i class="icon bi bi-award-fill"></i>
                    <p class="title">Nos élèves</p>
                </a>
            </li>
            <li class="<?php echo str_contains($url, "activite") ? 'active' : '' ?>">
                <a href="./activite.php">
                    <i class="icon bi bi-subtract"></i>
                    <p class="title">Nos activités</p>
                </a>
            </li>
            <li class="<?php echo str_contains($url, "contact") ? 'active' : '' ?>">
                <a href="./contact.php">
                    <i class="icon bi bi-person-lines-fill"></i>
                    <p class="title">Contact</p>
                </a>
            </li>
        </ul>
    </div>
</nav>