<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rectangle Generator</title>
</head>
<body style="background-color: #555">

    <section class="navigation">
        <div class="container navigation__container">
            <a href="multiplication.php">Multiplication</a>
            <a href="calculator.php">Simple Calculator</a>
            <a href="rectangle.php" class="selected">Rectangle Generator</a>
        </div>
    </section>
    <!-- rectangle -->
    <section class="rectangle">
        <div class="container rectangle__container">
            <h1>Rectangle Generator</h1>
            <form action="#" method="get" class="rectangle_form">
                <input type="text" pattern="[0-9]*" name="width" id="width" placeholder="Enter the width of rectangle here ...">
                <input type="text" pattern="[0-9]*" name="height" id="height" placeholder="Enter the height of rectangle here ...">
                <input type="submit" value="Generate Rectangle">
            </form>

            <div class="final_rectangle">

                <?php
                for ($i = 1; $i <= $_GET['height']; $i++) {
                    echo "<div class='row'>";
                        for ($j = 1; $j <= $_GET['width']; $j++) {
                            echo "<span>*</span>";
                        }
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>
</body>
</html>