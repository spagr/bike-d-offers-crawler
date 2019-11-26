<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BikeModelRepository")
 */
class BikeModel
{
	/**
	 * @var int
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $name;

	/**
	 * @var int
	 * @ORM\Column(type="integer")
	 */
	private $year;

	/**
	 * @var Collection|Offer[]
	 * @ORM\OneToMany(targetEntity="App\Entity\Offer", mappedBy="model")
	 */
	private $offers;

	/**
	 * @var Collection|OfferPicture[]
	 * @ORM\OneToMany(targetEntity="App\Entity\OfferPicture", mappedBy="model")
	 */
	private $offerPictures;

	/**
	 * @var Brand|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\Brand", inversedBy="bikeModels")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $brand;

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

	public function __construct()
	{
		$this->offers = new ArrayCollection();
		$this->offerPictures = new ArrayCollection();
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

	public function getYear(): ?int
	{
		return $this->year;
	}

	public function setYear(int $year): self
	{
		$this->year = $year;

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

	/**
	 * @return Collection|Offer[]
	 */
	public function getOffers(): Collection
	{
		return $this->offers;
	}

	public function addOffer(Offer $offer): self
	{
		if (! $this->offers->contains($offer)) {
			$this->offers[] = $offer;
			$offer->setModel($this);
		}

		return $this;
	}

	public function removeOffer(Offer $offer): self
	{
		if ($this->offers->contains($offer)) {
			$this->offers->removeElement($offer);
			// set the owning side to null (unless already changed)
			if ($offer->getModel() === $this) {
				$offer->setModel(null);
			}
		}

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
			$offerPicture->setModel($this);
		}

		return $this;
	}

	public function removeOfferPicture(OfferPicture $offerPicture): self
	{
		if ($this->offerPictures->contains($offerPicture)) {
			$this->offerPictures->removeElement($offerPicture);
			// set the owning side to null (unless already changed)
			if ($offerPicture->getModel() === $this) {
				$offerPicture->setModel(null);
			}
		}

		return $this;
	}
}
