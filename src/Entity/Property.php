<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use App\Entity\Traits\Timestampable;
use App\Repository\PropertyRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Entity(repositoryClass=PropertyRepository::class)
 * @ORM\Table(name="properties")
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity("title")
 */
class Property
{
    const TYPE = [
        0 => 'Suite classique',
        1 => 'Suite panoramique',
        2 => 'Suite présidentielle',
    ];

    const STATUS = [
        0 => 'Libre',
        1 => 'Réservé',
    ];

    use  Timestampable;


    /**
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
     private $id;

    /**
     * @ORM\Column(type="string", length= 255)
     * @Assert\NotBlank(message="Veuillez donner un titre a votre établissement.")
     * @Assert\Length(min=4)
     */
    
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Une petite description de l'établissement.")
     * @Assert\Length(min=16)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="La superficie est obligatoire.")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Le nombre de pièces est obligatoire.")
     */
    private $rooms;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="La nombre de chambres est obligatoire.")
     */
    private $bedrooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $floor;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Dites dans quelle ville se trouve votre établissement.")
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="L'adresse précise de votre établissement.")
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     * @Assert\NotBlank(message="Mentionnez si c'est réservé ou libre pour les dates sélectionnées.")
     */
    private $sold = false;

    /**
     * @ORM\Column(type="integer")
     */
    private $parking;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Obligatoire.")
     */
    private $status;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Mentionner le type de chambre.")
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Mettez un prix pour la location.")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Dites dans quel département se trouve l'établissement.")
     */
    private $country;

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

    public function getSlug(): string
    {
        return (new Slugify())->slugify($this->title);
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getBedrooms(): ?int
    {
        return $this->bedrooms;
    }

    public function setBedrooms(int $bedrooms): self
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    public function getFloor(): ?int
    {
        return $this->floor;
    }

    public function setFloor(int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getSold(): ?bool
    {
        return $this->sold;
    }

    public function setSold(bool $sold): self
    {
        $this->sold = $sold;

        return $this;
    }

    public function getParking(): ?int
    {
        return $this->parking;
    }

    public function setParking(int $parking): self
    {
        $this->parking = $parking;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStatusType(): ?string
    {
    return self::STATUS[$this->status];
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTypeType(): ?string
    {
    return self::TYPE[$this->type];
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }
    
    public function getFormattedPrice(): string 
    {
        return number_format($this->price, 0, '',' ');
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
