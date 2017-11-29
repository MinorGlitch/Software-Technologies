<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<!--Write your PHP Script here-->
<?php
if (isset($_GET["num"])) {
    $count = intval($_GET["num"]);

    $a = 1;
    $b = 1;
    $c = 2;

    $fibarray = array(1, 1);

    for ($i = 2; $i < $count; ++$i) {
        $fibarray[$i] = $fibarray[$i - 1] + $fibarray[$i - 2] + $fibarray[$i - 3];
    }

    echo implode(" ", $fibarray);

}
?>
</body>
</html>