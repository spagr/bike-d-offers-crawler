<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OfferSourceRepository")
 */
class OfferSource
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
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $baseUrl;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $crawlerClass;

	/**
	 * @var Collection|Offer[]
	 * @ORM\OneToMany(targetEntity="App\Entity\Offer", mappedBy="source")
	 */
	private $offers;

	/**
	 * @var Collection|Seller[]
	 * @ORM\OneToMany(targetEntity="App\Entity\Seller", mappedBy="source")
	 */
	private $sellers;

	/**
	 * @var DateTimeInterface
	 * @ORM\Column(type="datetime")
	 */
	private $createdAt;

	public function __construct()
	{
		$this->offers = new ArrayCollection();
		$this->sellers = new ArrayCollection();
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

	public function getBaseUrl(): ?string
	{
		return $this->baseUrl;
	}

	public function setBaseUrl(string $baseUrl): self
	{
		$this->baseUrl = $baseUrl;

		return $this;
	}

	public function getCrawlerClass(): ?string
	{
		return $this->crawlerClass;
	}

	public function setCrawlerClass(string $crawlerClass): self
	{
		$this->crawlerClass = $crawlerClass;

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
			$offer->setSource($this);
		}

		return $this;
	}

	public function removeOffer(Offer $offer): self
	{
		if ($this->offers->contains($offer)) {
			$this->offers->removeElement($offer);
			// set the owning side to null (unless already changed)
			if ($offer->getSource() === $this) {
				$offer->setSource(null);
			}
		}

		return $this;
	}

	/**
	 * @return Collection|Seller[]
	 */
	public function getSellers(): Collection
	{
		return $this->sellers;
	}

	public function addSeller(Seller $seller): self
	{
		if (! $this->sellers->contains($seller)) {
			$this->sellers[] = $seller;
			$seller->setSource($this);
		}

		return $this;
	}

	public function removeSeller(Seller $seller): self
	{
		if ($this->sellers->contains($seller)) {
			$this->sellers->removeElement($seller);
			// set the owning side to null (unless already changed)
			if ($seller->getSource() === $this) {
				$seller->setSource(null);
			}
		}

		return $this;
	}
}
