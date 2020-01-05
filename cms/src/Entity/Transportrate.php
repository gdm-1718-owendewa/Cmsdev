<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransportrateRepository")
 */
class Transportrate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal")
     */
    private $Price;

    /**
     * @ORM\Column(type="integer", nullable=true )
     */
    private $User_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->User_id;
    }

    public function setUserId(int $User_id): self
    {
        $this->User_id = $User_id;

        return $this;
    }
}
