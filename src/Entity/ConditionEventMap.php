<?php

namespace App\Entity;

use App\Repository\ConditionEventMapRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConditionEventMapRepository::class)]
class ConditionEventMap
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Condition::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $condition_id;

    #[ORM\ManyToOne(targetEntity: Event::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $event_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConditionId(): ?Condition
    {
        return $this->condition_id;
    }

    public function setConditionId(?Condition $condition_id): self
    {
        $this->condition_id = $condition_id;

        return $this;
    }

    public function getEventId(): ?Event
    {
        return $this->event_id;
    }

    public function setEventId(?Event $event_id): self
    {
        $this->event_id = $event_id;

        return $this;
    }
}
