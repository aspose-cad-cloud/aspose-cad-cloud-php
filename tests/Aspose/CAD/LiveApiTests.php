<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="LiveApiTests.php">
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
use Aspose\CAD\Model\WatermarkRGB;

require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/ConvertRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/WatermarkRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/WatermarkRGB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/CAD/BaseTestContext.php";

class LiveApiTests extends BaseTestContext
{    
    /**
     * Test case for Convert
     *
     * Convert CAD to destination format.
     *
     */
    public function testConvert()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormat = "pdf";

        $testName = $this->getTestNameInSnakeCase();

        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;
        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        $request = new \Aspose\CAD\Model\Requests\ConvertRequest(file_get_contents($file), $outputFormat);

        $stream = $this->CAD->convert($request);
        
        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
    }

    /**
     * Test case for Paper to Cad
     *
     * Convert raster file to CAD format.
     *
     */
    public function testPapepToCad()
    {
        $localName = "BIKE";
        $inputFormat = "png";
        $outputFormat = "dxf";

        $testName = $this->getTestNameInSnakeCase();

        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;
        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        $request = new \Aspose\CAD\Model\Requests\PaperToCadRequest(file_get_contents($file), $outputFormat);

        $stream = $this->CAD->paperToCad($request);

        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
    }

    /**
     * Test case for Watermark
     *
     * Watermark
     *
     */
    public function testWatermark()
    {
        $localName = "galeon";
        $inputFormat = "stl";
        $outputFormat = "bmp";
        
        $testName = $this->getTestNameInSnakeCase();

        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;
        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        $watermark = new WatermarkRGB();
        $watermark->setText("watermark")->setR(0)->setG(255)->setB(0);

        $request = new \Aspose\CAD\Model\Requests\WatermarkRequest(file_get_contents($file), $outputFormat, $watermark);

        $stream = $this->CAD->watermark($request);

        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
    }

     /**
     * Test case for Extract Text
     *
     * Extract Text from drawing.
     *
     */
    public function testExtractText()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormat = "txt";

        $testName = $this->getTestNameInSnakeCase();

        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;
        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        $request = new \Aspose\CAD\Model\Requests\ExtractTextRequest(file_get_contents($file));

        $stream = $this->CAD->extractText($request);

        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
    }

     /**
     * Test case for Extract metadata
     *
     * Extract metadata from drawing.
     *
     */
    public function testExtractMetadata()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormats = ["json", "xml", "txt"];

        $testName = $this->getTestNameInSnakeCase();

        $fullName = $localName . '.' . $inputFormat;

        foreach ($outputFormats as $outputFormat) {
            $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

            $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;
            $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);
    
            $request = new \Aspose\CAD\Model\Requests\ExtractMetadataRequest(file_get_contents($file), $outputFormat);
    
            $stream = $this->CAD->extractMetadata($request);
    
            Assert::assertEquals($stream->getSize(), strlen($etalonFile));
        }        
    }

    /**
     * Test case for post Edit metadata
     *
     * Get edit metadata from drawing.
     *
     */
    public function testPostEditMetadata()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormat = "json";

        $testName = $this->getTestNameInSnakeCase();

        $fullName = $localName . '.' . $inputFormat;

        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;
        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);
    
        $request = new \Aspose\CAD\Model\Requests\EditMetadataRequest(file_get_contents($file));
    
        $stream = $this->CAD->editMetadata($request);
    
        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
          
    }

    /**
     * Test case for post Edit metadata
     *
     * Save metadata in CAD file use json.
     *
     */
    public function testPutEditMetadata()
    {
        $localName = "910609";
        $inputFormat = "dxf";
        $outputFormat = "dxf";
        
        $dxfMetadata = strtolower("{\"Name\":\"DxfImage\",\"Level\":0,\"Components\":[{\"Name\":\"SummaryInfoWrapper\",\"Level\":0,\"Components\":[{\"Name\":\"Title\",\"Value\":\"TestValue\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"Subject\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"Author\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"Keywords\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"Comments\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"LastSavedBy\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"RevisionNumber\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"HyperlinkBase\",\"Type\":\"String\",\"Level\":0,\"Components\":[]},{\"Name\":\"EditingTime\",\"Value\":\"01:59:54.7930000\",\"Type\":\"TimeSpan\",\"Level\":0,\"Components\":[]},{\"Name\":\"CreateDateTime\",\"Value\":\"1888-04-12T07:59:59\",\"Type\":\"DateTime\",\"Level\":0,\"Components\":[]},{\"Name\":\"ModifiedDateTime\",\"Value\":\"1998-03-26T10:23:29\",\"Type\":\"DateTime\",\"Level\":0,\"Components\":[]},{\"Name\":\"CreateDateTimeUtc\",\"Type\":\"DateTime\",\"Level\":0,\"Components\":[]},{\"Name\":\"ModifiedDateTimeUtc\",\"Type\":\"DateTime\",\"Level\":0,\"Components\":[]}]}]}");

        $testName = $this->getTestNameInSnakeCase();

        $fullName = $localName . '.' . $inputFormat;
        $etalonFileName = $localName .'_' . $testName . '.' . $inputFormat . '.' . $outputFormat;

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $fullName;
        
        $request = new \Aspose\CAD\Model\Requests\PutEditMetadataRequest(file_get_contents($file), $dxfMetadata);
        $stream = $this->CAD->putEditMetadata($request);

        $etalonFile = file_get_contents(realpath(__DIR__ . self::$relativeRootPath) . '/ReferenceData/' . $etalonFileName);

        Assert::assertEquals($stream->getSize(), strlen($etalonFile));
          
    }
}