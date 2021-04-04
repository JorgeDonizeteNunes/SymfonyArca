<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    private $usuario;

    /**
     * @var text
     * @ORM\Column(type="string", length=100)
     */
    private $senha;

    /**
     * @return mixed
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param mixed $id
     * @return User
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsuario(): string
    {
      return $this->usuario;
    }

    /**
     * @param string $usuario
     * @return User
     */
    public function setUsuario(string $usuario): User
    {
      $this->usuario = $usuario;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenha(): string
    {
      return $this->senha;
    }

    /**
     * @param string $senha
     * @return User
     */
    public function setSenha(string $senha): User
    {
      $this->senha = $senha;
      return $this;
    }
}
