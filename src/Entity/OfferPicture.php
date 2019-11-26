<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OfferPictureRepository")
 */
class OfferPicture
{
	/**
	 *  @var int
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=1000)
	 */
	private $url;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=1000)
	 */
	private $localPath;

	/**
	 * @var string|null
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $type;

	/**
	 * @var int|null
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $width;

	/**
	 * @var int|null
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $height;

	/**
	 * @var Offer|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\Offer", inversedBy="offerPictures")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $offer;

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
	 * @var Brand|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\Brand", inversedBy="offerPictures")
	 */
	private $brand;

	/**
	 * @var BikeModel|null
	 * @ORM\ManyToOne(targetEntity="App\Entity\BikeModel", inversedBy="offerPictures")
	 */
	private $model;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getOffer(): ?Offer
	{
		return $this->offer;
	}

	public function setOffer(?Offer $offer): self
	{
		$this->offer = $offer;

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

	public function getLocalPath(): ?string
	{
		return $this->localPath;
	}

	public function setLocalPath(string $localPath): self
	{
		$this->localPath = $localPath;

		return $this;
	}

	public function getType(): ?string
	{
		return $this->type;
	}

	public function setType(?string $type): self
	{
		$this->type = $type;

		return $this;
	}

	public function getWidth(): ?int
	{
		return $this->width;
	}

	public function setWidth(?int $width): self
	{
		$this->width = $width;

		return $this;
	}

	public function getHeight(): ?int
	{
		return $this->height;
	}

	public function setHeight(?int $height): self
	{
		$this->height = $height;

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
}
