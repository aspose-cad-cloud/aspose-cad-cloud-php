<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseTestContext.php">
*   Copyright (c) 2017 Aspose.CAD Cloud
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

include 'vendor/autoload.php';

require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Configuration.php";

use Aspose\CAD\Configuration;
use Aspose\CAD\CadApi;
use Aspose\CAD\Model as Models;
use Aspose\CAD\Model\Requests as Requests;
use GuzzleHttp\Client;
use DirectoryIterator;

class BaseTestContext extends \PHPUnit_Framework_TestCase
{
    protected $CAD;

    protected $defaultStorageName = "CAD-QA";

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
        $creds = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__  . self::$relativeRootPath . self::$baseTestPath . "serverAccess.json")), true);

        if ($this->endsWith($creds["BaseURL"], "/")) {
            $creds["BaseURL"] = substr($creds["BaseURL"], 0, -1);
        }

        /*
         * To run with your own credentials please, replace parameter in methods 'setAppKey' and 'setAppSid' accordingly to your's AppSid and AppKey
         */
        $this->config->setAppKey($creds["AppKey"]);
        $this->config->setAppSid($creds["AppSid"]);
        $this->config->setHost($creds["BaseURL"]);
        $this->config->setDebug(false);

        $useProxy = array_key_exists("Proxy", $creds);
        $client = null;

        if ($useProxy) {
            $client = new Client([
                'proxy' => $creds["Proxy"]
            ]);
    
            var_dump(openssl_get_cert_locations());            
        }

        $this->CAD = new CadApi($client, $this->config);

        if ($creds["Storage"]) {
            $this->defaultStorageName = $creds["Storage"];
        }

        $existsRequest = new Requests\ObjectExistsRequest(self::$baseRemoteFolder, $this->defaultStorageName);
        $isExistResponse = $this->CAD->objectExists($existsRequest);

        if (!$isExistResponse->getexists()) {
            $createDirRequest = new Requests\CreateFolderRequest(self::$baseRemoteFolder, $this->defaultStorageName);
            $this->CAD->createFolder($createDirRequest);
        }

        // upload all test files if not exist
        $dir = new DirectoryIterator(realpath(__DIR__  . self::$relativeRootPath . self::$baseTestPath));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot() && $fileinfo->getFilename() != "serverAccess.json") {
                $fileName = self::$baseRemoteFolder . $fileinfo->getFilename();
                $existsRequest = new Requests\ObjectExistsRequest($fileName, $this->defaultStorageName);
                $isExistResponse = $this->CAD->objectExists($existsRequest);

                if (!$isExistResponse->getexists()) {
                    $createFileRequest = new Requests\UploadFileRequest($fileName, $fileinfo->getPathname(), $this->defaultStorageName);
                    $this->CAD->uploadFile($createFileRequest);
                }
            }
        }

        $creds = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__  . self::$relativeRootPath . self::$baseTestPath . "serverAccess.json")), true);
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

    private function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, -$length) === $needle);
    }
}