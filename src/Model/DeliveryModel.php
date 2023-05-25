<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Entity\Delivery;
use App\Entity\Request;
use App\Entity\User;



class DeliveryModel extends AbstractModel
{
    // private Requestmodel $requestModel ;
    // $requestModel = new RequestModel().
    // public function __construct()
    // {
    //     $this->requestModel = new RequestModel();
    // }
    // insérer les livraisons proposées par les utilisateurs 

    function addDelivery(Delivery $delivery)
    {

        $sql = 'INSERT INTO delivery 
    (departure_city, destination_city,user_id, departure_time, arrival_time, sending_date, weight_limit, remaining_weight, price, transport_tool)
     VALUES (?,?,?,?,?,?,?,?,?,?)';

        $this->db->prepareAndExecute($sql, [
            $delivery->getDeparture_city(), $delivery->getDestination_city(),
            $delivery->getUser()->getIdUser(), $delivery->getDeparture_time(), $delivery->getArrival_time(),
            $delivery->getSending_date(), $delivery->getWeight_limit(), $delivery->getRemaining_Weight(), $delivery->getPrice(), $delivery->getTransport_tool()
        ]);
    }

    //récupérer toutes les livraisons proposées par la ville de départ et de destination 
    function getDeliveries($departure_city, $destination_city, $date, $weight)
    {
        $sql = 'SELECT * FROM delivery as D INNER JOIN user as U ON D.user_id = U.idUser  
                where D.departure_city = ? AND  D.destination_city = ? AND D.sending_date = ? AND D.weight_limit >= ?';

        $results = $this->db->getAllResults($sql, [$departure_city, $destination_city, $date, $weight]);
        $deliveries = [];
        foreach ($results as $result) {
            $result['user'] = new User($result);
            $deliveries[] = new Delivery($result);
        }
        return $deliveries;
    }

    //récupérer toutes les livraisons proposées par la ville de départ et de destination 
    function getDelivery($id)
    {
        $sql = 'SELECT * FROM delivery as D INNER JOIN user as U ON D.user_id = U.idUser  
         where D.idDelivery = ?';

        $result = $this->db->getOneResult($sql, [$id]);
        // if (!$result) {
        //     return null;
        // }
        $result['user'] = new User($result);
        $delivery = new Delivery($result);
        return $delivery;
    }

    function getDeliveriesWithRequests($userID)
    {
        $sql = 'SELECT * FROM delivery as D INNER JOIN user as U ON D.user_id = U.idUser  
         where U.idUser = ?';

        $results = $this->db->getAllResults($sql, [$userID]);
        if (!$results) {
            return null;
        }
        $deliveries = [];
        $RequestModel = new RequestModel();
        foreach ($results as $result) {
             $result['user'] = new User($result);
             $result['requests'] = $RequestModel->getRequests($result['idDelivery']); 
             $deliveries[] = new Delivery($result);
        }
        return $deliveries;
    }
    function updateDelivery($remaining_weight, $idDelivery)
    {
        $sql = 'UPDATE delivery SET remaining_weight = ? WHERE idDelivery = ?';
        $this->db->prepareAndExecute($sql, [$remaining_weight, $idDelivery]);
    }

    function getAllDeliveries()
    {
        $sql = 'SELECT * FROM delivery as D INNER JOIN user as U ON D.user_id = U.idUser ';
        $results = $this->db->getAllResults($sql);
        $deliveries = [];
        foreach ($results as $result) {
            $result['user'] = new User($result);
            $deliveries[] = new Delivery($result);
        }
        return $deliveries;
    }
    function deleteDelivey($idDelivery)
    {
        $sql = ' DELETE FROM delivery WHERE idDelivery=? ';
        $this->db->prepareAndExecute($sql, [$idDelivery]);
    }
}
