<?php

/**
 * Wsdl config model
 *
 * @category   Mage
 * @package    Mage_Api
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Coedition_Vendor_Model_Wsdl_Config extends Mage_Api_Model_Wsdl_Config
{
    protected function _loadCache($id)
    {
        return Mage::app()->loadCache($id . '_coedition');
    }

    protected function _saveCache($data, $id, $tags=array(), $lifetime=false)
    {
        return Mage::app()->saveCache($data, $id  . '_coedition', $tags, $lifetime);
    }

    protected function _removeCache($id)
    {
        return Mage::app()->removeCache($id  . '_coedition');
    }

    public function init()
    {
        $this->setCacheChecksum(null);
        $saveCache = true;

        if (Mage::app()->useCache('config')) {
            $loaded = $this->loadCache();
            if ($loaded) {
                return $this;
            }
        }

        $mergeWsdl = new Mage_Api_Model_Wsdl_Config_Base();
        $mergeWsdl->setHandler($this->getHandler());

        /**
         * Exclude Mage_Api wsdl xml file because it used for previous version
         * of API wsdl declaration
         */
        $mergeWsdl->addLoadedFile(Mage::getConfig()->getModuleDir('etc', "Mage_Api").DS.'wsdl.xml');

        $baseWsdlFile = Mage::getConfig()->getModuleDir('etc', "Mage_Api").DS.'wsdl2.xml';
        $this->loadFile($baseWsdlFile);
        Mage::getConfig()->loadModulesConfiguration('wsdl.xml', $this, $mergeWsdl);

        if (Mage::app()->useCache('config')) {
            $this->saveCache(array('config'));
        }

        return $this;
    }
}

