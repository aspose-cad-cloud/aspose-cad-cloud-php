<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertRequest.php">
 *   Copyright (c) 2018-2019 Aspose Pty Ltd. All rights reserved.
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

namespace Aspose\CAD\Model\Requests;

use \InvalidArgumentException;
use \Aspose\CAD\Configuration;
use \Aspose\CAD\ObjectSerializer;
use \Aspose\CAD\CadRequest as CadRequest;

/**
 * Request model for convert operation.
 */
class ConvertRequest extends CadRequest
{
    /**
     * Output DXF, DWG, DGN, DWF, DWFX, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG, PNG, BMP, DIB, TIFF, TIF, JPEG, GIF, PSD, JPG, JPE, JIF, JFIF, PSD, WEBP, DCM, DICOM, JP2, J2K, JPF, JPM, JPG2, J2C, JPC, JPX, MJ2 , DJVU file format.
     *
     * @var string
     */
    public $output_format;
    
    /**
     * Form-data file
     *
     * @var string
     */
    public $drawing;
    
    /**
     * For output pdf format: PDF_15, PDFa_1a OR PDFa_1b. Null for another format
     *
     * @var string
     */
    public $output_type_ext;
    
    /**
     * Initializes a new instance of the ConvertRequest class.
     *  
     * @param string $output_format Output DXF, DWG, DGN, DWF, DWFX, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG, PNG, BMP, DIB, TIFF, TIF, JPEG, GIF, PSD, JPG, JPE, JIF, JFIF, PSD, WEBP, DCM, DICOM, JP2, J2K, JPF, JPM, JPG2, J2C, JPC, JPX, MJ2 , DJVU file format.
     * @param string $drawing Form-data file
     * @param string $output_type_ext For output pdf format: PDF_15, PDFa_1a OR PDFa_1b. Null for another format
     */
    public function __construct($output_format, $drawing = null, $output_type_ext = null)             
    {
        $this->output_format = $output_format;
        $this->drawing = $drawing;
        $this->output_type_ext = $output_type_ext;
    }

    /**
     * Output DXF, DWG, DGN, DWF, DWFX, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG, PNG, BMP, DIB, TIFF, TIF, JPEG, GIF, PSD, JPG, JPE, JIF, JFIF, PSD, WEBP, DCM, DICOM, JP2, J2K, JPF, JPM, JPG2, J2C, JPC, JPX, MJ2 , DJVU file format.
     *
     * @return string
     */
    public function get_output_format()
    {
        return $this->output_format;
    }

    /**
     * Output DXF, DWG, DGN, DWF, DWFX, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG, PNG, BMP, DIB, TIFF, TIF, JPEG, GIF, PSD, JPG, JPE, JIF, JFIF, PSD, WEBP, DCM, DICOM, JP2, J2K, JPF, JPM, JPG2, J2C, JPC, JPX, MJ2 , DJVU file format.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_output_format($value)
    {
        $this->output_format = $value;
        return $this;
    }
    
    /**
     * Form-data file
     *
     * @return string
     */
    public function get_drawing()
    {
        return $this->drawing;
    }

    /**
     * Form-data file
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_drawing($value)
    {
        $this->drawing = $value;
        return $this;
    }
    
    /**
     * For output pdf format: PDF_15, PDFa_1a OR PDFa_1b. Null for another format
     *
     * @return string
     */
    public function get_output_type_ext()
    {
        return $this->output_type_ext;
    }

    /**
     * For output pdf format: PDF_15, PDFa_1a OR PDFa_1b. Null for another format
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_output_type_ext($value)
    {
        $this->output_type_ext = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\CAD\Configuration $config CAD API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'output_format' is set
        if ($this->output_format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $output_format when calling convert');
        }

        $resourcePath = '/cad/Convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    

        // query params
        if ($this->output_format !== null) {
            $localName = lcfirst('outputFormat');
            $localValue = is_bool($this->output_format) ? ($this->output_format ? 'true' : 'false') : $this->output_format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->output_type_ext !== null) {
            $localName = lcfirst('outputTypeExt');
            $localValue = is_bool($this->output_type_ext) ? ($this->output_type_ext ? 'true' : 'false') : $this->output_type_ext;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // form params
        if ($this->drawing !== null) {
            $formParams[ObjectSerializer::toStandardName('drawing')] = ObjectSerializer::toFormValue($this->drawing);
        }
        // body params
        $httpBody = null;

        $headers = $this->selectHeaders(
            ['application/json'],
            ['multipart/form-data', 'application/octet-stream']
        );
        
        $httpInfo = array(
            "resourcePath" => $resourcePath,
            "queryParams" => $queryParams,
            "headerParams" => $headerParams,
            "headers" => $headers,
            "httpBody" => $httpBody,
            "formParams" => $formParams,
        );
        
        return $httpInfo;        
    }
}
