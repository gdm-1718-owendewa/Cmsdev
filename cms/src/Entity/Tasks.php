<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TasksRepository")
 */
class Tasks
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Employee_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Client_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Start;

    /**
     * @ORM\Column(type="datetime")
     */
    private $End;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Break;

    /**
     * @ORM\Column(type="text")
     */
    private $Activities;

    /**
     * @ORM\Column(type="text")
     */
    private $Materials;

    /**
     * @ORM\Column(type="integer")
         */
    private $Company_id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Traveldistance;

    /**
     * @ORM\Column(type="bigint")
     */
    private $date_diff;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Currentday;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeId(): ?int
    {
        return $this->Employee_id;
    }

    public function setEmployeeId(int $Employee_id): self
    {
        $this->Employee_id = $Employee_id;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->Client_id;
    }

    public function setClientId(int $Client_id): self
    {
        $this->Client_id = $Client_id;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->Start;
    }

    public function setStart(\DateTimeInterface $Start): self
    {
        $this->Start = $Start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->End;
    }

    public function setEnd(\DateTimeInterface $End): self
    {
        $this->End = $End;

        return $this;
    }

    public function getBreak(): ?string
    {
        return $this->Break;
    }

    public function setBreak(string $Break): self
    {
        $this->Break = $Break;

        return $this;
    }

    public function getActivities(): ?string
    {
        return $this->Activities;
    }

    public function setActivities(string $Activities): self
    {
        $this->Activities = $Activities;

        return $this;
    }

    public function getMaterials(): ?string
    {
        return $this->Materials;

    }

    public function setMaterials(string $Materials): self
    {
        $this->Materials = $Materials;

        return $this;
    }

    public function getCompanyId(): ?int
    {
        return $this->Company_id;
    }

    public function setCompanyId(int $Company_id): self
    {
        $this->Company_id = $Company_id;

        return $this;
    }

    public function getTraveldistance(): ?string
    {
        return $this->Traveldistance;
    }

    public function setTraveldistance(string $Traveldistance): self
    {
        $this->Traveldistance = $Traveldistance;

        return $this;
    }

    public function getDateDiff(): ?string
    {
        return $this->date_diff;
    }

    public function setDateDiff(string $date_diff): self
    {
        $this->date_diff = $date_diff;

        return $this;
    }

    public function getCurrentday(): ?string
    {
        return $this->Currentday;
    }

    public function setCurrentday(string $Currentday): self
    {
        $this->Currentday = $Currentday;

        return $this;
    }
}
