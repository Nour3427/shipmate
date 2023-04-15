<?php

namespace App\Entity;

use App\Entity\User;


class Delivery
{
    private int $idDelivery;
    private string $departure_city;
    private string $destination_city;
    private string $departure_time;
    private string $arrival_time;
    private string $sending_date;
    private string $transport_tool;
    private int  $weight_limit;
    private float $price;
    private User $user;

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
    public function getDeparture_city(): string
    {
        return $this->departure_city;
    }

    /**
     * Set the value of departure_city
     */
    public function setDeparture_city(string $departure_city): self
    {
        $this->departure_city = $departure_city;

        return $this;
    }

    /**
     * Get the value of destination_city
     */
    public function getDestination_city(): string
    {
        return $this->destination_city;
    }

    /**
     * Set the value of destination_city
     */
    public function setDestination_city(string $destination_city): self
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
    public function getDeparture_time(): string
    {
        return $this->departure_time;
    }

    /**
     * Set the value of departure_time
     */
    public function setDeparture_time(string $departure_time): self
    {
        $this->departure_time = $departure_time;

        return $this;
    }

    /**
     * Get the value of arrival_time
     */
    public function getArrival_time(): string
    {
        return $this->arrival_time;
    }

    /**
     * Set the value of arrival_time
     */
    public function setArrival_time(string $arrival_time): self
    {
        $this->arrival_time = $arrival_time;

        return $this;
    }

    /**
     * Get the value of sending_date
     */
    public function getSending_date(): string
    {
        return $this->sending_date;
    }

    /**
     * Set the value of sending_date
     */
    public function setSending_date(string $sending_date): self
    {
        $this->sending_date = $sending_date;

        return $this;
    }

    /**
     * Get the value of weight_limit
     */
    public function getWeight_limit(): int
    {
        return $this->weight_limit;
    }

    /**
     * Set the value of weight_limit
     */
    public function setWeight_limit(int $weight_limit): self
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

    /**
     * Get the value of transport_tool
     */
    public function getTransport_tool(): string
    {
        return $this->transport_tool;
    }

    /**
     * Set the value of transport_tool
     */
    public function setTransport_tool(string $transport_tool): self
    {
        $this->transport_tool = $transport_tool;

        return $this;
    }

}
