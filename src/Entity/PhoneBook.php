<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PhoneBookRepository")
 */
class PhoneBook
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="integer")
     */
    protected $phoneNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $countryCode;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $timezoneName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $insertedOn;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updatedOn;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getInsertedOn()
    {
        return $this->insertedOn;
    }

    /**
     * @param mixed $insertedOn
     */
    public function setInsertedOn($insertedOn)
    {
        $this->insertedOn = $insertedOn;
    }

    /**
     * @return mixed
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * @param mixed $updatedOn
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;
    }

    /**
     * @return mixed
     */
    public function getTimezoneName()
    {
        return $this->timezoneName;
    }

    /**
     * @param mixed $timezoneName
     */
    public function setTimezoneName($timezoneName)
    {
        $this->timezoneName = $timezoneName;
    }

}
