<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostDrawingResizeRequest.php">
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
 * Request model for postDrawingResize operation.
 */
class PostDrawingResizeRequest extends CadRequest
{
    /**
     * Input drawing
     *
     * @var string
     */
    public $drawing_data;
    
    /**
     * Resulting file format.
     *
     * @var string
     */
    public $output_format;
    
    /**
     * New width.
     *
     * @var int
     */
    public $new_width;
    
    /**
     * New height.
     *
     * @var int
     */
    public $new_height;
    
    /**
     * Path to updated file (if this is empty, response contains streamed file).
     *
     * @var string
     */
    public $out_path;
    
    /**
     * Your Aspose Cloud Storage name.
     *
     * @var string
     */
    public $storage;
    
    /**
     * Initializes a new instance of the PostDrawingResizeRequest class.
     *  
     * @param string $drawing_data Input drawing
     * @param string $output_format Resulting file format.
     * @param int $new_width New width.
     * @param int $new_height New height.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed file).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($drawing_data, $output_format, $new_width, $new_height, $out_path = null, $storage = null)             
    {
        $this->drawing_data = $drawing_data;
        $this->output_format = $output_format;
        $this->new_width = $new_width;
        $this->new_height = $new_height;
        $this->out_path = $out_path;
        $this->storage = $storage;
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
     * Resulting file format.
     *
     * @return string
     */
    public function get_output_format()
    {
        return $this->output_format;
    }

    /**
     * Resulting file format.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_output_format($value)
    {
        $this->output_format = $value;
        return $this;
    }
    
    /**
     * New width.
     *
     * @return int
     */
    public function get_new_width()
    {
        return $this->new_width;
    }

    /**
     * New width.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_new_width($value)
    {
        $this->new_width = $value;
        return $this;
    }
    
    /**
     * New height.
     *
     * @return int
     */
    public function get_new_height()
    {
        return $this->new_height;
    }

    /**
     * New height.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_new_height($value)
    {
        $this->new_height = $value;
        return $this;
    }
    
    /**
     * Path to updated file (if this is empty, response contains streamed file).
     *
     * @return string
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /**
     * Path to updated file (if this is empty, response contains streamed file).
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }
    
    /**
     * Your Aspose Cloud Storage name.
     *
     * @return string
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /**
     * Your Aspose Cloud Storage name.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_storage($value)
    {
        $this->storage = $value;
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
            throw new \InvalidArgumentException('Missing the required parameter $drawing_data when calling postDrawingResize');
        }
        // verify the required parameter 'output_format' is set
        if ($this->output_format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $output_format when calling postDrawingResize');
        }
        // verify the required parameter 'new_width' is set
        if ($this->new_width === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new_width when calling postDrawingResize');
        }
        // verify the required parameter 'new_height' is set
        if ($this->new_height === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new_height when calling postDrawingResize');
        }

        $resourcePath = '/cad/resize';
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
        if ($this->new_width !== null) {
            $localName = lcfirst('newWidth');
            $localValue = is_bool($this->new_width) ? ($this->new_width ? 'true' : 'false') : $this->new_width;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->new_height !== null) {
            $localName = lcfirst('newHeight');
            $localValue = is_bool($this->new_height) ? ($this->new_height ? 'true' : 'false') : $this->new_height;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->out_path !== null) {
            $localName = lcfirst('outPath');
            $localValue = is_bool($this->out_path) ? ($this->out_path ? 'true' : 'false') : $this->out_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->storage !== null) {
            $localName = lcfirst('storage');
            $localValue = is_bool($this->storage) ? ($this->storage ? 'true' : 'false') : $this->storage;
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
