<?php

class Coedition_Vendor_Model_Observer
{
    private $helper;

    public function catalog_product_save_after($event) {
        $encoded = json_encode($event->getProduct()->getData());
        $this->helper()->postWebhook('product', json_decode($encoded, true));
    }

    public function sales_order_shipment_save_after($event) {
        $encoded = json_encode($event->getShipment()->getData());
        $this->helper()->postWebhook('shipment', json_decode($encoded, true));
    }

    private function helper() {
        if ($this->helper) {
            return $this->helper;
        }

        $this->helper = Mage::helper('coedition_vendor');
        return $this->helper;
    }
}
