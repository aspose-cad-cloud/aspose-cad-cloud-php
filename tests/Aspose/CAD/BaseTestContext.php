<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseTestContext.php">
*   Copyright (c) 2017 Aspose.CAD for Cloud
* </copyright>
* <summary>
*   Permission is hereby granted, free of charge, to any person obtaining a copy
*  of this software and associated documentation files (the "Software"), to deal
*  in the Software without restriction, including without limitation the rights
*  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*  copies of the Software, and to permit persons to whom the Software is
*  furnished to do so, subject to the following conditions:
*
*  The above copyright notice and this permission notice shall be included in all
*  copies or substantial portions of the Software.
*
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*  SOFTWARE.
* </summary>
* --------------------------------------------------------------------------------------------------------------------
*/

namespace BaseTest;

require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Configuration.php";

use Aspose\Storage\Api\StorageApi;
use Aspose\CAD\Configuration;
use Aspose\CAD\CADApi;

class BaseTestContext //extends \PHPUnit_Framework_TestCase
{
    protected $CAD;

    protected $storage;

    protected static $relativeRootPath = "/../../../";

    protected $config;
    protected static $baseTestPath = "TestData/";
    public static $baseTestOut = "TestOut/";
    public static $baseRemoteFolder = "CloudTestPhp/";

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->config = new Configuration();
        $creds = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__  . self::$relativeRootPath . "Settings/servercreds.json")), true);
        /*
         * To run with your own credentials please, replace parameter in methods 'setAppKey' and 'setAppSid' accordingly to your's AppSid and AppKey
         */
        $this->config->setAppKey($creds["AppKey"]);
        $this->config->setAppSid($creds["AppSid"]);
        $this->config->setHost($creds["BaseURL"]);

        $client = new \GuzzleHttp\Client([
            'base_uri' => $creds["BaseURL"]
        ]);

        $this->CAD = new CADApi($client, $this->config);

        $this->storage = new StorageApi();
        $this->storage->getConfig()->setAppKey($creds["AppKey"])->setAppSid($creds["AppSid"])->setHost($creds["BaseURL"]);
    }

    /*
     * Returns api instance
     */
    public function get_api()
    {
        return $this->CAD;
    }

    /*
     * Returns storage instance
     */
    public function get_storage()
    {
        return $this->storage;
    }
}