<?php
$row = ["title"=>"Title","place"=>"Place","detail"=>"Detail","date"=>"Date"];
if (isset($_GET["showDetail"])) {
    include("./config/db.php");
    $id = $_GET["showDetail"];
    $rslt = $conn->query("SELECT * from events where id=$id");
    if ($rslt->num_rows == 0) {
        $err = true;
    }else {
        $row = $rslt->fetch_assoc();
    }
}
?>
<div class="newevent">
    <p class="title">Detail d'évenement</p>
    <form class="form" method="post">
        <div class="blockInput">
            <p class="title">Title :</p>
            <input type="text" name="title" placeholder="<?php echo $row["title"]; ?>"  />
        </div>
        <div class="blockInput">
            <p class="title">place :</p>
            <input type="text" name="place" placeholder="<?php echo $row["place"]; ?>" />
        </div>
        <div class="blockInput">
            <p class="title">date :</p>
            <div class="blocktimedate">
                <input type="date" class="first" name="date" value="<?php echo explode(' ',$row["date"])[0]; ?>" />
                <input type="time" class="second" name="time" value="<?php echo explode(' ',$row["date"])[1]; ?>" />
            </div>
        </div>
        <div class="blockInput">
            <p class="title">Detail :</p>
            <textarea name="detail" placeholder="Detail ..." ><?php echo $row["detail"]; ?></textarea>
        </div>
        <?php
        if (isset($_GET["addnew"])) {
        ?> <input type="submit" class="btnSubmit" value="enregistrer" name="submitEvent" /> <?php
                                                                                            } else if (isset($_GET["showDetail"])) {
                                                                                                ?> <input type="submit" class="btnSubmit" value="enregistrer" name="submitEventupdate" /> <?php
                                                                                                    }
                                                                                                        ?>
    </form>
</div>