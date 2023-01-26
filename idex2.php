<?php
session_start();
?>
<?php
if ($_SESSION['color'] === "blue"){ ?>
    <style>
        body {
            background-color: blue;
        }
    </style>
<?php
}
    else if ($_SESSION['color'] === "red"){ ?>
    <style>
        body {
            background-color: red;
        }
    </style>
<?php
}

else if ($_SESSION['color'] === "green"){ ?>
    <style>
        body {
            background-color: green;
        }
    </style>
    <?php
}

else if ($_SESSION['color'] === "yellow"){ ?>
    <style>
        body {
            background-color: yellow;
        }
    </style>
    <?php
}

else if ($_SESSION['color'] === "black"){ ?>
    <style>
        body {
            background-color: black;
        }
    </style>
    <?php
}


