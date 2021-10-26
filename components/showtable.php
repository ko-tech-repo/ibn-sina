<?php
    include("./config/db.php");
    $result = $conn->query("select * from events");
?>
<div class="adminSpace">
        <div class="headertable">
            <a class="addnewevent" href="./dashboard.php?addnew">Ajouter un évenement</a>
            <a class="addnewevent" style="background-color: red;" href="./dashboard.php?deconnect">Deconnexion</a>
        </div>
        <table class="fixed_headers">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title : </th>
                    <th>Date :</th>
                    <th>Place :</th>
                    <th>Action :</th>
                </tr>
            </thead>
            <tbody>

            <?php
            if ($result->num_rows == 0) {
            }else {
             while($row = $result->fetch_assoc()) {

            ?>
            <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                    <td>
                        <p><?php echo explode(" ",$row["date"])[0]; ?> - <?php echo explode(" ",$row["date"])[1]; ?></p>
                    </td>
                    <td><?php echo $row["place"]; ?></td>
                    <td>
                        <a href="./dashboard.php?delete=<?php echo $row['id']; ?>">Supprimer</a>
                        <a href="./dashboard.php?showDetail=<?php echo $row['id']; ?>">Modifer</a>
                    </td>
                </tr>
            <?php
            }}
            ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr><tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
    </div>