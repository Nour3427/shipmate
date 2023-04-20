<?php 
namespace App\Entity;
use App\Entity\Delivery;
use App\Entity\User;



class Request{
    private int $idRequest;
    private Delivery $delivery;
    private User $user;
    private int  $weight;
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
    

  