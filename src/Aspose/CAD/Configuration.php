<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Configuration.php">
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

namespace Aspose\CAD;

/**
 * Represents a set of configuration settings
 */
class Configuration
{
    /**
     * AppKey for API
     *
     * @var string
     */
    public $appKey = '';
    
    /**
     * AppSid for API
     *
     * @var string
     */
    public $appSid = '';

    /**
     * The base url
     *
     * @var string
     */
    public $baseUrl = 'https://api.aspose.cloud/';
    
    /**
     * Version of API to use
     *
     * @var string
     */
    public $apiVersion = "v3.0";

    /**
     * User agent of the HTTP request
     *
     * @var string
     */
    public $userAgent = "php sdk";

    /**
     * Debug mode switch (default set to false)
     *
     * @var bool
     */
    public $debug = false;

    /**
     * If you're using on-premise deployment with metered license
     *
     * @var bool
     */
    public $onPremise = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    public $debugFile = 'php://output';

    /*
     * Timeout.
     *
     */
    public $timeout = 1200;
    
    /*
     * Version of Aspose.CAD Cloud API
     *
     */
    private $clientVersion = '24.5.2';

    /**
     * Constructor
     */
    public function __construct()
    {
        date_default_timezone_set('UTC');
    }
    
    /**
     * Gets client version
     *
     */
    public function getClientVersion()
    {
        return $this->clientVersion;
    }

    /**
     * Sets AppSid
     *
     * @param string $appSid
     *
     * @return $this
     */
    public function setAppSid($appSid)
    {
        $this->appSid = $appSid;
        return $this;
    }
    
    /**
     * Gets AppSid
     * @return $appSid
     */
    public function getAppSid()
    {
        return $this->appSid;
    }
    
    /**
     * Sets AppKey
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }
    
    /**
     * Gets AppKey
     * @return $appKey
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * Sets the JWT access token
     *
     * @param string $accessToken JWT token
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the JWT access token
     *
     * @return string JWT token
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the baseUrl
     *
     * @param string $baseUrl Base url
     *
     * @return $this
     */
    public function setBaseUrl($baseUrl)
    {
        if ($baseUrl[strlen($baseUrl) - 1] !== "/")
        {
            $baseUrl = $baseUrl . "/";
        }

        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * Gets the baseUrl
     *
     * @return string baseUrl
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Sets the apiVersion
     *
     * @param string $apiVersion API version
     *
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * Gets the apiVersion
     *
     * @return string apiVersion
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the metered usage with on-premise deployment
     *
     * @param bool $onPremise If on-premise deployment with metered license is used
     *
     * @return $this
     */
    public function setOnPremise($onPremise)
    {
        $this->onPremise = $onPremise;
        return $this;
    }

     /**
     * Determines if on-premise deployment with metered license is used
     *
     * @return bool
     */
    public function getOnPremise()
    {
        return $this->onPremise;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Returns full API base url with version
     *
     * @return string
     */
    public function getApiBaseUrl()
    {
        return $this->baseUrl . $this->apiVersion;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Aspose\CAD) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 2' . PHP_EOL;

        return $report;
    }
}
