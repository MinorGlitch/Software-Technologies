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
    for ($i = $count; $i > 0; $i--) {
        echo $i . ' ';
    }
}
?>
</body>
</html>