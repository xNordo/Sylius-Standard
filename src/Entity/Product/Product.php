<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    public function setColor(string $color)
    {
        if (in_array($color, ProductColor::getAvailableColors())) {
            $this->color = $color;
        }
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
