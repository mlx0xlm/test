<?php

namespace Magenest\Reservation\Model\Product\Type;

class BookingProduct extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        // method intentionally empty
    }

}