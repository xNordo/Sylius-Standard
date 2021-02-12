<?php
declare(strict_types=1);


namespace App\Form\Extension;


use App\Entity\Product\ProductColor;
use Sylius\Bundle\CoreBundle\Form\Extension\ProductTypeExtension;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtensionDecorator extends AbstractTypeExtension
{
    private $productTypeExtension;

    public function __construct()
    {
        $this->productTypeExtension = new ProductTypeExtension();
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->productTypeExtension->buildForm($builder, $options);
        $builder->add('color', ChoiceType::class, [
            'choices' => array_combine(ProductColor::getAvailableColors(), ProductColor::getAvailableColors()),
        ]);
    }

    public function getExtendedType(): string
    {
        return ProductType::class;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
