<?php 
namespace App\Entity;

class User {
    private int $idUser;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private string $phone_number;

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
     * Get the value of idUser
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     */
    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of phone_number
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     */
    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }
}