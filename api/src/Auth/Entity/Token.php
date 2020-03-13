<?php

declare(strict_types=1);

namespace App\Auth\Entity;


use Webmozart\Assert\Assert;

class Token
{
    private string $value;

    private \DateTimeImmutable $dateExpires;

    public function __construct(string $value, \DateTimeImmutable $dateExpires)
    {
        Assert::uuid($value);

        $this->value = mb_strtolower($value);
        $this->dateExpires = $dateExpires;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDateExpires(): \DateTimeImmutable
    {
        return $this->dateExpires;
    }
}