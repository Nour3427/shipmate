<?php 
namespace App\Entity;
use App\Entity\Delivery;
use App\Entity\User;



class Request{
    private int $idRequest;
    private string $departure_city;
    private string $destination_city;
    private Delivery $delivery;
    private User $user;
    private string $sending_date;
    private string  $weight;
    private string  $status;

    
    
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
     * Get the value of weight
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */
    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
    