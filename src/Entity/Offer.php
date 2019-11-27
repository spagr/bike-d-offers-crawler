<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OfferRepository")
 */
class Offer
{
	/**
	 * @var string|null
	 * @ORM\Column(type="string", length=1000)
	 */
	private $url;

	/**
	 * @var int|null
	 * @ORM\Column(type="bigint", nullable=true)
	 */
	private $sourceItemId;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $country;

	/**
	 * @var string|null
	 * @ORM\Column(type="string", length=3, nullable=true)
	 */
	private $currency;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=1000)
	 */
	private $title;

	/**
	 * @var string|null
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $description;

	/**
	 * @var float|null
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	private $priceCZK;

	/**
	 * @var float|null
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	private $price;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $location;
	/**
	 * @var int
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $color;

	/**
	 * @var Collection|OfferPicture[]
	 * @ORM\OneToMany(targetEntity="App\Entity\OfferPicture", mappedBy="offer")
	 */
	private $offerPictures;

	/**
	 * @var BikeModel|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\BikeModel", inversedBy="offers")
	 */
	private $model;

	/**
	 * @var OfferSource|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\OfferSource", inversedBy="offers")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $source;

	/**
	 * @var DateTimeInterface|null
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $offerDate;

	/**
	 * @var DateTimeInterface
	 * @ORM\Column(type="datetime")
	 */
	private $createdAt;

	/**
	 * @var DateTimeInterface|null
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $updatedAt;

	/**
	 * @var Seller|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\Seller", inversedBy="offers")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $seller;

	/**
	 * @var Brand|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\Brand", inversedBy="offers")
	 */
	private $brand;

	public function __construct()
	{
		$this->offerPictures = new ArrayCollection();
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getSource(): ?OfferSource
	{
		return $this->source;
	}

	public function setSource(?OfferSource $offerSource): self
	{
		$this->source = $offerSource;

		return $this;
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

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(?string $description): self
	{
		$this->description = $description;

		return $this;
	}

	public function getBrand(): ?Brand
	{
		return $this->brand;
	}

	public function setBrand(?Brand $brand): self
	{
		$this->brand = $brand;

		return $this;
	}

	public function getModel(): ?BikeModel
	{
		return $this->model;
	}

	public function setModel(?BikeModel $bikeModel): self
	{
		$this->model = $bikeModel;

		return $this;
	}

	public function getColor(): ?string
	{
		return $this->color;
	}

	public function setColor(string $color): self
	{
		$this->color = $color;

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

	public function getLocation(): ?string
	{
		return $this->location;
	}

	public function setLocation(string $location): self
	{
		$this->location = $location;

		return $this;
	}

	public function getOfferDate(): ?DateTimeInterface
	{
		return $this->offerDate;
	}

	public function setOfferDate(?DateTimeInterface $offerDate): self
	{
		$this->offerDate = $offerDate;

		return $this;
	}

	public function getCreatedAt(): ?DateTimeInterface
	{
		return $this->createdAt;
	}

	public function setCreatedAt(DateTimeInterface $createdAt): self
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	public function getUpdatedAt(): ?DateTimeInterface
	{
		return $this->updatedAt;
	}

	public function setUpdatedAt(?DateTimeInterface $updatedAt): self
	{
		$this->updatedAt = $updatedAt;

		return $this;
	}

	public function getSeller(): ?Seller
	{
		return $this->seller;
	}

	public function setSeller(?Seller $seller): self
	{
		$this->seller = $seller;

		return $this;
	}

	public function getPrice(): ?float
	{
		return $this->price;
	}

	public function setPrice(?float $price): self
	{
		$this->price = $price;

		return $this;
	}

	public function getCurrency(): ?string
	{
		return $this->currency;
	}

	public function setCurrency(?string $currency): self
	{
		$this->currency = $currency;

		return $this;
	}

	public function getPriceCZK(): ?float
	{
		return $this->priceCZK;
	}

	public function setPriceCZK(?float $priceCZK): self
	{
		$this->priceCZK = $priceCZK;

		return $this;
	}

	/**
	 * @return Collection|OfferPicture[]
	 */
	public function getOfferPictures(): Collection
	{
		return $this->offerPictures;
	}

	public function addOfferPicture(OfferPicture $offerPicture): self
	{
		if (! $this->offerPictures->contains($offerPicture)) {
			$this->offerPictures[] = $offerPicture;
			$offerPicture->setOffer($this);
		}

		return $this;
	}

	public function removeOfferPicture(OfferPicture $offerPicture): self
	{
		if ($this->offerPictures->contains($offerPicture)) {
			$this->offerPictures->removeElement($offerPicture);
			// set the owning side to null (unless already changed)
			if ($offerPicture->getOffer() === $this) {
				$offerPicture->setOffer(null);
			}
		}

		return $this;
	}

	public function getUrl(): ?string
	{
		return $this->url;
	}

	public function setUrl(string $url): self
	{
		$this->url = $url;

		return $this;
	}

	public function getSourceItemId(): ?int
	{
		return $this->sourceItemId;
	}

	public function setSourceItemId(?int $sourceItemId): self
	{
		$this->sourceItemId = $sourceItemId;

		return $this;
	}
}
