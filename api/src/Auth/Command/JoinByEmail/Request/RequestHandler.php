<?php

declare(strict_types=1);

namespace App\Command\Auth\JoinByEmail\Request;


use App\Auth\Command\JoinByEmail\Request\RequestCommand;
use App\Auth\Entity\User\User;
use App\Auth\Services\PasswordHasher;
use App\Auth\Services\Tokenizer;

class RequestHandler
{

    /**
     * @var Tokenizer
     */
    private Tokenizer $tokenizer;
    /**
     * @var PasswordHasher
     */
    private PasswordHasher $passwordHasher;

    public function __construct(PasswordHasher $passwordHasher, Tokenizer $tokenizer)
    {

        $this->passwordHasher = $passwordHasher;
        $this->tokenizer = $tokenizer;
    }

    public function handle(RequestCommand $command)
    {

        $dateNow = new \DateTimeImmutable();

        User::joinByEmail(
            new Email($command->email),
            $dateNow,
            $this->passwordHasher->hash($command->password),
            $this->tokenizer->generate($dateNow)
        );
    }

}