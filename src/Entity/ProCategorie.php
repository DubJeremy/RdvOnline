<?php

namespace App\Entity;

use App\Repository\ProCategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProCategorieRepository::class)
 */
class ProCategorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameCategorie;
    
    public function __toString()
    {
        return $this->nameCategorie;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCategorie(): ?string
    {
        return $this->nameCategorie;
    }

    public function setNameCategorie(string $nameCategorie): self
    {
        $this->nameCategorie = $nameCategorie;

        return $this;
    }
}
