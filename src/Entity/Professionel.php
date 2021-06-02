<?php

namespace App\Entity;

use App\Repository\ProfessionelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfessionelRepository::class)
 */
class Professionel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ProCategorie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProCategorie;

    /**
     * @ORM\ManyToOne(targetEntity=Job::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idJob;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CompanyName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProCategorie(): ?ProCategorie
    {
        return $this->idProCategorie;
    }

    public function setIdProCategorie(?ProCategorie $idProCategorie): self
    {
        $this->idProCategorie = $idProCategorie;

        return $this;
    }

    public function getIdJob(): ?Job
    {
        return $this->idJob;
    }

    public function setIdJob(?Job $idJob): self
    {
        $this->idJob = $idJob;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }

    public function setCompanyName(?string $CompanyName): self
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }
}
