<?php
    function getMultiplicationResult($digit) {
        $className;
        if ($digit == 1){
            $className = 'first';
        }

        echo "<div class='multiplication-item ".$className."'>";
            for($i = 1; $i <=10; $i++) {
                echo "<span>".$digit*$i."</span>";
            }
        echo "</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication</title>
</head>
<body>
    <section class="navigation">
        <div class="container navigation__container">
            <a href="multiplication.php" class="selected">Multiplication</a>
            <a href="calculator.php">Simple Calculator</a>
            <a href="rectangle.php">Rectangle Generator</a>
        </div>
    </section>
    <!-- multiplication table -->
    <section class='multiplication-items'>
        <div class='container multiplication-items__container'>
            <h1> Multiplication Table </h1>
            <?php
                getMultiplicationResult(1);
                getMultiplicationResult(2);
                getMultiplicationResult(3);
                getMultiplicationResult(4);
                getMultiplicationResult(5);
                getMultiplicationResult(6);
                getMultiplicationResult(7);
                getMultiplicationResult(8);
                getMultiplicationResult(9);
                getMultiplicationResult(10);
            ?>
        </div>
    </section>
</body>
</html>