<?php


namespace App\Domain\Atm;

interface AtmRepository
{
    public function find(int $id): Atm;

    public function findAll(): array;

    public function save(Atm $atm): void;
}