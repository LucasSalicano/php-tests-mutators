<?php

namespace App\Entity;

class Customer
{
    private string $name;
    private \DateTime $birthDate;

    /**
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, \DateTime $birthDate)
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

    public function isAdult(): bool
    {
        return $this->age() >= 18;
    }

    public function age(): int
    {
        return $this->birthDate->diff(new \DateTimeImmutable())->y;
    }
}