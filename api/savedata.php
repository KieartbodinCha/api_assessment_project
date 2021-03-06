<?php
/**
 * Created by IntelliJ IDEA.
 * User: kiear
 * Date: 4/25/2017
 * Time: 9:02 PM
 */

require_once '../db/DB_Functions.php';

$db = new DB_Functions();


if (isset($_REQUEST['data'])) {
    $data = $_POST["data"];
    try {
        $outcome = $db->storeData($data);
        $response['success'] = TRUE;
        $response['message'] = 'Success!';
    } catch (Exception $exception) {
        $response['success'] = FALSE;
        $response['message'] = $exception;
    }
    echo json_encode($response);
} else {
    echo 'Api Available';
    try {
        $img = $db->testImage();
        echo '<br/>';
        echo '<img src="data:image/png;base64,' . $img . '" />';
    } catch (Exception $exception) {
        echo $exception;
    }
}

?>