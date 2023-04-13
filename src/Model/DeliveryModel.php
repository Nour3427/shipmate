<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Entity\Delivery;
use App\Entity\User;


class DeliveryModel extends AbstractModel
{

    // insérer les livraisons proposées par les utilisateurs 

    function addDelivery(string $departure_city, string $destination_city, User $user,string $departure_time, string $arrival_time, string $sending_date, string $weight_limit, string $price, string $transport_tool)
    {

        $sql = 'INSERT INTO delivery 
    (departure_city, destination_city,user_id, $departure_time, $arrival_time, sending_date, weight_limit, price)
     VALUES (?,?,?,?,?,?,?,?,?)';

        $this->db->prepareAndExecute($sql, [$departure_city, $destination_city, $user, $departure_time, $arrival_time, $sending_date, $weight_limit, $price,$transport_tool]);
    }

    //récupérer toutes les livraisons proposées par la ville de départ et de destination 
    function getAllDeliveriesByDepartureCityAndDestinationCity($departure_city, $destination_city)
    {
        $sql = 'SELECT * FROM delivery as D INNER JOIN user as U ON D.user_id = U.idUser  
                where D.departure_city = ? AND  D.destination_city = ?';

        $results = $this->db->getAllResults($sql, [$departure_city, $destination_city]);
        $deliveries = [];
        foreach ($results as $result) {
            $result['user'] = new User($result);
            $deliveries = new Delivery($result);
        }
        return $deliveries;
    }

    
}
