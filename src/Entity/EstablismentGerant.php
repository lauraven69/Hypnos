<?php

namespace App\Entity;

use App\Repository\EstablismentGerantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstablismentGerantRepository::class)
 */
class EstablismentGerant
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $nb_suite;

    public function __toString(): string
    {
        return $this->name.' '.$this->image;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNbSuite(): ?string
    {
        return $this->nb_suite;
    }

    public function setNbSuite(string $nb_suite): self
    {
        $this->nb_suite = $nb_suite;

        return $this;
    }
}
