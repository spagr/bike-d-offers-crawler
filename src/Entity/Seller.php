<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SellerRepository")
 */
class Seller
{
	/**
	 * @var int
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var int
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $sourceUserId;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $sourceUsername;

	/**
	 * @var string|null
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $profileUrl;

	/**
	 * @var Collection|Offer[]
	 * @ORM\OneToMany(targetEntity="App\Entity\Offer", mappedBy="seller")
	 */
	private $offers;

	/**
	 * @var OfferSource|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\OfferSource", inversedBy="sellers")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $source;

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

	public function getSourceUserId(): ?int
	{
		return $this->sourceUserId;
	}

	public function setSourceUserId(int $sourceUserId): self
	{
		$this->sourceUserId = $sourceUserId;

		return $this;
	}

	public function getSourceUsername(): ?string
	{
		return $this->sourceUsername;
	}

	public function setSourceUsername(string $sourceUsername): self
	{
		$this->sourceUsername = $sourceUsername;

		return $this;
	}

	public function getProfileUrl(): ?string
	{
		return $this->profileUrl;
	}

	public function setProfileUrl(?string $profileUrl): self
	{
		$this->profileUrl = $profileUrl;

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
			$offer->setSeller($this);
		}

		return $this;
	}

	public function removeOffer(Offer $offer): self
	{
		if ($this->offers->contains($offer)) {
			$this->offers->removeElement($offer);
			// set the owning side to null (unless already changed)
			if ($offer->getSeller() === $this) {
				$offer->setSeller(null);
			}
		}

		return $this;
	}
}
