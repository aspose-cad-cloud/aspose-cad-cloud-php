<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MoveFolderRequest.php">
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
 * Request model for moveFolder operation.
 */
class MoveFolderRequest extends CadRequest
{
    /**
     * Folder path to move e.g. '/folder'
     *
     * @var string
     */
    public $src_path;
    
    /**
     * Destination folder path to move to e.g '/dst'
     *
     * @var string
     */
    public $dest_path;
    
    /**
     * Source storage name
     *
     * @var string
     */
    public $src_storage_name;
    
    /**
     * Destination storage name
     *
     * @var string
     */
    public $dest_storage_name;
    
    /**
     * Initializes a new instance of the MoveFolderRequest class.
     *  
     * @param string $src_path Folder path to move e.g. '/folder'
     * @param string $dest_path Destination folder path to move to e.g '/dst'
     * @param string $src_storage_name Source storage name
     * @param string $dest_storage_name Destination storage name
     */
    public function __construct($src_path, $dest_path, $src_storage_name = null, $dest_storage_name = null)             
    {
        $this->src_path = $src_path;
        $this->dest_path = $dest_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
    }

    /**
     * Folder path to move e.g. '/folder'
     *
     * @return string
     */
    public function get_src_path()
    {
        return $this->src_path;
    }

    /**
     * Folder path to move e.g. '/folder'
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_src_path($value)
    {
        $this->src_path = $value;
        return $this;
    }
    
    /**
     * Destination folder path to move to e.g '/dst'
     *
     * @return string
     */
    public function get_dest_path()
    {
        return $this->dest_path;
    }

    /**
     * Destination folder path to move to e.g '/dst'
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_dest_path($value)
    {
        $this->dest_path = $value;
        return $this;
    }
    
    /**
     * Source storage name
     *
     * @return string
     */
    public function get_src_storage_name()
    {
        return $this->src_storage_name;
    }

    /**
     * Source storage name
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_src_storage_name($value)
    {
        $this->src_storage_name = $value;
        return $this;
    }
    
    /**
     * Destination storage name
     *
     * @return string
     */
    public function get_dest_storage_name()
    {
        return $this->dest_storage_name;
    }

    /**
     * Destination storage name
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_dest_storage_name($value)
    {
        $this->dest_storage_name = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\CAD\Configuration $config CAD API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'src_path' is set
        if ($this->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling moveFolder');
        }
        // verify the required parameter 'dest_path' is set
        if ($this->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling moveFolder');
        }

        $resourcePath = '/cad/storage/folder/move/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    
        // path params
        if ($this->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->src_path), $resourcePath);
        }

        // query params
        if ($this->dest_path !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($this->dest_path) ? ($this->dest_path ? 'true' : 'false') : $this->dest_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->src_storage_name !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($this->src_storage_name) ? ($this->src_storage_name ? 'true' : 'false') : $this->src_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->dest_storage_name !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($this->dest_storage_name) ? ($this->dest_storage_name ? 'true' : 'false') : $this->dest_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // body params
        $httpBody = null;

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
