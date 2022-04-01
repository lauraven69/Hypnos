<?php

namespace App\Entity;

use App\Repository\SuiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SuiteRepository::class)
 */
class Suite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Gerant::class, inversedBy="suites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $iserId;

    public function __toString(): string
    {
        return (string) $this->getIserId();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIserId(): ?gerant
    {
        return $this->iserId;
    }

    public function setIserId(?gerant $iserId): self
    {
        $this->iserId = $iserId;

        return $this;
    }
}
