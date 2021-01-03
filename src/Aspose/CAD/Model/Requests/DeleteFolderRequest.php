<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteFolderRequest.php">
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
 * Request model for deleteFolder operation.
 */
class DeleteFolderRequest extends CadRequest
{
    /**
     * Folder path e.g. '/folder'
     *
     * @var string
     */
    public $path;
    
    /**
     * Storage name
     *
     * @var string
     */
    public $storage_name;
    
    /**
     * Enable to delete folders, subfolders and files
     *
     * @var bool
     */
    public $recursive;
    
    /**
     * Initializes a new instance of the DeleteFolderRequest class.
     *  
     * @param string $path Folder path e.g. '/folder'
     * @param string $storage_name Storage name
     * @param bool $recursive Enable to delete folders, subfolders and files
     */
    public function __construct($path, $storage_name = null, $recursive = null)             
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
        $this->recursive = $recursive;
    }

    /**
     * Folder path e.g. '/folder'
     *
     * @return string
     */
    public function get_path()
    {
        return $this->path;
    }

    /**
     * Folder path e.g. '/folder'
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }
    
    /**
     * Storage name
     *
     * @return string
     */
    public function get_storage_name()
    {
        return $this->storage_name;
    }

    /**
     * Storage name
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_storage_name($value)
    {
        $this->storage_name = $value;
        return $this;
    }
    
    /**
     * Enable to delete folders, subfolders and files
     *
     * @return bool
     */
    public function get_recursive()
    {
        return $this->recursive;
    }

    /**
     * Enable to delete folders, subfolders and files
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_recursive($value)
    {
        $this->recursive = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\CAD\Configuration $config CAD API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'path' is set
        if ($this->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteFolder');
        }

        $resourcePath = '/cad/storage/folder/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    
        // path params
        if ($this->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->path), $resourcePath);
        }

        // query params
        if ($this->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($this->storage_name) ? ($this->storage_name ? 'true' : 'false') : $this->storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->recursive !== null) {
            $localName = lcfirst('recursive');
            $localValue = is_bool($this->recursive) ? ($this->recursive ? 'true' : 'false') : $this->recursive;
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
