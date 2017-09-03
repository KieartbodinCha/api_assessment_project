<?php

/**
 * Created by IntelliJ IDEA.
 * User: kiear
 * Date: 4/24/2017
 * Time: 9:17 PM
 */
class DB_Functions
{

    private $conn;

    // constructor
    function __construct()
    {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }

    public function getLatestSchoolID()
    {
        require_once 'Config.php';
        @$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $idQuery = " SELECT MAX(schId) AS SCHOOL_ID FROM school ";
        $idResult = mysqli_query($conn, $idQuery);
        $idRow = mysqli_fetch_assoc($idResult);
        $schoolId = $idRow["SCHOOL_ID"];
        return $schoolId;
    }

    public function getLatestSchoolTestID()
    {
        require_once 'Config.php';
        @$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $idQuery = " SELECT MAX(schId) AS SCHOOL_ID FROM school ";
        $idResult = mysqli_query($conn, $idQuery);
        $idRow = mysqli_fetch_assoc($idResult);
        $schoolId = $idRow["SCHOOL_ID"];
        return $schoolId;
    }

    public function storeData($jsonData)
    {
        try {
            foreach ($jsonData as $school) {
                if (isset($school['SUBMIT_ID'])) {
                    $this->updateSchool($school);
                    $this->updateSchoolTest($school);
                } else {
                    $this->insertSchool($school);
                    $this->insertSchoolTest($school);
                }
            }
        } catch (Exception $exception) {
            return $exception;
        }
        return $this->selectAllData();
    }

    public function insertSchool($school)
    {
        try {
            $schName = $school['PLACE_NAME'];
            $schCanteenName = $school["CANTEEN_NAME"];
            $schDepart = $school['DEPARTMENT_NAME'];
            $schStudentNum = $school["STUDENT_COUNT"];
            $schAddress = $school['ADDRESS'];
            $schClient = $school["CUSTOMER_COUNT"];
            $schChef = $school['OPERATION_COUNT'];
            $schPeople = $school["canteen"];
            $schNameSurvey = $school["ASSESSMENT_NAME"];
            $schSurveyDate = $school['ASSESSMENT_DATE'];
            $schDistrict = $school["DISTRICT"];
            $schProvince = $school["PROVINCE"];

            $prepareStatement = null;
            $prepareStatement = $this->conn->prepare("INSERT INTO school
                                  (
                                  schName, schCanteenName, schDepart, schStudentNum, schAddress,
                                  schtClient, schChef, schPeople, schNameSurvey, schSurveyDate,
                                  schSurvey, schDistric, schProvince )
                                  VALUES
                                  (
                                  ?, ?, ?, ?, ?,
                                  ?, ?, ?, ?, ?,
                                  ?, ?, ? ) ");

            $prepareStatement->bind_param("sssssssssssss",
                $schName,
                $schCanteenName,
                $schDepart,
                $schStudentNum,
                $schAddress,
                $schClient,
                $schChef,
                $schPeople,
                $schNameSurvey,
                $schNameSurvey,
                $schSurveyDate,
                $schDistrict,
                $schProvince);
        } catch (Exception $exception) {
            throw  $exception;
        } finally {
            $prepareStatement->close();
        }
    }

    public function insertSchoolTest($school)
    {
        $schoolID = $this->getLatestSchoolID();
        $choice1 = $school["CHOICE1"];
        $choice2 = $school["CHOICE2"];
        $choice3 = $school["CHOICE3"];
        $choice4 = $school["CHOICE4"];
        $choice5 = $school["CHOICE5"];
        $choice6 = $school["CHOICE6"];
        $choice7 = $school["CHOICE7"];
        $choice8 = $school["CHOICE8"];
        $choice9 = $school["CHOICE9"];
        $choice10 = $school["CHOICE10"];
        $choice11 = $school["CHOICE11"];
        $choice12 = $school["CHOICE12"];
        $choice13 = $school["CHOICE13"];
        $choice14 = $school["CHOICE14"];
        $choice15 = $school["CHOICE15"];
        $choice16 = $school["CHOICE16"];
        $choice17 = $school["CHOICE17"];
        $choice18 = $school["CHOICE18"];
        $choice19 = $school["CHOICE19"];
        $choice20 = $school["CHOICE20"];
        $choice21 = $school["CHOICE21"];
        $choice22 = $school["CHOICE22"];
        $choice23 = $school["CHOICE23"];
        $choice24 = $school["CHOICE24"];
        $choice25 = $school["CHOICE25"];
        $choice26 = $school["CHOICE26"];
        $choice27 = $school["CHOICE27"];
        $choice28 = $school["CHOICE28"];
        $choice29 = $school["CHOICE29"];
        $choice30 = $school["CHOICE30"];

        $comment1 = $school["COMMENT1"];
        $comment2 = $school["COMMENT2"];
        $comment3 = $school["COMMENT3"];
        $comment4 = $school["COMMENT4"];
        $comment5 = $school["COMMENT5"];
        $comment6 = $school["COMMENT6"];
        $comment7 = $school["COMMENT7"];
        $comment8 = $school["COMMENT8"];
        $comment9 = $school["COMMENT9"];
        $comment10 = $school["COMMENT10"];
        $comment11 = $school["COMMENT11"];
        $comment12 = $school["COMMENT12"];
        $comment13 = $school["COMMENT13"];
        $comment14 = $school["COMMENT14"];
        $comment15 = $school["COMMENT15"];
        $comment16 = $school["COMMENT16"];
        $comment17 = $school["COMMENT17"];
        $comment18 = $school["COMMENT18"];
        $comment19 = $school["COMMENT19"];
        $comment20 = $school["COMMENT20"];
        $comment21 = $school["COMMENT21"];
        $comment22 = $school["COMMENT22"];
        $comment23 = $school["COMMENT23"];
        $comment24 = $school["COMMENT24"];
        $comment25 = $school["COMMENT25"];
        $comment26 = $school["COMMENT26"];
        $comment27 = $school["COMMENT27"];
        $comment28 = $school["COMMENT28"];
        $comment29 = $school["COMMENT29"];
        $comment30 = $school["COMMENT30"];

        $image1 = $school["IMAGE1"];
        $image2 = $school["IMAGE2"];
        $image3 = $school["IMAGE3"];
        $image4 = $school["IMAGE4"];

        $sqlInsertTest = "INSERT INTO schtest 
                                   (ex1, ex2, ex3, ex4, ex5, ex6, ex7, ex8, ex9, ex10, 
                                    ex11, ex12, ex13, ex14, ex15, ex16, ex17, ex18, ex19, ex20, 
                                    ex21, ex22, ex23, ex24, ex25, ex26, ex27, ex28, ex29, ex30, 
                                    com1, com2, com3, com4, com5, com6, com7, com8, com9, com10, 
                                    com11, com12, com13, com14, com15, com16, com17, com18, com19, 
                                    com20, com21, com22, com23, com24, com25, com26, com27, com28, com29, com30, 
                                    school_schId, img1, img2, img3, img4) 
                                    VALUES (    
                                    ?,?,?,?,?,?,?,?,?,?,
                                    ?,?,?,?,?,?,?,?,?,?,
                                    ?,?,?,?,?,?,?,?,?,?,
                                    ?,?,?,?,?,?,?,?,?,?,
                                    ?,?,?,?,?,?,?,?,?,?,
                                    ?,?,?,?,?,?,?,?,?,?,
                                    ?,?,?,?,?) ";

        $prepareStatement = $this->conn->prepare($sqlInsertTest);
        if ($prepareStatement == TRUE) {
            $prepareStatement->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssibbbb",
                $choice1,
                $choice2,
                $choice3,
                $choice4,
                $choice5,
                $choice6,
                $choice7,
                $choice8,
                $choice9,
                $choice10,
                $choice11,
                $choice12,
                $choice13,
                $choice14,
                $choice15,
                $choice16,
                $choice17,
                $choice18,
                $choice19,
                $choice20,
                $choice21,
                $choice22,
                $choice23,
                $choice24,
                $choice25,
                $choice26,
                $choice27,
                $choice28,
                $choice29,
                $choice30,
                $comment1,
                $comment2,
                $comment3,
                $comment4,
                $comment5,
                $comment6,
                $comment7,
                $comment8,
                $comment9,
                $comment10,
                $comment11,
                $comment12,
                $comment13,
                $comment14,
                $comment15,
                $comment16,
                $comment17,
                $comment18,
                $comment19,
                $comment20,
                $comment21,
                $comment22,
                $comment23,
                $comment24,
                $comment25,
                $comment26,
                $comment27,
                $comment28,
                $comment29,
                $comment30,
                $schoolID, $image1, $image2, $image3, $image4);
        }
        try {
            $prepareStatement->execute();
        } catch (Exception $exception) {
            throw $exception;
        } finally {
            $prepareStatement->close();
        }
    }

    public function updateSchool($school)
    {

    }

    public function updateSchoolTest($school)
    {

    }

    public function selectAllData()
    {
        require_once 'Config.php';
        @$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $sql = " SELECT * FROM school ";
        mysqli_query($conn, $sql);
        return mysqli_fetch_all();
    }
}

?>