<?php

namespace App\Entity;

use App\Repository\ExecutionLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExecutionLogRepository::class)]
class ExecutionLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Promotions::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $rule_id;

    #[ORM\Column(type: 'boolean')]
    private $success;

    #[ORM\Column(type: 'date')]
    private $created;

    #[ORM\Column(type: 'string', length: 255)]
    private $user;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
