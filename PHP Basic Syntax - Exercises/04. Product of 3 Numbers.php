<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1"/>
    Y: <input type="text" name="num2"/>
    Z: <input type="text" name="num3"/>
    <input type="submit"/>
</form>
<!--Write your PHP Script here-->
<?php
if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["num3"])) {
    $nums = array(intval($_GET["num1"]), intval($_GET["num2"]), intval($_GET["num3"]));

    if (in_array(0, $nums)) {
        echo "Positive";
        return;
    }

    $negative = 0;

    foreach ($nums as $num) {
        if ($num < 0) {
            $negative++;
        }
    }

    if ($negative % 2 == 0) {
        echo "Positive";
        return;
    } else {
        echo "Negative";
    }
}
?>
</body>
</html>