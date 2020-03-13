<?php

declare(strict_types=1);

namespace App\Auth\Command\JoinByEmail\Request;



use App\Auth\Entity\Email;
use App\Auth\Services\Tokenizer;

class RequestCommand
{

    public string $email = '';
    public string $password = '';



    public function test($request, $response)
    {

        $expires = new \DateTimeImmutable();

        $interval = new \DateInterval('PT30M');

        $tokenizer = new Tokenizer($interval);

        $email = new Email('email@email.com');

        var_dump($email->getEmail());

        print_r($tokenizer->generate($expires)->getValue());




        return $response;
    }
}