<?php

namespace App\Packages\Domain\User\Models\Entities;

class Id
{
    public $value;

    public function __construct(int $id)
    {
        $this->setId($id);
    }

    public function id()
    {
        return $this->value;
    }

    private function setId(int $id)
    {
        $this->value = $id;
    }
}
