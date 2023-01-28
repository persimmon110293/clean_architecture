<?php

namespace App\Packages\Domain\User\Models\ValueObjects;

class Age
{
    public $value;

    public function __construct(string $age)
    {
        $this->setAge($age);
    }

    public function age(): string
    {
        return $this->value;
    }

    private function setAge(string $age): void
    {
        $this->value = $age;
    }
}
