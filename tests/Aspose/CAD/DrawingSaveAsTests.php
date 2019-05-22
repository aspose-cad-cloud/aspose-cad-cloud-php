<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DrawingSaveAsTests.php">
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
use Aspose\CAD\Model\SaveOptionsData;
use Aspose\CAD\Model\TiffSaveOptionsData;
use PHPUnit\Framework\Assert;

use Aspose\Storage\Api\StorageApi;
use Aspose\CAD\Configuration;
use Aspose\CAD\CADApi;

require_once $_SERVER['DOCUMENT_ROOT'] . "src/Aspose/CAD/Model/Requests/PostImageSaveAsRequest.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/CAD/BaseTestContext.php";

class DrawingSaveAsTests extends BaseTestContext
{
    /**
     * Test case for postDocumentSaveAs
     *
     * Convert document to destination format with detailed settings and save result to storage..
     *
     */
    public function testPostDrawingSaveAs()
    {
        $localName = "910609.dxf";
        $remoteName = "910609.dxf";
        $subfolder = "";
        $fullName = self::$baseRemoteFolder . $subfolder . $remoteName;
        $destName = self::$baseTestOut . "910609.dxf.pdf";

        $file = realpath(__DIR__ . self::$relativeRootPath) . '/TestData/' . $localName;
        $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new \Aspose\CAD\Model\Requests\PostImageSaveAsRequest($file, "pdf", null, $folder=trim(self::$baseRemoteFolder . $subfolder, ""));

        $result = $this->CAD->postImageSaveAs($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postDocumentSaveAsFromPdfToDoc
     *
     * Convert document to destination format with detailed settings and save result to storage..
     *
     */
    public function testPostDocumentSaveAsFromPdfToDoc()
    {
        $localName = "45.pdf";
        $remoteName = "TestPostDocumentSaveAsFromPdfToDoc.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPostDocumentSaveAsFromPdfToDoc.docx";
        $saveOptions = new SaveOptionsData(array("save_format" => "docx", "file_name" => $destName));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/ConvertDocument/' . $localName;
        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new Requests\PostDocumentSaveAsRequest($remoteName, $saveOptions, $folder=self::$baseTestPath . $subfolder);

        $result = $this->CAD->postDocumentSaveAs($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for putConvertDocument
     *
     * Convert document from request content to format specified..
     *
     */
    public function testPutConvertDocument()
    {
        $format = "pdf";
        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/ConvertDocument/' . "test_uploadfile.docx";

        $request = new Requests\PutConvertDocumentRequest($file, $format);

        $result = $this->CAD->putConvertDocument($request);
        Assert::assertNotNull($result, "Error occured while converting document");
    }

    /**
     * Test case for putDocumentSaveAsTiff
     *
     * Convert document to tiff with detailed settings and save result to storage..
     *
     */
    public function testPutDocumentSaveAsTiff()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutDocumentSaveAsTiff.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPutDocumentSaveAsTiff.tiff";
        $body = new TiffSaveOptionsData(array("file_name" => "abc.tiff", "save_format" => "tiff"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new Requests\PutDocumentSaveAsTiffRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->CAD->putDocumentSaveAsTiff($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}

$test = new DrawingSaveAsTests();
$test->setUp();
$test->testPostDrawingSaveAs();