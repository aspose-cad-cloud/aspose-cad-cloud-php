<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DrawingPropertiesTests.php">
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

use Aspose\CAD\Model\Requests as Requests;
use PHPUnit\Framework\Assert;

use Aspose\CAD\Configuration;
use Aspose\CAD\CADApi;

require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/GetDrawingPropertiesRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/CAD/BaseTestContext.php";

class DrawingPropertiesTests extends BaseTestContext
{
    /**
     * Test case for postDocumentProperties
     *
     * Retrieves properties of a specified drawing.
     *
     */
    public function testGetDrawingProperties()
    {
        $localName = "01.026.385.01.0.I SOPORTE ENFRIADOR.dwg";
        $remoteName = $localName;
        $subfolder = "";
        $fullName = self::$baseRemoteFolder . $subfolder . $remoteName;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $localName;
        $putRequest = new Requests\UploadFileRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new \Aspose\CAD\Model\Requests\GetDrawingPropertiesRequest($remoteName, self::$baseRemoteFolder);

        list($response, $code, $headers) = $this->CAD->getDrawingPropertiesWithHttpInfo($request);
        Assert::assertEquals(200, $code);
    }
}

//$test = new DrawingPropertiesTests();
//$test->setUp();
//$test->testGetDrawingProperties();