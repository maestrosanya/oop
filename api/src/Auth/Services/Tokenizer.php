<?php

declare(strict_types=1);

namespace App\Auth\Services;


use App\Auth\Entity\Token;
use Ramsey\Uuid\Uuid;

class Tokenizer
{

    /**
     * @var \DateInterval
     */
    private \DateInterval $interval;

    public function __construct(\DateInterval $interval)
    {

        $this->interval = $interval;
    }

    public function generate(\DateTimeImmutable $dateTimeImmutable) : Token
    {

        $token = new Token(
            Uuid::uuid4()->toString(),
            $dateTimeImmutable->add($this->interval)
        );

        return $token;
    }
}