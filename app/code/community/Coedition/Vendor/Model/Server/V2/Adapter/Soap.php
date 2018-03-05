<?php

class Coedition_Vendor_Model_Server_V2_Adapter_Soap extends Mage_Api_Model_Server_V2_Adapter_Soap
{
    /**
     * Get wsdl config
     *
     * @return Mage_Api_Model_Wsdl_Config
     */
    protected function _getWsdlConfig()
    {
        $wsdlConfig = Mage::getModel('coedition_vendor/wsdl_config');
        $wsdlConfig->setHandler($this->getHandler())
            ->init();

        return $wsdlConfig;
    }
}
