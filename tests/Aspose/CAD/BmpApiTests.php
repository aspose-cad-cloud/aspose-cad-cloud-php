<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BmpApiTests.php">
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
use Aspose\CAD\Model\VectorRasterizationOptionsDTO;
use Aspose\CAD\Model\BmpOptionsDTO;
use Aspose\CAD\Model\ColorDTO;
use Aspose\CAD\Configuration;
use Aspose\CAD\CADApi;

require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/PostDrawingBmpRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/PutDrawingBmpRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/CAD/BaseTestContext.php";

class BmpApiTests extends BaseTestContext
{
    /**
     * Test case for post BmpApi
     *
     * Convert file with BmpApi post request.
     *
     */
    public function testPostBmpApi()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormat = "bmp";

        $testName = $this->getTestNameInSnakeCase();
        
        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;

        $putRequest = new Requests\UploadFileRequest($fullName, file_get_contents($file));
        $this->CAD->uploadFile($putRequest);

        $fullName = $localName . '.' . $inputFormat;

        $options = new BmpOptionsDTO();
        $rast = new VectorRasterizationOptionsDTO();

        $rast->setPageHeight(100);
        $rast->setPageWidth(200);

        $color = new ColorDTO();
        $color->setR(0);
        $color->setG(0);
        $color->setB(0);
        $rast->setDrawColor($color);

        $options->setVectorRasterizationOptions($rast);

        $request = new \Aspose\CAD\Model\Requests\PostDrawingBmpRequest($fullName, $options);
        $stream = $this->CAD->postDrawingBmp($request);

        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        $this->overrideReferenceFiles($etalonFileName, $stream);

        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
    }

    /**
     * Test case for PutBmpApi
     *
     * Convert drawing to bmp file.
     *
     */
    public function testPutBmpApi()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormat = "bmp";

        $testName = $this->getTestNameInSnakeCase();
        
        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;

        $request = new \Aspose\CAD\Model\Requests\PutDrawingBmpRequest(file_get_contents($file));
        $stream = $this->CAD->putDrawingBmp($request);

        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        $this->overrideReferenceFiles($etalonFileName, $stream);

        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
    }

    /**
     * Test case for PutBmpApi with options
     *
     * Put BmpApi request with options.
     *
     */
    public function testPutBmpApiWithOptions()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormat = "bmp";

        $testName = $this->getTestNameInSnakeCase();
        
        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;

        $options = new BmpOptionsDTO();
        $rast = new VectorRasterizationOptionsDTO();

        $rast->setPageHeight(100);
        $rast->setPageWidth(200);

        $color = new ColorDTO();
        $color->setR(0);
        $color->setG(0);
        $color->setB(0);
        $rast->setDrawColor($color);

        $options->setVectorRasterizationOptions($rast);

        $request = new \Aspose\CAD\Model\Requests\PutDrawingBmpRequest(file_get_contents($file), null, $options);
        $stream = $this->CAD->putDrawingBmp($request);

        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        $this->overrideReferenceFiles($etalonFileName, $stream);

        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
    }
}