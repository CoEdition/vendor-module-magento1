# For Help with this installation, please contact connectorsupport@coedition.com 
# Magento1 Vendor Module

The Coedition Vendor module for magento1 handles the integration for coedition marketplace vendors.

## Configurable Product API Extension

This extension adds a new soap endpoint named `coeditionVendorProductConfigurableChildren($sessionId, $productId)` which returns an array of the configurable product children product ids and the configurable attributes.

## Installation

To install the `Coedition_Vendor` module, just merge the files in `app` with your own local magento installation `app`. This can be done a multitude of ways and follows the same convention for a standard magento 1 module. Here is a video using a Mac and the Transmit SFTP app for reference. Just click the image below to view the video.

[![Install Mage 1 Module](https://content.screencast.com/users/ragboy/folders/Snagit/media/6139a7be-e947-427d-87ae-d8952bfb752b/FirstFrame.jpg)](https://www.screencast.com/t/xMBAN5MEh)

Make sure to flush the magento cache after installation. You can verify installation by checking the Admin -> System -> Configuration -> Advanced -> Disabled Modules Output. You should see an entry for `Coedition_Vendor`.

## Prepare API access for Coedition

You must create an api/soap user for Coedition to access your categories and products and to have the ability to push orders back into your system. Here is a video for instructions, just click the image below to view the video.

[![Install Mage 1 Module](https://content.screencast.com/users/ragboy/folders/Snagit/media/6e702aca-054a-4e4c-8aa1-dbe0e635681b/FirstFrame.jpg)](https://www.screencast.com/t/uHXSeFDU)

## Categorize to Coedition Taxonomy and Publish products

You now need to categorize your products into the Coedition taxonomy so that we can pull into our system. Here is a video for instructions, just click the image below to view the video.

[![Install Mage 1 Module](https://content.screencast.com/users/ragboy/folders/Snagit/media/09b96e8a-1556-4f64-a45b-890ade0f2c60/FirstFrame.jpg)](https://www.screencast.com/t/ULMLp9vfw)
