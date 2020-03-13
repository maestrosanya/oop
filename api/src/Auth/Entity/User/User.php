<?php

declare(strict_types=1);

namespace App\Auth\Entity\User;

use App\Auth\Entity\Email;
use App\Auth\Entity\Token;
use DateTimeImmutable;

class User
{
    private Email $email;

    private ?string $passwordHash = null;

    private DateTimeImmutable $data;

    private ?Token $token = null;


    public function __construct(Email $email, DateTimeImmutable $data)
    {
        $this->email = $email;

        $this->data = $data;
    }

    /**
     * @param Email $email
     * @param DateTimeImmutable $data
     * @param string $passwordHash
     * @param Token $token
     * @return User
     */
    public static function joinByEmail(Email $email, DateTimeImmutable $data, string $passwordHash, Token $token)
    {
        $user = new User($email, $data);
        $user->passwordHash = $passwordHash;
        $user->token = $token;

        return $user;

    }


    /**
     * @return string
     */
    public function getEmail(): Email
    {
        return $this->email;
    }
}