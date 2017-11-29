<html>
<head>
    <title>Color Palette</title>
</head>
<style>
    div {
        display: inline-block;
        width: 150px;
        padding: 2px;
        margin: 5px;
    }
</style>
<body>
<?php
for ($i = 0; $i <= 255; $i += 51) {
    for ($j = 0; $j <= 255; $j += 51) {
        for ($k = 0; $k <= 255; $k += 51) {

            $color = "rgb($i, $j, $k)";

            echo "<div style='background: $color'>$color</div>\r\n";
        }
    }
}
?>
</body>
</html>