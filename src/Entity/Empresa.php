<?php

namespace App\Entity;

use App\Repository\EmpresaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpresaRepository::class)
 */
class Empresa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoria", inversedBy="Categoria")
     */
    private $categoria;


    /**
     * @var string
     * @ORM\Column(type="string", length=14)
     */
    private $phone;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $address;

    /**
     * @var string
     * @ORM\Column(type="string", length=9)
     */
    private $zipcode;

     /**
     * @var string
     * @ORM\Column(type="string", length=40)
     */
    private $city;
    /**
     * @var string
     * @ORM\Column(type="string", length=2)
     */
    private $state;

    /**
     * @var text
     * @ORM\Column(type="text")
     */
    
    private $description;


    /**
     * @return mixed
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param mixed $id
     * @return Empresa
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return Empresa
     */
    public function setTitle(string $title): Empresa
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return Empresa
     */
    public function setPhone(string $phone): Empresa
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return Empresa
     */
    public function setAddress(string $address): Empresa
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
      return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return Empresa
     */
    public function setZipcode(string $zipcode): Empresa
    {
      $this->zipcode = $zipcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return Empresa
     */
    public function setCity(string $city): Empresa
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return Empresa
     */
    public function setState(string $state): Empresa
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return Empresa
     */
    public function setDescription(string $description): Empresa
    {
      $this->description = $description;
      return $this;
    }

}
