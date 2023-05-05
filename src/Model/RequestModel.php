<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Entity\Delivery;
use App\Entity\Request;
use App\Entity\User;

class RequestModel extends AbstractModel
{

    // function getRequestByUserID($idUser)
    // {
    //     $sql = 'SELECT * FROM delivery_request as DR INNER JOIN user as U ON DR.user_id = U.idUser 
    //     INNER JOIN delivery as D ON DR.delivery_id = D.idDelivery where DR.user_id=?';

    //     $results = $this->db->getAllResults($sql, [$idUser]);
    
    //     $requests = [];
    //     foreach ($results as $result) {
    //         $resultRequest['user'] = new User($result);
    //         $result['delivery'] = new Delivery($result);
    //         $requests[] = new Request($result);
    //     }
    //     return $requests;
    // }
    function getRequestByUserID($idUser)
    {
        $sql = 'SELECT * FROM delivery_request as DR INNER JOIN user as U ON DR.user_id = U.idUser 
        INNER JOIN delivery as D ON DR.delivery_id = D.idDelivery where DR.user_id=?';

        $results = $this->db->getAllResults($sql, [$idUser]);
       

        $userModel = new UserModel();
        $requests = [];
        foreach ($results as $result) {
            $result['user'] =  $userModel->getUserById($result['user_id']);
            $result['delivery'] = new Delivery($result);
            $requests[] = new Request($result);
        }
        return $requests;
    }

    function getRequests($idDelivery)
    {
        $sql = 'SELECT * FROM delivery_request as D INNER JOIN user as U ON D.user_id = U.idUser where D.delivery_id = ? ';
        $results = $this->db->getAllResults($sql, [$idDelivery]);
        $requests = [];
        foreach ($results as $result) {
            $result['user'] = new User($result);
            $requests[] = new Request($result);
        }
        return $requests;
    }

    function createRequest($weight,$user_id,$delivery_id,$status="En attente")
    {
        $sql = 'INSERT INTO delivery_request  
        (weight,user_id,delivery_id,status)
         VALUES (?,?,?,?)';

        $this->db->prepareAndExecute($sql, [$weight,$user_id,$delivery_id,$status]);

    }

    function updateRequest($status)
    {
        $sql = 'UPDATE delivery_request set status= ?';
        $this->db->prepareAndExecute($sql, [$status]);
    }
//     function updateRequest($status, $request_id)
// {
//     $sql = 'UPDATE delivery_request SET status = ? WHERE idRequest = ?';
//     $this->db->prepareAndExecute($sql, [$status, $request_id]);
// }

function getAllRequests(){
    $sql = 'SELECT * FROM delivery_request as D INNER JOIN user as U ON D.user_id = U.idUser';
        $results = $this->db->getAllResults($sql);
        $requests = [];
        foreach ($results as $result) {
            $result['user'] = new User($result);
            $requests[] = new Request($result);
            $result['delivery'] = new Delivery($result);
            
        }
        return $requests;
}
function deleteRequest($idRequest){
    $sql = ' DELETE FROM delivery_request WHERE idRequest=? ';
    $this->db->prepareAndExecute($sql, [$idRequest]);

}

}
