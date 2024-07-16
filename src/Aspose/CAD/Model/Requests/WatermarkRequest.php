<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WatermarkRequest.php">
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
 * Request model for watermark operation.
 */
class WatermarkRequest extends CadRequest
{
    /**
     * Input drawing
     *
     * @var string
     */
    public $drawing_data;
    
    /**
     * Gets or sets output_format
     *
     * @var string
     */
    public $output_format;
    
    /**
     * JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/WatermarkRGB model definition.
     *
     * @var string
     */
    public $watermark;
    
    /**
     * Gets or sets output_type_ext
     *
     * @var string
     */
    public $output_type_ext;
    
    /**
     * Initializes a new instance of the WatermarkRequest class.
     *  
     * @param string $drawing_data Input drawing
     * @param string $output_format 
     * @param string $watermark JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/WatermarkRGB model definition.
     * @param string $output_type_ext 
     */
    public function __construct($drawing_data, $output_format, $watermark, $output_type_ext = null)             
    {
        $this->drawing_data = $drawing_data;
        $this->output_format = $output_format;
        $this->watermark = $watermark;
        $this->output_type_ext = $output_type_ext;
    }

    /**
     * Input drawing
     *
     * @return string
     */
    public function get_drawing_data()
    {
        return $this->drawing_data;
    }

    /**
     * Input drawing
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_drawing_data($value)
    {
        $this->drawing_data = $value;
        return $this;
    }
    
    /**
     * Gets output_format
     *
     * @return string
     */
    public function get_output_format()
    {
        return $this->output_format;
    }

    /**
     * Sets output_format
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_output_format($value)
    {
        $this->output_format = $value;
        return $this;
    }
    
    /**
     * JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/WatermarkRGB model definition.
     *
     * @return string
     */
    public function get_watermark()
    {
        return $this->watermark;
    }

    /**
     * JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/WatermarkRGB model definition.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_watermark($value)
    {
        $this->watermark = $value;
        return $this;
    }
    
    /**
     * Gets output_type_ext
     *
     * @return string
     */
    public function get_output_type_ext()
    {
        return $this->output_type_ext;
    }

    /**
     * Sets output_type_ext
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
        // verify the required parameter 'drawing_data' is set
        if ($this->drawing_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $drawing_data when calling watermark');
        }
        // verify the required parameter 'output_format' is set
        if ($this->output_format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $output_format when calling watermark');
        }
        // verify the required parameter 'watermark' is set
        if ($this->watermark === null) {
            throw new \InvalidArgumentException('Missing the required parameter $watermark when calling watermark');
        }

        $resourcePath = '/cad/Watermark';
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
        if ($this->drawing_data !== null) {
            $formParams[ObjectSerializer::toStandardName('drawing_data')] = ObjectSerializer::toFormValue($this->drawing_data);
        }
        // form params
        if ($this->watermark !== null) {
            $formParams[ObjectSerializer::toStandardName('watermark')] = ObjectSerializer::toFormValue($this->watermark);
        }
        // body params
        $httpBody = null;

        $headers = $this->selectHeaders(
            ['application/json'],
            ['application/octet-stream', 'multipart/form-data']
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
