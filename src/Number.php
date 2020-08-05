<?php

declare(strict_types=1);

namespace NumberApp;

final class Number
{
    /** @var int */
    public $number;

    /** @var int */
    public $system;

    public function __construct(int $number, int $system)
    {
        $this->number = $number;
        $this->system = $system;
    }

    public function convert(int $system): Number
    {
        // TO BE IMPLEMENTED
    }

    public function add(Number $number): Number
    {
        // dodajemy i zwracamy nowy obiekt Number
    }
}


