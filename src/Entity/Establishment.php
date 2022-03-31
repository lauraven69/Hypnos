<?php

namespace App\Entity;

use App\Repository\EstablishmentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstablishmentRepository::class)
 */
class Establishment
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
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $suite;

    /**
     * @ORM\OneToOne(targetEntity=gerant::class, inversedBy="establishment", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $iserId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSuite(): ?string
    {
        return $this->suite;
    }

    public function setSuite(string $suite): self
    {
        $this->suite = $suite;

        return $this;
    }

    public function getIserId(): ?gerant
    {
        return $this->iserId;
    }

    public function setIserId(gerant $iserId): self
    {
        $this->iserId = $iserId;

        return $this;
    }
}
