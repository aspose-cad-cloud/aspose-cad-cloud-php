<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ViewerRequest.php">
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
 * Request model for viewer operation.
 */
class ViewerRequest extends CadRequest
{
    /**
     * Gets or sets output_format
     *
     * @var string
     */
    public $output_format;
    
    /**
     * Gets or sets drawing
     *
     * @var string
     */
    public $drawing;
    
    /**
     * Initializes a new instance of the ViewerRequest class.
     *  
     * @param string $output_format 
     * @param string $drawing 
     */
    public function __construct($output_format, $drawing = null)             
    {
        $this->output_format = $output_format;
        $this->drawing = $drawing;
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
     * Gets drawing
     *
     * @return string
     */
    public function get_drawing()
    {
        return $this->drawing;
    }

    /**
     * Sets drawing
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_drawing($value)
    {
        $this->drawing = $value;
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
            throw new \InvalidArgumentException('Missing the required parameter $output_format when calling viewer');
        }

        $resourcePath = '/cad/Viewer';
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
