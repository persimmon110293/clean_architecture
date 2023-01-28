<?php

namespace App\Packages\Domain\User\Models\Entities;

class Name
{
    public $value;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function name(): string
    {
        return $this->value;
    }

    private function setName(string $name): void
    {
        $this->value = $name;
    }
}
