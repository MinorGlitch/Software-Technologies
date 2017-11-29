<form>
    Celsius: <input type="text" name="cel"/>
    <input type="submit" value="Convert">
    <?php
    if (isset($_GET["cel"])) {
        $temp = $_GET["cel"];
        $result = floatval($temp) * 9 / 5 + 32;

        echo "$temp &deg;C = $result &deg;F";
    }
    ?>
</form>
<form>
    Fahrenheit: <input type="text" name="fah"/>
    <input type="submit" value="Convert">
    <?php
    if (isset($_GET["fah"])) {
        $temp = $_GET["fah"];
        $result = (floatval($temp) - 32) * 5 / 9;
        echo "$temp &deg;F = $result &deg;C";
    }
    ?>
</form>
