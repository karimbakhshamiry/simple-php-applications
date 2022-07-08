<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>

    <section class="navigation">
        <div class="container navigation__container">
            <a href="multiplication.php">Multiplication</a>
            <a href="calculator.php" class="selected">Simple Calculator</a>
            <a href="rectangle.php">Rectangle Generator</a>
        </div>
    </section>

    <!-- calculator -->
    <section class="calculator">
        <div class="container calculator__container">
            <h1>Calculator</h1>
            <form action="#" method="get" class="operation_form">
                <input type="text" pattern="[0-9\-9-\-1]" name="firstDigit" id="firstDigit" class="firstDigiti" placeholder="type your first digit here">
                <select name="operation" id="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
                <input type="text" pattern="[0-9\-9-\-1]" name="secondDigit" id="secondDigit" class="firstDigiti" placeholder="type your second digit here">
                <input type="submit" value="Show Result">
            </form>

            <?php
                echo "<div class='operation'>";
                    if ($_GET["operation"] == '+') {
                        echo $_GET["firstDigit"] . " + " . $_GET["secondDigit"] . " = " . $_GET["firstDigit"] + $_GET["secondDigit"]; 

                    }else if ($_GET["operation"] == '-') {
                        echo $_GET["firstDigit"] . " - " . $_GET["secondDigit"] . " = " . $_GET["firstDigit"] - $_GET["secondDigit"]; 

                    } else if ($_GET["operation"] == 'x') {
                        echo $_GET["firstDigit"] . " * " . $_GET["secondDigit"] . " = " . $_GET["firstDigit"] * $_GET["secondDigit"]; 

                    } else if ($_GET["operation"] == '/') {
                        echo $_GET["firstDigit"] . " / " . $_GET["secondDigit"] . " = " . $_GET["firstDigit"] / $_GET["secondDigit"]; 

                    } else if ($_GET["operation"] == '%') {
                        echo $_GET["firstDigit"] . " % " . $_GET["secondDigit"] . " = " . $_GET["firstDigit"] % $_GET["secondDigit"]; 

                    }
                echo "<div>";
            ?>
        </div>
    </section>
</body>
</html>