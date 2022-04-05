<?php

namespace App\Entity;

use App\Repository\BenefitTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BenefitTypeRepository::class)]
class BenefitType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $benefit_type_name;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;

    #[ORM\ManyToOne(targetEntity: Benefit::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $benefit_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBenefitTypeName(): ?string
    {
        return $this->benefit_type_name;
    }

    public function setBenefitTypeName(string $benefit_type_name): self
    {
        $this->benefit_type_name = $benefit_type_name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getBenefitId(): ?Benefit
    {
        return $this->benefit_id;
    }

    public function setBenefitId(?Benefit $benefit_id): self
    {
        $this->benefit_id = $benefit_id;

        return $this;
    }
}
