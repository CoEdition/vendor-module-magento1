# Magento1 Vendor Module

The Coedition Vendor module for magento1 handles the integration for coedition marketplace vendors.

## Configurable Product API Extension

This extension adds a new soap endpoint named `coeditionVendorProductConfigurableChildren($sessionId, $productId)` which returns an array of the configurable product children product ids.

## Installation

To install the `Coedition_Vendor` module, just merge the files in `app` with your own local magento installation `app`.

Make sure to flush the magento cache after installation. You can verify installation by checking the Admin -> System -> Configuration -> Advanced -> Disabled Modules Output. You should see an entry for `Coedition_Vendor`.
