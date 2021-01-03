# Aspose.CAD Cloud PHP SDK
[Aspose.CAD Cloud](https://products.aspose.cloud/cad) is a true [REST API](https://apireference.aspose.cloud/cad/) that enables you to perform a wide range of CAD and BIM drawings processing operations including manipulation, editing, export and conversion in a cloud, with zero initial costs.

This repository contains [Aspose.CAD Cloud PHP SDK](https://products.aspose.cloud/cad/php) source code which is written in PHP. This SDK allows you to work with Aspose.CAD Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost and gain all benefits of strong types and IDE highlights.

# Key Features

* Supports the latest versions of AutoCAD DWG, DXF, DWF, DWFX, DWT, STL, IGS, DGN, OBJ and CF2 files
* Convert CAD drawings to high quality PDF
* Convert CAD drawing to high quality raster images
* Convert CAD drawing to high quality vector files like SVG and WMF
* Modify and convert CAD drawing to DXF
* Modify and convert CAD drawing to DWF
* Select and modify specific entities
* Retrieve & update drawing properties and metadata
* Select and convert specific layouts
* Select and convert specific layers
* Track the file conversion process

#### Drawing Formats Support
Export the following drawing to various formats (generally supported ones are BMP, PSD, JPEG, TIFF, GIF, PNG, JPEG2000, SVG, WMF and PDF):
* DWG
* DXF
* DWF
* DWFX
* DWT
* STL
* IGS
* DGN
* OBJ
* CF2

Process options, change and return drawings in the same format:
* DXF
* DWF

Output formats to export:
* BMP
* PSD
* JPEG
* TIFF
* GIF
* PNG
* JPEG2000 (JP2, J2K)
* SVG
* WMF
* PDF

#### Supported CAD Operations
* Export 
* Resize
* Crop
* Rotate and Flip

Look at [API Reference](https://apireference.aspose.cloud/cad/) for full API specification.

For the complete list of use-cases, please refer to the [format support document](https://docs.aspose.cloud/cad/supported-file-formats/) to see what you can achieve!

Detalied official documentation can be found at the [following link](https://docs.aspose.cloud/cad/).

## Getting Started
1. **Sign Up**. Before you begin, you need to sign up for an account on our [Dashboard](https://dashboard.aspose.cloud/) and retrieve your [credentials](https://dashboard.aspose.cloud/#/apps).
2. **Minimum requirements**. This SDK requires [PHP 5.6 or later](https://www.php.net/releases/).
3. **Install Aspose.CAD Cloud PHP SDK**. Please, add the following [Packagist package](https://packagist.org/packages/aspose/aspose-cad-cloud) to your project.

Please, add the following  to your composer.json as a dependency.
```json
{
    "require": {
        "aspose/aspose-cad-cloud": ">=20.11"
    }
}
```
Import the dependencies to your code as follows.
```php
use \Aspose\CAD\CadApi;
use \Aspose\CAD\Configuration;
use \Aspose\CAD\Model;
use \Aspose\CAD\Model\Requests;
```
4. **Using the SDK**. The best way to become familiar with how to use the SDK is to read the [Developer Guide](https://docs.aspose.cloud/cad/developer-guide/). The [Getting Started Guide](https://docs.aspose.cloud/cad/getting-started/) will help you to become familiar with the common concepts.

## How to use the SDK?

The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/aspose-cad-cloud) (recommended). For more details, please visit our [documentation website](https://docs.aspose.cloud/cad/available-sdks/).

#### Aspose.CAD Cloud-hosted service VS on-premise deployment
You can choose either to use Aspose.CAD Cloud-hosted drawings processing service (the standard way) or the Docker image from Docker Hub deployed on-premise to serve the requests - https://hub.docker.com/r/aspose/cad-cloud.
The details about key differences and deployment process is described on the dedicated Docker Hub page.

### Prerequisites

To use Aspose CAD for Cloud Java SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

The solution is updated using [code generator](https://github.com/aspose-CAD-cloud/aspose-CAD-cloud-codegen).

## Sample Usage

```php
$config = new Configuration();
$config->setAppKey('AppKey')->setAppSid('AppSid');
$cad = new CadApi($config, null);
$request = new \Aspose\CAD\Model\Requests\PostDrawingSaveAsRequest(file_get_contents("c:\path to file.dwg"), "png", null, null);
$stream = $cad->postDrawingSaveAs($request);
```
      
[Tests](tests/Aspose/cad) contain various examples of using the SDK.
Please put your credentials into [Configuration](src/Aspose/cad/Configuration.php).

## Dependencies
* [PHP 5.6 or later](https://www.php.net/releases/).

## Licensing
All Aspose.CAD Cloud SDKs, helper scripts and templates are licensed under [MIT License](LICENSE).

## Contact Us
Your feedback is very important to us. Please feel free to contact via
+ [**Free Support Forum**](https://forum.aspose.cloud/c/cad)
+ [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)

## Resources
+ [**Web API reference**](https://apireference.aspose.cloud/cad/)
+ [**Website**](https://www.aspose.cloud)
+ [**Product Home**](https://products.aspose.cloud/cad)
+ [**Documentation**](https://docs.aspose.cloud/cad/)
+ [**Blog**](https://blog.aspose.cloud/category/aspose-products/aspose.cad-cloud/)

## Other languages
We generate our SDKs in different languages so you may check if yours is available in our [repository](https://github.com/aspose-cad-cloud). If you don't find your language in the list, feel free to request it from us, or use raw REST API requests as you can find it [here](https://products.aspose.cloud/cad/curl).

## Code generator
The solution is updated using [code generator](https://github.com/aspose-cad-cloud/aspose-cad-cloud-codegen).
