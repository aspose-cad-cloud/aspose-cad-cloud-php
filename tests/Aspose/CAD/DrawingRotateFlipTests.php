<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DrawingRotateFlipTests.php">
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

include 'vendor/autoload.php';

use Aspose\CAD\Model\Requests;
use PHPUnit\Framework\Assert;

use Aspose\Storage\Api\StorageApi;
use Aspose\CAD\Configuration;
use Aspose\CAD\CADApi;

require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/PutDrawingRotateFlipRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/GetDrawingRotateFlipRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/CAD/BaseTestContext.php";

class DrawingRotateFlipTests extends BaseTestContext
{
    /**
     * Test case for PostDrawingRotateFlip
     *
     * Rotates, flips drawing and retrieves result on a response.
     *
     */
    public function testPutDrawingRotateFlip()
    {
        $localName = "910609.dxf";
        $outputFormat = "pdf";
        $remoteName = $localName;
        $subfolder = "";
        $fullName = self::$baseRemoteFolder . $subfolder . $remoteName;
        $destName = self::$baseTestOut . $remoteName . "." . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $localName;
        $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new \Aspose\CAD\Model\Requests\PutDrawingRotateFlipRequest($file, $outputFormat, 'Rotate180FlipXY', $folder=trim(self::$baseRemoteFolder . $subfolder, ""));

        list($response, $code, $headers) = $this->CAD->putDrawingRotateFlipWithHttpInfo($request);
        Assert::assertEquals(200, $code);
    }

    /**
     * Test case for GetDrawingRotateFlip
     *
     * Flips drawing and saves it to a storage.
     *
     */
    public function testGetDrawingRotateFlip()
    {
        $localName = "galeon.stl";
        $outputFormat = "jpg";
        $remoteName = $localName;
        $subfolder = "";
        $fullName = self::$baseRemoteFolder . $subfolder . $remoteName;
        $destName = self::$baseTestOut . $remoteName ."." . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $localName;
        $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new \Aspose\CAD\Model\Requests\GetDrawingRotateFlipRequest($remoteName, $outputFormat, 'RotateNoneFlipX', null, null, $folder=trim(self::$baseRemoteFolder . $subfolder));

        list($response, $code, $headers) = $this->CAD->getDrawingRotateFlipWithHttpInfo($request);
        Assert::assertEquals(200, $code);
    }
}

// $test = new DrawingRotateFlipTests();
// $test->setUp();
// $test->testPutDrawingRotateFlip();
// $test->testGetDrawingRotateFlip();