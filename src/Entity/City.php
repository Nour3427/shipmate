<?php 
namespace App\Entity;
class City{
    private int $idCity;
    private string $city_name;
    private string $country_name;
    

    /**
     * Get the value of idCity
     */
    public function getIdCity(): int
    {
        return $this->idCity;
    }

    /**
     * Set the value of idCity
     */
    public function setIdCity(int $idCity): self
    {
        $this->idCity = $idCity;

        return $this;
    }

    /**
     * Get the value of city_name
     */
    public function getCityName(): string
    {
        return $this->city_name;
    }

    /**
     * Set the value of city_name
     */
    public function setCityName(string $city_name): self
    {
        $this->city_name = $city_name;

        return $this;
    }

    /**
     * Get the value of country_name
     */
    public function getCountryName(): string
    {
        return $this->country_name;
    }

    /**
     * Set the value of country_name
     */
    public function setCountryName(string $country_name): self
    {
        $this->country_name = $country_name;

        return $this;
    }
}
// public function __construct(int $idCity,string $firstname,string $lastname)
//     {
//     $this->idUser = $idUser;
//     $this->firstname = $firstname;
//     $this->lastname = $lastname;
//     }
