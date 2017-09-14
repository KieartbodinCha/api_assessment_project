<?php
/**
 * Created by IntelliJ IDEA.
 * User: kieartbodin
 * Date: 9/14/2017 AD
 * Time: 10:17 AM
 */

require_once '../db/DB_Functions.php';

$db = new DB_Functions();
if ($_REQUEST != null) {
    $data = $_POST["data"];
    try {
        $provinces = $db->getAllProvince();
        $response['success'] = TRUE;
        $response['message'] = 'Success!';
        $response['data'] = $provinces;
    } catch (Exception $exception) {
        $response['success'] = FALSE;
        $response['message'] = $exception;
        $response['data'] = null;
    }
    echo json_encode($response);
} else {
    echo 'Api Available';
    try {
        $provinces = $db->getAllProvince();
        echo json_encode($provinces);
    } catch (Exception $exception) {
        echo $exception;
    }
}
