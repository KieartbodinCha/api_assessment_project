<?php
/**
 * Created by IntelliJ IDEA.
 * User: kiear
 * Date: 4/25/2017
 * Time: 9:02 PM
 */

require_once '../db/DB_Functions.php';
$file = 'logger.txt';
$response['success'] = FALSE;
$db = new DB_Functions();

//echo json_encode($_REQUEST["message"]);

if (isset($_REQUEST['data'])) {

    $data = $_POST["data"];
    $outcome = $db->storeData($data);
    $response['success'] = TRUE;
    $response['data'] = $outcome;
    if ($data != null) {
        $response['success'] = TRUE;
        $response['message'] = 'Success!';
    } else {
        // user failed to store
        $response['success'] = FALSE;
        $response['message'] = 'Unknown error occurred!';
    }

    echo json_encode($response);
}else{
    echo 'none';
}

?>