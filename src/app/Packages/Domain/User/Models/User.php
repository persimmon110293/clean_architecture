<?php

namespace App\Packages\Domain\User\Models;

use App\Packages\Domain\User\Models\Entities\Id;
use App\Packages\Domain\User\Models\Entities\Name;
use App\Packages\Domain\User\Models\ValueObjects\Age;
use App\Packages\Domain\User\Models\ValueObjects\Email;

class User
{
    public $id;
    public $name;
    public $age;
    public $email;

    public function __construct($row_user)
    {
        $this->setId($row_user->id);
        $this->setName($row_user->name);
        $this->setAge($row_user->age);
        $this->setEmail($row_user->email);
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function age(): Age
    {
        return $this->age;
    }

    public function email(): Email
    {
        return $this->email;
    }

    private function setId(int $id): void
    {
        $this->id = new Id($id);
    }

    private function setName(string $name): void
    {
        $this->name = new Name($name);
    }

    private function setAge(string $age): void
    {
        $this->age = new Age($age);
    }

    private function setEmail(string $email): void
    {
        $this->email = new Email($email);
    }
}
