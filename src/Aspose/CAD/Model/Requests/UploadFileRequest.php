<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UploadFileRequest.php">
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
 * Request model for uploadFile operation.
 */
class UploadFileRequest extends CadRequest
{
    /**
     * Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header.
     *
     * @var string
     */
    public $path;
    
    /**
     * File to upload
     *
     * @var string
     */
    public $file;
    
    /**
     * Storage name
     *
     * @var string
     */
    public $storage_name;
    
    /**
     * Initializes a new instance of the UploadFileRequest class.
     *  
     * @param string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header.
     * @param string $file File to upload
     * @param string $storage_name Storage name
     */
    public function __construct($path, $file, $storage_name = null)             
    {
        $this->path = $path;
        $this->file = $file;
        $this->storage_name = $storage_name;
    }

    /**
     * Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header.
     *
     * @return string
     */
    public function get_path()
    {
        return $this->path;
    }

    /**
     * Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header.
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }
    
    /**
     * File to upload
     *
     * @return string
     */
    public function get_file()
    {
        return $this->file;
    }

    /**
     * File to upload
     *
     * @return \Aspose\CAD\Model\Requests\Request
     */
    public function set_file($value)
    {
        $this->file = $value;
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
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\CAD\Configuration $config CAD API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'path' is set
        if ($this->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling uploadFile');
        }
        // verify the required parameter 'file' is set
        if ($this->file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling uploadFile');
        }

        $resourcePath = '/cad/storage/file/{path}';
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
    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // form params
        if ($this->file !== null) {
            $formParams[ObjectSerializer::toStandardName('file')] = ObjectSerializer::toFormValue($this->file);
        }
        // body params
        $httpBody = null;

        $headers = $this->selectHeaders(
            ['application/json'],
            ['multipart/form-data']
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
