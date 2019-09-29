<?php

class Personnage
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @throws Exception
     */
    public function setAge(int $age): void
    {
        if(is_int($age) && $age>=1 && $age <= 120){
            $this->age = $age;
        }
        else{
            throw new Exception("L'age doit etre superieur à 1 et inférieur à 120");
        }
    }

    /**
     * @var integer
     */
    private $age;

    public function hello ()
    {
        return "Bonjour $this->firstname $this->lastname tu as $this->age ans.";
    }
}