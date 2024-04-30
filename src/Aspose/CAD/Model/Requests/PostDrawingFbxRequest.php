<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostDrawingFbxRequest.php">
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
 * Request model for postDrawingFbx operation.
 */
class PostDrawingFbxRequest extends CadRequest
{
    /**
     * Filename of an input drawing on a storage.
     *
     * @var string
     */
    public $name;
    
    /**
     * Export Fbx options passed as a JSON on a request body.
     *
     * @var \Aspose\CAD\Model\FbxOptionsDTO
     */
    public $options;
    
    /**
     * Folder with a drawing to process.
     *
     * @var string
     */
    public $folder;
    
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
     * Initializes a new instance of the PostDrawingFbxRequest class.
     *  
     * @param string $name Filename of an input drawing on a storage.
     * @param \Aspose\CAD\Model\FbxOptionsDTO $options Export Fbx options passed as a JSON on a request body.
     * @param string $folder Folder with a drawing to process.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed file).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $options, $folder = null, $out_path = null, $storage = null)             
    {
        $this->name = $name;
        $this->options = $options;
        $this->folder = $folder;
        $this->out_path = $out_path;
        $this->storage = $storage;
    }

    /**
     * Filename of an input drawing on a storage.
     *
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Filename of an input drawing on a storage.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Export Fbx options passed as a JSON on a request body.
     *
     * @return \Aspose\CAD\Model\FbxOptionsDTO
     */
    public function get_options()
    {
        return $this->options;
    }

    /**
     * Export Fbx options passed as a JSON on a request body.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_options($value)
    {
        $this->options = $value;
        return $this;
    }
    
    /**
     * Folder with a drawing to process.
     *
     * @return string
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /**
     * Folder with a drawing to process.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_folder($value)
    {
        $this->folder = $value;
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
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postDrawingFbx');
        }
        // verify the required parameter 'options' is set
        if ($this->options === null) {
            throw new \InvalidArgumentException('Missing the required parameter $options when calling postDrawingFbx');
        }

        $resourcePath = '/cad/{name}/fbx';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    
        // path params
        if ($this->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }

        // query params
        if ($this->folder !== null) {
            $localName = lcfirst('folder');
            $localValue = is_bool($this->folder) ? ($this->folder ? 'true' : 'false') : $this->folder;
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

        // body params
        $httpBody = null;
        if (isset($this->options)) {
            if (is_string($this->options)) {
                $httpBody = "\"" . $this->options . "\"";   
            } else {
                $httpBody = $this->options;
            }
        }

        $headers = $this->selectHeaders(
            ['application/json'],
            ['application/json']
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
