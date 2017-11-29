<?php
$sortedLines = null;
if (isset($_GET["lines"])) {
    $lines = $_GET["lines"];

    $lines = explode("\n", $lines);
    $lines = array_map("trim", $lines);
    sort($lines, SORT_STRING);
    $sortedLines = implode("\r\n", $lines);
}

?>

<form>
  <textarea rows="10" name="lines"><?= $sortedLines
      ?></textarea> <br>
    <input type="submit" value="Sort">
</form>
