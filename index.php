<?php
include "db.php";

$sql = "SELECT name FROM pers";
$result = mysqli_query($conn, $sql);

if ($result) {
    $characterNames = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $characterNames[] = $row['name'];
    }
} else {
    echo "Failed to fetch character names: " . mysqli_error($conn);
}
?>
<?php
include "db.php";

$sql = "SELECT object FROM objects";
$result = mysqli_query($conn, $sql);

if ($result) {
    $objectNames = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $objectNames[] = $row['object'];
    }
} else {
    echo "Failed to fetch object names: " . mysqli_error($conn);
}
?>
<?php
include "db.php";

$sql = "SELECT name FROM location";
$result = mysqli_query($conn, $sql);

if ($result) {
    $locationNames = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $locationNames[] = $row['name'];
    }
} else {
    echo "Failed to fetch location names: " . mysqli_error($conn);
}
?>
<?php
include "db.php";

$sql = "SELECT personality FROM characteristic";
$result = mysqli_query($conn, $sql);

if ($result) {
    $personalityNames = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $personalityNames[] = $row['personality'];
    }
} else {
    echo "Failed to fetch personality names: " . mysqli_error($conn);
}
?>
<?php
include "db.php";

$sql = "SELECT action FROM actions";
$result = mysqli_query($conn, $sql);

if ($result) {
    $actionNames = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $actionNames[] = $row['action'];
    }
} else {
    echo "Failed to fetch action names: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapunzel</title>

    <link rel="stylesheet" href="css/main.css">
    <script src="js/app.js" defer></script>

</head>
<body>
    <header>
        <a href="db_editor.php">Editor</a>
    </header>
    <div class="container">
        <section class="gallery">

            <div class="frame">
                <div class="frame__content">
                    <h2>Рапунцель</h2>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media" src="media/1.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame">
                <div class="frame__content text-right">
                    <h3>Жили-были король с королевой,</h3>
                    <p> которые мечтали о ребёнке. Однажды свершилось чудо: у королевы родилась дочь, <?php echo $objectNames[0] ?> которой обладали целительной силой, которую подарил <?php echo $objectNames[1] ?>.</p>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media frame-media_left" src="media/2.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame">
                <div class="frame__content text-left">
                    <h3>Но счастье было недолгим.</h3>
                    <p><?php echo $characterNames[1] ?>, которой вздумалось использовать волшебную силу для продления молодости на 100 лет, проникла в <?php echo $locationNames[1] ?>, украла ребёнка, и, словно по волшебству, исчезла.</p>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media frame-media_right" src="media/3.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame">
                <div class="frame__content text-right">
                <h3><?php echo $characterNames[0] ?> жила в башне,</h3>
                <p><?php echo "но она мечтала о свободе и о мире, которую скрывал $locationNames[0]. И вот тут появился $characterNames[2], известный бандит. $characterNames[2] попал в $locationNames[0], и они заключили сделку: $characterNames[0] скажет $characterNames[2], где лежит $objectNames[2], а он ей поможет исследовать мир." ?></p>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media frame-media_left" src="media/4.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame">
                <div class="frame__content text-left">
                    <h3><?php echo $characterNames[0] ?> решила сбежать из башни.</h3>
                    <p>Поддержкой для них стали <?php echo $characterNames[4] ?> - <?php echo $personalityNames[4] ?> хамелеон Рапунцель и <?php echo $personalityNames[3] ?> <?php echo $characterNames[3] ?>.</p>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media frame-media_right" src="media/5.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame">
                <div class="frame__content text-right">
                    <h3>Вместе</h3>
                    <p>они столкнулись с многочисленными опасностями, пережили моменты смеха и печали, и, конечно же, нашли истинную дружбу и любовь.</p>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media frame-media_left" src="media/6.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame">
                <div class="frame__content text-left">
                    <h3>В конечном итоге,</h3>
                    <p>они смогли разгадать тайны прошлого <?php echo $characterNames[0] ?> и победить <?php echo $characterNames[1] ?>, освободив её от проклятия.</p>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media frame-media_right" src="media/7.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame">
                <div class="frame__content text-right">
                    <h3><?php echo $characterNames[0] ?> вернулась к своим родителям,</h3>
                    <p>и королевство было снова наполнено радостью. <?php echo $characterNames[2] ?> стал хорошим человеком, а <?php echo $characterNames[0] ?> поняла, что истинная сила заключается внутри нас, а любовь и доброта могут преодолеть любые трудности. <?php echo $characterNames[4] ?>, <?php echo $characterNames[2] ?> и <?php echo $characterNames[3] ?> остались с ними и стали частью семьи, принося радость и смех в их жизни.</p>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media frame-media_left" src="media/8.mp4" autoplay loop muted></video>
                </div>
            </div>

            <div class="frame frame_bg">
                <div class="frame__content">
                    <video class="frame-media" src="media/9.mp4" autoplay loop muted></video>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
