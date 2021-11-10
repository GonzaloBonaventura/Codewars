
<form method="post">
    <input type="text" name="ip" placeholder="ip"><br>
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['ip'])) {
    //if (isValidIP($_POST['ip'])){
 if(isValidIP("abc.def.ghi.jkl")){
        echo "true";
    }else{
        echo "false";
    }

}else{
    testInvalid();
}

function isValidIP(string $str): bool
{
        $container = explode(".",$str);
        if (count($container) == 4) {
            foreach ($container as $oct) {
                if (!isOctet($oct)) {
                    return false;
                }
            }
            return true;
        }else{
            return false;
        }
}
function isOctet(string $octet){
    if (intval($octet)!=$octet){
        return false;
    }
    if ( (strncmp("0", $octet, 1) === 0) && strlen($octet) != 1) {
        return false;
    }
    if ($octet >= 0 && $octet <= 255) {
        return true;
    }else{
        return false;
    }
}
?>