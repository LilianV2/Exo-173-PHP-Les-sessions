<?php

session_start();
?>
<?php

if ($_POST['color'] === "blue") {
    ?>
    <style>
        body {
            background-color: blue;
        }
    </style>
    <?php
    $_SESSION['color'] = "blue";
}
else if ($_POST['color'] === "red") {
    ?>
    <style>
        body {
            background-color: red;
        }
    </style>
    <?php
    $_SESSION['color'] = "red";
}
else if ($_POST['color'] === "green") {
    ?>
    <style>
        body {
            background-color: green;
        }
    </style>
    <?php
    $_SESSION['color'] = "green";
}
else if ($_POST['color'] === "yellow") {
    ?>
    <style>
        body {
            background-color: yellow;
        }
    </style>
    <?php
    $_SESSION['color'] = "yellow";
}
else if ($_POST['color'] === "black") {
    ?>
    <style>
        body {
            background-color: black;
        }
    </style>
    <?php
    $_SESSION['color'] = "black";
}




