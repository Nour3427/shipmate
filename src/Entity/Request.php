<?php 
namespace App\Entity;
use App\Entity\City;
use App\Entity\Delivery;
use DateTimeImmutable;


class Request{
    private int $idRequest;
    private City $departure_city;
    private City $destination_city;
    private Delivery $delivery;
    private User $user;
    private DateTimeImmutable $sending_date;
    private int  $weight;
    
    public function __construct(array $data = [])
    {
        foreach ($data as $propertyName => $value) {
            $setter = 'set' . ucfirst($propertyName);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    } 
    /**
     * Get the value of idRequest
     */
    public function getIdRequest(): int
    {
        return $this->idRequest;
    }

    /**
     * Set the value of idRequest
     */
    public function setIdRequest(int $idRequest): self
    {
        $this->idRequest = $idRequest;

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
     * Get the value of delivery
     */
    public function getDelivery(): Delivery
    {
        return $this->delivery;
    }

    /**
     * Set the value of delivery
     */
    public function setDelivery(Delivery $delivery): self
    {
        $this->delivery = $delivery;

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
     * Get the value of sending_date
     */
    public function getSendingDate(): DateTimeImmutable
    {
        return $this->sending_date;
    }

    /**
     * Set the value of sending_date
     */
    public function setSendingDate(DateTimeImmutable $sending_date): self
    {
        $this->sending_date = $sending_date;

        return $this;
    }

    /**
     * Get the value of weight
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
