<form class="formLogin" method="post">
    <p class="title">Login Page</p>
    <p class="erropassword"><?php echo isset($error) ? "incorrect username or password" : ""; ?></p>

    <div>
        <div class="inputEle">
            <p class="title">Username</p>
            <input type="text" name="username" required placeholder="Taper votre username" />
        </div>
        <div class="inputEle">
            <p class="title">Password</p>
            <input type="password" name="password" required placeholder="Taper votre mot de passe" />
        </div>
        <input type="submit" class="btn_sbt" name="checkInfo" />
    </div>
</form>