<?php

/**
 * Soap Controller to always serve non-wsi wsdl
 *
 * @category   Mage
 * @package    Mage_Api
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Coedition_Vendor_SoapController extends Mage_Api_Controller_Action
{
    public function indexAction()
    {
        // force non-wsi compliance
        Mage::app()->getStore()->setConfig(Mage_Api_Helper_Data::XML_PATH_API_WSI, false);

        $handler_name = 'soap_v2';

        /* @var $server Mage_Api_Model_Server */
        $this->_getServer()->init($this, $handler_name, $handler_name)
            ->run();
    }
}
