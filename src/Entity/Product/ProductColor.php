<?php
declare(strict_types=1);

namespace App\Entity\Product;


class ProductColor
{
    const RED = 'red';
    const BLUE = 'blue';
    const GREEN = 'green';

    public static function getAvailableColors(): array
    {
        return [self::RED, self::BLUE, self::GREEN];
    }
}
