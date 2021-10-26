<?php
include("./config/db.php");
$result = $conn->query("select * from events order by date DESC LIMIT 5");

if ($result->num_rows == 0) {
} else {
    $row = $result->fetch_assoc();
?>

    <div class="eventsSection">
        <p class="title_maps">Events :</p>
        <div class="evantSection">
            <div class="first">
                <div class="location_date">
                    <p class="date"><?php echo explode(" ",$row["date"])[0]; ?></p>
                    <p class="date"><?php echo explode(" ",$row["date"])[1]; ?></p>
                    <p class="place"><?php echo $row["place"]; ?></p>
                </div>
                <p class="title"><?php echo $row["title"]; ?></p>
                <p class="description"><?php echo $row["detail"]; ?></p>
                </p>
            </div>
            <div class="second">
                <ul class="list">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <li>
                            <div class="date">
                                <p class="day"><?php echo explode("-",explode(" ",$row["date"])[0])[2]; ?></p>
                                <p class="month"><?php echo explode("-",explode(" ",$row["date"])[0])[1]; ?></p>
                                <p class="year"><?php echo explode("-",explode(" ",$row["date"])[0])[0]; ?></p>
                            </div>
                            <div class="detail">
                                <p class="title"><?php echo $row["title"]; ?></p>
                                <div class="position">
                                    <div class="ele">
                                        <i class="icon bi bi-stopwatch"></i>
                                        <p class="content"><?php echo explode(":",explode(" ",$row["date"])[1])[0].":".explode(":",explode(" ",$row["date"])[1])[1]; ?></p>
                                    </div>
                                    <div class="ele">
                                        <i class="icon bi bi-geo-alt"></i>
                                        <p class="content"><?php echo $row["title"]; ?>l</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
                <a href="./" class="getMore">
                    <p class="title">View All</p>
                    <i class="icon bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="third">
                <i class="bi bi-envelope-fill icon"></i>
                <p class="title">Subscribe to Newsletters</p>
                <p class="sousTitle">Get updates to news & events</p>
                <div class="form">
                    <input type="email" placeholder="Your Email Address" required />
                    <button>Subscribe</button>
                </div>
            </div>
        </div>
    </div>

<?php } ?>