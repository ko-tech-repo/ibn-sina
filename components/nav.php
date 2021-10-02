<nav>
    <div class="subNav">
        <ul class="left">
            <li>
                <i class="icon bi bi-envelope"></i>
                <p class="text">Contact@emi.ac.ma</p>
            </li>
            <li>
                <i class="icon bi bi-telephone"></i>
                <p class="text">+1-3435-2356-222</p>
            </li>
        </ul>
        <a class="right" href="./login.php">
            <p class="text">Login</p>
        </a>
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
            <li class="<?php echo str_contains($_SERVER['REQUEST_URI'],"php")?'':'active' ?>">
                <a href="./">
                    <i class="icon bi bi-house"></i>
                    <p class="title">Home</p>
                </a>
            </li>
            <li class="<?php echo str_contains($_SERVER['REQUEST_URI'],"about")?'active':'' ?>">
                <a href="./about.php">
                    <i class="icon bi bi-blockquote-left"></i>
                    <p class="title">About</p>
                </a>
            </li>
            <li class="<?php echo str_contains($_SERVER['REQUEST_URI'],"eleves")?'active':'' ?>">
                <a href="./eleves.php">
                    <i class="icon bi bi-award-fill"></i>
                    <p class="title">Nos élèves</p>
                </a>
            </li>
            <li class="<?php echo str_contains($_SERVER['REQUEST_URI'],"activite")?'active':'' ?>">
                <a href="./activite.php">
                    <i class="icon bi bi-subtract"></i>
                    <p class="title">Nos activités</p>
                </a>
            </li>
            <li class="<?php echo str_contains($_SERVER['REQUEST_URI'],"contact")?'active':'' ?>">
                <a href="./contact.php">
                    <i class="icon bi bi-person-lines-fill"></i>
                    <p class="title">Contact</p>
                </a>
            </li>
        </ul>
    </div>
</nav>