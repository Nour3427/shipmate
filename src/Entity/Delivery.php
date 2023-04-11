<?php

namespace App\Entity;

use App\Entity\City;
use App\Entity\User;
use DateTimeImmutable;


class Delivery
{
    private int $idDelivery;
    private City $departure_city;
    private City $destination_city;
    private User $user;
    private DateTimeImmutable $departure_time;
    private DateTimeImmutable $arrival_time;
    private DateTimeImmutable $delivery_date;
    private int  $weight_limit;
    private float $price;

    // data est un tableau qui contient toutes les colonnes de la table DB "Delivery" et leur valeurs
    public function __construct(array $data = [])
    {
        // propertyName est le nom de la colonne 
        // value est la valeur de la colonne
        // ex : data['toto'] = 'tata' -> ICI propertyName = toto et value = tata
        foreach ($data as $propertyName => $value) {
            $setter = 'set' . ucfirst($propertyName);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }
    /**
     * Get the value of idDelivery
     */
    public function getIdDelivery(): int
    {
        return $this->idDelivery;
    }

    /**
     * Set the value of idDelivery
     */
    public function setIdDelivery(int $idDelivery): self
    {
        $this->idDelivery = $idDelivery;

        return $this;
    }

    /**
     * Get the value of departure_city
     */
    public function getDepartureCity(): City
    {
        return $this->departure_city;
    }

    /**
     * Set the value of departure_city
     */
    public function setDepartureCity(City $departure_city): self
    {
        $this->departure_city = $departure_city;

        return $this;
    }

    /**
     * Get the value of destination_city
     */
    public function getDestinationCity(): City
    {
        return $this->destination_city;
    }

    /**
     * Set the value of destination_city
     */
    public function setDestinationCity(City $destination_city): self
    {
        $this->destination_city = $destination_city;

        return $this;
    }

    /**
     * Get the value of user
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of departure_time
     */
    public function getDepartureTime(): DateTimeImmutable
    {
        return $this->departure_time;
    }

    /**
     * Set the value of departure_time
     */
    public function setDepartureTime(DateTimeImmutable $departure_time): self
    {
        $this->departure_time = $departure_time;

        return $this;
    }

    /**
     * Get the value of arrival_time
     */
    public function getArrivalTime(): DateTimeImmutable
    {
        return $this->arrival_time;
    }

    /**
     * Set the value of arrival_time
     */
    public function setArrivalTime(DateTimeImmutable $arrival_time): self
    {
        $this->arrival_time = $arrival_time;

        return $this;
    }

    /**
     * Get the value of delivery_date
     */
    public function getDeliveryDate(): DateTimeImmutable
    {
        return $this->delivery_date;
    }

    /**
     * Set the value of delivery_date
     */
    public function setDeliveryDate(DateTimeImmutable $delivery_date): self
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    /**
     * Get the value of weight_limit
     */
    public function getWeightLimit(): int
    {
        return $this->weight_limit;
    }

    /**
     * Set the value of weight_limit
     */
    public function setWeightLimit(int $weight_limit): self
    {
        $this->weight_limit = $weight_limit;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
