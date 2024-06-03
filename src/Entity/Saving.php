<?php

namespace App\Entity;

use App\Repository\SavingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SavingRepository::class)]
class Saving
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'savings')]
    private ?User $saving_user = null;

    #[ORM\Column]
    private ?float $saving_value = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $saving_description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSavingUser(): ?User
    {
        return $this->saving_user;
    }

    public function setSavingUser(?User $saving_user): static
    {
        $this->saving_user = $saving_user;

        return $this;
    }

    public function getSavingValue(): ?float
    {
        return $this->saving_value;
    }

    public function setSavingValue(float $saving_value): static
    {
        $this->saving_value = $saving_value;

        return $this;
    }

    public function getSavingDescription(): ?string
    {
        return $this->saving_description;
    }

    public function setSavingDescription(?string $saving_description): static
    {
        $this->saving_description = $saving_description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
