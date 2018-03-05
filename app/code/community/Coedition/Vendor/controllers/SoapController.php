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
        Mage::app()->getStore()->setConfig(Mage_Api_Helper_Data::XML_PATH_API_WSI, false);

        /* @var $server Mage_Api_Model_Server */
        $this->_getServer()->init($this, 'coedition_soap_v2', 'soap_v2')
            ->run();
    }
}
