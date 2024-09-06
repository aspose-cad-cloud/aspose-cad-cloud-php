<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutEditMetadataRequest.php">
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
 * Request model for putEditMetadata operation.
 */
class PutEditMetadataRequest extends CadRequest
{
    /**
     * Input drawing
     *
     * @var string
     */
    public $drawing_data;
    
    /**
     * Metadata string json from POST/EditMetadata
     *
     * @var string
     */
    public $metadata_component;
    
    /**
     * Initializes a new instance of the PutEditMetadataRequest class.
     *  
     * @param string $drawing_data Input drawing
     * @param string $metadata_component Metadata string json from POST/EditMetadata
     */
    public function __construct($drawing_data, $metadata_component)             
    {
        $this->drawing_data = $drawing_data;
        $this->metadata_component = $metadata_component;
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
     * Metadata string json from POST/EditMetadata
     *
     * @return string
     */
    public function get_metadata_component()
    {
        return $this->metadata_component;
    }

    /**
     * Metadata string json from POST/EditMetadata
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_metadata_component($value)
    {
        $this->metadata_component = $value;
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
            throw new \InvalidArgumentException('Missing the required parameter $drawing_data when calling putEditMetadata');
        }
        // verify the required parameter 'metadata_component' is set
        if ($this->metadata_component === null) {
            throw new \InvalidArgumentException('Missing the required parameter $metadata_component when calling putEditMetadata');
        }

        $resourcePath = '/cad/EditMetadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    

    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // form params
        if ($this->drawing_data !== null) {
            $formParams[ObjectSerializer::toStandardName('drawing_data')] = ObjectSerializer::toFormValue($this->drawing_data);
        }
        // form params
        if ($this->metadata_component !== null) {
            $formParams[ObjectSerializer::toStandardName('metadata_component')] = ObjectSerializer::toFormValue($this->metadata_component);
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
