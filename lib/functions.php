<?php

use App\Entity\Delivery;

function asset(string $path)
{
    return BASE_URL . '/public/' . $path;
}

function constructUrl(string $path, array $params = [])
{
    $url = BASE_URL . $path;

    if ($params) {
        $url .= '?' . http_build_query($params);
    }

    return $url;
}
function dataSecure(string $data)
{
    $data = htmlspecialchars(strip_tags(trim($data)));
    return $data;
}

/* private string $departure_city;
private string $destination_city;
private string $departure_time;
private string $arrival_time;
private string $sending_date;
private string $transport_tool;
private int  $weight_limit;
private string $price; */

function isValid(Delivery $delivery)
{
    return $delivery->getDeparture_city() != "" && $delivery->getDestination_city() != ""
        && $delivery->getDeparture_time() != "" && $delivery->getArrival_time() != "" && $delivery->getSending_date() != ""
        && $delivery->getTransport_tool() != "" && $delivery->getWeight_limit() != 0 && $delivery->getPrice() != 0;
}
