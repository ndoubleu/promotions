<?php

namespace App\Entity;

use App\Repository\ConditionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConditionRepository::class)]
class Condition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $condition_item_i;

    #[ORM\Column(type: 'integer')]
    private $condition_value;

    #[ORM\ManyToOne(targetEntity: Promotions::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $rule_id;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConditionItemI(): ?int
    {
        return $this->condition_item_i;
    }

    public function setConditionItemI(int $condition_item_i): self
    {
        $this->condition_item_i = $condition_item_i;

        return $this;
    }

    public function getConditionValue(): ?int
    {
        return $this->condition_value;
    }

    public function setConditionValue(int $condition_value): self
    {
        $this->condition_value = $condition_value;

        return $this;
    }

    public function getRuleId(): ?Promotions
    {
        return $this->rule_id;
    }

    public function setRuleId(?Promotions $rule_id): self
    {
        $this->rule_id = $rule_id;

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
}
