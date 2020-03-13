<?php

declare(strict_types=1);

namespace App\Auth\Test\Unit\Entity\User;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use App\Auth\Entity\Email;
use App\Auth\Entity\User\User;

class UserTest extends TestCase
{
    public function testSuccess()
    {


        $user = new User(
           $email = new Email('email@email.com'),
           $expires =  new DateTimeImmutable()
        );

        self::assertEquals($email, $user->getEmail());
    }
}
