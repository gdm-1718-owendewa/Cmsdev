<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"Name"}, message="There is already an account with this Name")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Function;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Position = 'User';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cost = 0 ;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    /**
     * @ORM\Column(type="integer", nullable=true ,options={"default" : 15})
     */
    private $hourrate;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" : true})
     */
    private $active;

    /**
     * @ORM\Column(type="integer",nullable=true, options={"default" : 1})
     */
    private $Transportrate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->Tel;
    }

    public function setTel(string $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getFunction(): ?string
    {
        return $this->Function;
    }

    public function setFunction(string $Function): self
    {
        $this->Function = $Function;
        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->Position;
    }

    public function setPosition(string $Position): self
    {
        $this->Position = $Position;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->Cost;
    }

    public function setCost(string $Cost): self
    {
        $this->Cost = $Cost;

        return $this;
    }

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return string[] The user roles
     */
    public function getRoles()
    {
        // TODO: Implement getRoles() method.
        return array('User', 'Admin');
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string|null The encoded password if any
     */
    public function getPassword()
    {
        return (string) $this->Password;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return (string) $this->Name;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getHourrate(): ?int
    {
        return $this->hourrate;
    }

    public function setHourrate(?int $hourrate): self
    {
        $this->hourrate = $hourrate;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getTransportrate(): ?int
    {
        return $this->Transportrate;
    }

    public function setTransportrate(int $Transportrate): self
    {
        $this->Transportrate = $Transportrate;

        return $this;
    }
}
