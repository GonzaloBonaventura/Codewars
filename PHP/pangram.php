<form method="post">
    <input type="text" name="escrito" placeholder="Su texto"><br>
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['escrito'])) {
    if (detect_pangram ($_POST['escrito'])) {
        echo "true";
    }else{
        echo "false";
    }
}

function detect_pangram($string) {
    $string = strtolower($string);
    $letters = array(
        "a",
        "b",
        "c",
        "d",
        "e",
        "f",
        "g",
        "h",
        "i",
        "j",
        "k",
        "l",
        "m",
        "n",
        "o",
        "p",
        "q",
        "r",
        "s",
        "t",
        "u",
        "v",
        "w",
        "x",
        "y",
        "z",
    );
    foreach ($letters as $key => $value) {
        //php 8+
        if (!str_contains($string, $value)) {
            return false;
        }

        //php -8
        if (!(strpos($string, $value) !== false)) {
            return false;
        }
    }
    return true;
  }
?>