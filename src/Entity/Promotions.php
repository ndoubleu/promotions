<?php

namespace App\Entity;

use App\Repository\PromotionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionsRepository::class)]
class Promotions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $start_at;

    #[ORM\Column(type: 'date')]
    private $end_at;

    #[ORM\Column(type: 'string', length: 255)]
    private $limits;

    #[ORM\Column(type: 'date_immutable')]
    private $created_at;

    #[ORM\Column(type: 'string', length: 255)]
    private $created_by;

    #[ORM\Column(type: 'string', length: 255)]
    private $rule_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $rule_status;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $deleted_at;

    #[ORM\ManyToOne(targetEntity: Event::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $engine_event_id;

    #[ORM\ManyToOne(targetEntity: benefit::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $engine_benefit_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartAt(): ?\DateTimeInterface
    {
        return $this->start_at;
    }

    public function setStartAt(\DateTimeInterface $start_at): self
    {
        $this->start_at = $start_at;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->end_at;
    }

    public function setEndAt(\DateTimeInterface $end_at): self
    {
        $this->end_at = $end_at;

        return $this;
    }

    public function getLimits(): ?string
    {
        return $this->limits;
    }

    public function setLimits(string $limits): self
    {
        $this->limits = $limits;

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

    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    public function setCreatedBy(string $created_by): self
    {
        $this->created_by = $created_by;

        return $this;
    }

    public function getRuleName(): ?string
    {
        return $this->rule_name;
    }

    public function setRuleName(string $rule_name): self
    {
        $this->rule_name = $rule_name;

        return $this;
    }

    public function getRuleStatus(): ?string
    {
        return $this->rule_status;
    }

    public function setRuleStatus(string $rule_status): self
    {
        $this->rule_status = $rule_status;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deleted_at;
    }

    public function setDeletedAt(?\DateTimeInterface $deleted_at): self
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }

    public function getEngineEventId(): ?Event
    {
        return $this->engine_event_id;
    }

    public function setEngineEventId(?Event $engine_event_id): self
    {
        $this->engine_event_id = $engine_event_id;

        return $this;
    }

    public function getEngineBenefitId(): ?benefit
    {
        return $this->engine_benefit_id;
    }

    public function setEngineBenefitId(?benefit $engine_benefit_id): self
    {
        $this->engine_benefit_id = $engine_benefit_id;

        return $this;
    }
}
