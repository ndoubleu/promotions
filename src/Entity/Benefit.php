<?php

namespace App\Entity;

use App\Repository\BenefitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BenefitRepository::class)]
class Benefit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $benefit_type_id;

    #[ORM\Column(type: 'integer')]
    private $min_amount;

    #[ORM\Column(type: 'integer')]
    private $amount;

    #[ORM\Column(type: 'date')]
    private $start_date;

    #[ORM\Column(type: 'date')]
    private $end_date;

    #[ORM\Column(type: 'string', length: 255)]
    private $validate_interval;

    #[ORM\Column(type: 'boolean')]
    private $unlimited;

    #[ORM\Column(type: 'string', length: 255)]
    private $product_limit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBenefitTypeId(): ?int
    {
        return $this->benefit_type_id;
    }

    public function setBenefitTypeId(int $benefit_type_id): self
    {
        $this->benefit_type_id = $benefit_type_id;

        return $this;
    }

    public function getMinAmount(): ?int
    {
        return $this->min_amount;
    }

    public function setMinAmount(int $min_amount): self
    {
        $this->min_amount = $min_amount;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getValidateInterval(): ?string
    {
        return $this->validate_interval;
    }

    public function setValidateInterval(string $validate_interval): self
    {
        $this->validate_interval = $validate_interval;

        return $this;
    }

    public function getUnlimited(): ?bool
    {
        return $this->unlimited;
    }

    public function setUnlimited(bool $unlimited): self
    {
        $this->unlimited = $unlimited;

        return $this;
    }

    public function getProductLimit(): ?string
    {
        return $this->product_limit;
    }

    public function setProductLimit(string $product_limit): self
    {
        $this->product_limit = $product_limit;

        return $this;
    }
}
