<?php

declare(strict_types=1);

namespace NumberApp;

final class RomanFormatter implements NumberFormatter
{
    public function formatToString(Number $number): string
    {
        // Ogarnij jaki wejściowa liczba ma system
        // Na podstawie tego systemu, zamień na rzymskie
    }
}