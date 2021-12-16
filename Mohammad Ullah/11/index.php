<?php
    $container = array('white', 'green', 'red') ;
    $container_1 = implode(", ", $container);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display the colors</title>
</head>

<body>
    <ol type="A">
        <li>
            <?php
            echo $container_1;
            ?>
        </li>
        <li></li>
    </ol>
    <ul>
        <?php

            foreach ($container as $num) {
              echo "<li>$num</li> <br>";
            }
        ?>

    </ul>

</body>

</html>