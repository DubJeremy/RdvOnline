<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
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
    private $jobName;

    /**
     * @ORM\ManyToOne(targetEntity=ProCategorie::class)
     */
    private $idProCategorie;

    public function __toString()
    {
        return $this->jobName;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobName(): ?string
    {
        return $this->jobName;
    }

    public function setJobName(string $jobName): self
    {
        $this->jobName = $jobName;

        return $this;
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
}
