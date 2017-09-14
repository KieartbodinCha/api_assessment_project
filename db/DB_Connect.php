<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * Created by IntelliJ IDEA.
 * User: kiear
 * Date: 4/24/2017
 * Time: 9:15 PM
 */
class DB_Connect
{
    private $conn;

    // Connecting to database
    public function connect()
    {
        require_once 'Config.php';

        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $this->conn->set_charset("utf8");
        return $this->conn;
    }


}

?>