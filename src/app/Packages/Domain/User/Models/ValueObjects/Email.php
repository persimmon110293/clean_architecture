<?php

namespace App\Packages\Domain\User\Models\ValueObjects;

class Email
{
    public $value;

    public function __construct(string $email)
    {
        $this->setEmail($email);
    }

    public function email()
    {
        return $this->value;
    }

    private function setEmail(string $email): void
    {
        $this->value = $email;
    }
}
