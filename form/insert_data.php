<?php session_start();
include 'db_model/database.php';
$db = new database();
/** Check The Submit Type **/
if (isset($_POST["submitType"])) {
    /**
        this will make insert for the client information and will return object with the result [ resultState , Message ]
    **/
    if ($_POST["submitType"] == 'customerData') {
        $arr = array(
            'name'    => $_POST["name"],
            'address' => $_POST["address"],
            'city'    =>$_POST["city"],
            'addressNumber'  =>$_POST["addressNumber"],
            'testType' =>$_POST["testType"],
            'buildingType' =>$_POST["buildingType"],
            'propertyType' =>$_POST["propertyType"],
            'roomNum' =>$_POST["roomNum"],
            'buildingHeight' =>$_POST["buildingHeight"],
            'floor' =>$_POST["floor"],
            'entrance' =>$_POST["entrance"],
            'levels' =>$_POST["levels"],
            'wareHouse' =>$_POST["warehouse"],
            'parking' =>$_POST["parking"],
            'buildingNew' =>$_POST["buildingNew"],
            'buildingAge' =>$_POST["buildingAge"],
            'specifications' =>$_POST["specifications"],
            'claddingType' =>$_POST["claddingType"],
            'plansB' =>$_POST["plansB"],
            'fronts' =>$_POST["fronts"],
            'accordingPlan' =>$_POST["accordingPlan"],
            'changes' =>$_POST["changes"],
            'reciveDate' =>$_POST["reciveDate"],
            'entryDate' =>$_POST["reciveDate"],
            'price' =>$_POST["price"],
            'clientTel' =>$_POST["clientTel"],
            'clientMail' =>$_POST["clientMail"],
            );
        try {
            $db->db_connect();
            $result = $db->insert("client",$arr);
            $db->close();
            if ($result) {
                $_SESSION["user_id"] = $result;
                $obj = [TRUE , "Insert Is Done"];
                echo json_encode($obj);
            } else {
                $obj = [FALSE , "Some Wrong Happened"];
                echo json_encode($obj);
            }
        } catch (Exception $e) {
            $obj = [FALSE , $e->getMessage()];
            echo json_encode($obj);
        }
    } elseif ($_POST["submitType"] == 'reportData') {
        if (isset($_SESSION["user_id"])) {
            $arr = [
                'client_id'     => $_SESSION["user_id"],
                'room'          => $_POST['room'],
                'chapter'       => $_POST['chapter'],
                'title'    => $_POST['subChapter'],
                'notes'         => $_POST['notes'],
                'according_to'  => "according_value",
                'location'      => $_POST['location'],
                'picture'         => $_POST['photo'],
                'subChapterPrice' => $_POST['subChapterPrice'],
            ];
            try {
                $db->db_connect();
                $result = $db->insert("report",$arr);
                $db->close();
                if ($result) {
                    $obj = [TRUE , "Insert Is Done"];
                    echo json_encode($obj);
                } else {
                    $obj = [FALSE , "Some Wrong Happened"];
                    echo json_encode($obj);
                }
            } catch (Exception $e) {
                $obj = [FALSE , $e->getMessage()];
                echo json_encode($obj);
            }
        } else {
            $obj = [FALSE , "Some Wrong Happened"];
            echo json_encode($obj);
        }
    }
}