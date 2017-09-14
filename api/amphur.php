
<?php
/**
 * Created by IntelliJ IDEA.
 * User: kieartbodin
 * Date: 9/14/2017 AD
 * Time: 10:17 AM
 */

require_once '../db/DB_Functions.php';

$db = new DB_Functions();
if (isset($_REQUEST['data'])) {
    $provinceId = $_REQUEST['data'];
    $amphurs = $db->getAmphursFromProvinceID($provinceId);
    echo $amphurs;
}else{
    $amphurs = $db->getAllAmphur();
    echo $amphurs;
}