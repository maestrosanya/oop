<?php

declare(strict_types=1);

namespace App\Auth\Entity;


use Webmozart\Assert\Assert;

class Email
{
    /**
     * @var string
     */
    private string $email;

    public function __construct(string $email)
    {
        Assert::notEmpty($email);
        Assert::email($email);


        $this->email = mb_strtolower($email);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}