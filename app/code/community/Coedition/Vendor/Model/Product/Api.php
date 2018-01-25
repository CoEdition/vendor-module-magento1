<?php

/** Extension to the Product API to allow listing of configurable product ids */
class Coedition_Vendor_Model_Product_Api extends Mage_Catalog_Model_Api_Resource
{
    public function configurableChildren($productId) {
        $product = $this->_getProduct($productId);
        if ($product->getTypeId() != "configurable") {
            $this->_fault('product_not_configurable');
        }
        $type = $product->getTypeInstance();
        $res = $type->getChildrenIds($product->getId())[0];

        return [
            'productIds' => array_values($res),
            'configurableAttributes' => $type->getConfigurableAttributesAsArray()
        ];
    }
}
