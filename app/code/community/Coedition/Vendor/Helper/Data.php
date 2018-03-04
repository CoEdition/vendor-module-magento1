<?php

class Coedition_Vendor_Helper_Data extends Mage_Core_Helper_Abstract
{
    private $apiClient;

    public function getApiUrl() {
        return Mage::getStoreConfig('coedition_vendor_api_config/api/url');
    }
    public function getApiToken() {
        return Mage::getStoreConfig('coedition_vendor_api_config/api/token');
    }

    public function hasApiCredentials() {
        return $this->getApiUrl() && $this->getApiToken();
    }

    public function createApiClient() {
        if ($this->apiClient) {
            return $this->apiClient;
        }

        $this->apiClient = new Varien_Http_Client($this->getApiUrl(), [
            'timeout' => 4,
        ]);
        $this->apiClient->setHeaders('Authorization', 'Bearer ' . $this->getApiToken());
        return $this->apiClient;
    }

    public function postWebhook($type, $payload) {
        if (!$this->hasApiCredentials()) {
            return;
        }

        $client = $this->createApiClient();

        try {
            $resp = $client
                ->setUri($this->getApiUrl() . '/webhooks/mage1')
                ->setRawData(json_encode([
                    'type' => $type,
                    'payload' => $payload,
                ]), 'application/json')
                ->request('POST');
        } catch (Exception $e) {}
    }
}
