<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BrandRepository")
 */
class Brand
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
	 * @var Collection|BikeModel[]
	 * @ORM\OneToMany(targetEntity="App\Entity\BikeModel", mappedBy="brand")
	 */
	private $bikeModels;

	/**
	 * @var Collection|Offer[]
	 * @ORM\OneToMany(targetEntity="App\Entity\Offer", mappedBy="brand")
	 */
	private $offers;

	/**
	 * @var Collection|OfferPicture[]
	 * @ORM\OneToMany(targetEntity="App\Entity\OfferPicture", mappedBy="brand")
	 */
	private $offerPictures;

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
		$this->bikeModels = new ArrayCollection();
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
	 * @return Collection|BikeModel[]
	 */
	public function getBikeModels(): Collection
	{
		return $this->bikeModels;
	}

	public function addBikeModel(BikeModel $bikeModel): self
	{
		if (! $this->bikeModels->contains($bikeModel)) {
			$this->bikeModels[] = $bikeModel;
			$bikeModel->setBrand($this);
		}

		return $this;
	}

	public function removeBikeModel(BikeModel $bikeModel): self
	{
		if ($this->bikeModels->contains($bikeModel)) {
			$this->bikeModels->removeElement($bikeModel);
			// set the owning side to null (unless already changed)
			if ($bikeModel->getBrand() === $this) {
				$bikeModel->setBrand(null);
			}
		}

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
			$offer->setBrand($this);
		}

		return $this;
	}

	public function removeOffer(Offer $offer): self
	{
		if ($this->offers->contains($offer)) {
			$this->offers->removeElement($offer);
			// set the owning side to null (unless already changed)
			if ($offer->getBrand() === $this) {
				$offer->setBrand(null);
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
			$offerPicture->setBrand($this);
		}

		return $this;
	}

	public function removeOfferPicture(OfferPicture $offerPicture): self
	{
		if ($this->offerPictures->contains($offerPicture)) {
			$this->offerPictures->removeElement($offerPicture);
			// set the owning side to null (unless already changed)
			if ($offerPicture->getBrand() === $this) {
				$offerPicture->setBrand(null);
			}
		}

		return $this;
	}
}
