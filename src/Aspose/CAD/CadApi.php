<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CadApi.php">
 *   Copyright (c) 2018-2020 Aspose Pty Ltd. All rights reserved.
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

use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\RequestException;
use \GuzzleHttp\Psr7\MultipartStream;
use \GuzzleHttp\Psr7\Request;
use \GuzzleHttp\RequestOptions;
use \Aspose\CAD\ObjectSerializer;

/**
 * Aspose.CAD Cloud APIs.
 */
class CadApi
{
    /**
     * Stores client instance
     *
     * @var \GuzzleHttp\ClientInterface client for calling the API
     */
    private $client;

    /**
     * Stores configuration
     *
     * @var \Aspose\CAD\Configuration Configuration info
     */
    private $configuration;
  
    /**
     * Initialize a new instance of CadApi
     *
     * @param \Aspose\CAD\Configuration   $config Configuration info
     * @param \GuzzleHttp\ClientInterface   $client PSR-7 compliant HTTP client
     */
    public function __construct($config = null, $client = null)
    {
        $this->client = $client ?: new Client();
        $this->configuration = $config ?: new Configuration();
        $execTime = (int)ini_get('max_execution_time');
        if ($execTime > 0 && $execTime < 500)
        {
            set_time_limit(500);
        }

        if (!$config->getOnPremise())
        {
            $this->requestToken();
        }
    }

    /**
     * Gets the configuration.
     * @return \Aspose\CAD\Configuration
     */
    public function getConfig() 
    {
        return $this->configuration;
    }
    
    /**
     * Convert CAD drawing to DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG format.
     *
     * @param \Aspose\CAD\Model\Requests\ConvertRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function convert($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Convert CAD drawing to DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG format.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\ConvertRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Copy file
     *
     * @param \Aspose\CAD\Model\Requests\CopyFileRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFile($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Copy file
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\CopyFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFileAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Copy folder
     *
     * @param \Aspose\CAD\Model\Requests\CopyFolderRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Copy folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\CopyFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Create the folder
     *
     * @param \Aspose\CAD\Model\Requests\CreateFolderRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Create the folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\CreateFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Delete file
     *
     * @param \Aspose\CAD\Model\Requests\DeleteFileRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFile($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Delete file
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\DeleteFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Delete folder
     *
     * @param \Aspose\CAD\Model\Requests\DeleteFolderRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Delete folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\DeleteFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Download file
     *
     * @param \Aspose\CAD\Model\Requests\DownloadFileRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function downloadFile($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Download file
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\DownloadFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get Metadata info
     *
     * @param \Aspose\CAD\Model\Requests\EditMetadataRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function editMetadata($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get Metadata info
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\EditMetadataRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function editMetadataAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Extract Metadata from CAD drawing to txt, xml or json file.
     *
     * @param \Aspose\CAD\Model\Requests\ExtractMetadataRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function extractMetadata($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Extract Metadata from CAD drawing to txt, xml or json file.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\ExtractMetadataRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function extractMetadataAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Extract Text from CAD drawing to txt file
     *
     * @param \Aspose\CAD\Model\Requests\ExtractTextRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function extractText($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Extract Text from CAD drawing to txt file
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\ExtractTextRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function extractTextAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get disc usage
     *
     * @param \Aspose\CAD\Model\Requests\GetDiscUsageRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\DiscUsage
     */
    public function getDiscUsage($request)
    {
        $returnType = '\Aspose\CAD\Model\DiscUsage';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get disc usage
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\GetDiscUsageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDiscUsageAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\DiscUsage';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Retrieves info about an existing drawing.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingPropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\CadResponse
     */
    public function getDrawingProperties($request)
    {
        $returnType = '\Aspose\CAD\Model\CadResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Retrieves info about an existing drawing.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingPropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDrawingPropertiesAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\CadResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Resize an existing drawing.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingResizeRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getDrawingResize($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Resize an existing drawing.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingResizeRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDrawingResizeAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Rotate/flip an existing drawing.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingRotateFlipRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getDrawingRotateFlip($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Rotate/flip an existing drawing.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingRotateFlipRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDrawingRotateFlipAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to another format.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingSaveAsRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getDrawingSaveAs($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to another format.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\GetDrawingSaveAsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDrawingSaveAsAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get file versions
     *
     * @param \Aspose\CAD\Model\Requests\GetFileVersionsRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\FileVersions
     */
    public function getFileVersions($request)
    {
        $returnType = '\Aspose\CAD\Model\FileVersions';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get file versions
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\GetFileVersionsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileVersionsAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\FileVersions';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get all files and folders within a folder
     *
     * @param \Aspose\CAD\Model\Requests\GetFilesListRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\FilesList
     */
    public function getFilesList($request)
    {
        $returnType = '\Aspose\CAD\Model\FilesList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get all files and folders within a folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\GetFilesListRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesListAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\FilesList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Move file
     *
     * @param \Aspose\CAD\Model\Requests\MoveFileRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFile($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Move file
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\MoveFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFileAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Move folder
     *
     * @param \Aspose\CAD\Model\Requests\MoveFolderRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Move folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\MoveFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Check if file or folder exists
     *
     * @param \Aspose\CAD\Model\Requests\ObjectExistsRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\ObjectExist
     */
    public function objectExists($request)
    {
        $returnType = '\Aspose\CAD\Model\ObjectExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Check if file or folder exists
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\ObjectExistsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectExistsAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\ObjectExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Convert bitmap image to DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, SVG format.
     *
     * @param \Aspose\CAD\Model\Requests\PaperToCadRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function paperToCad($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Convert bitmap image to DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, SVG format.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PaperToCadRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paperToCadAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to BMP format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingBmpRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingBmp($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to BMP format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingBmpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingBmpAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to CGM format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingCgmRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingCgm($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to CGM format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingCgmRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingCgmAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to DXF format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDXFRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingDXF($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to DXF format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDXFRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingDXFAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to Dicom format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDicomRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingDicom($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to Dicom format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDicomRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingDicomAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to Draco format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDracoRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingDraco($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to Draco format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDracoRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingDracoAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to Dwf format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDwfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingDwf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to Dwf format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingDwfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingDwfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to Fbx format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingFbxRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingFbx($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to Fbx format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingFbxRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingFbxAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing into GIF format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingGifRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingGif($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing into GIF format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingGifRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingGifAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to GLB format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingGlbRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingGlb($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to GLB format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingGlbRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingGlbAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to GLTF format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingGltfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingGltf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to GLTF format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingGltfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingGltfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing into JPEG format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingJpegRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingJpeg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing into JPEG format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingJpegRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingJpegAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing into JPEG2000 format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingJpeg2000Request $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingJpeg2000($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing into JPEG2000 format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingJpeg2000Request $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingJpeg2000Async($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to Obj format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingObjRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingObj($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to Obj format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingObjRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingObjAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to PDF format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPdfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingPdf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to PDF format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPdfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingPdfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing into PNG format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPngRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingPng($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing into PNG format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPngRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingPngAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Retrieves info about drawing which is passed as a zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\CadResponse
     */
    public function postDrawingProperties($request)
    {
        $returnType = '\Aspose\CAD\Model\CadResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Retrieves info about drawing which is passed as a zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingPropertiesAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\CadResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing into PSD format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPsdRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingPsd($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing into PSD format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingPsdRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingPsdAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Resize a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingResizeRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingResize($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Resize a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingResizeRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingResizeAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Rotate/flip a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingRotateFlipRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingRotateFlip($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Rotate/flip a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingRotateFlipRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingRotateFlipAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to STP format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingSTPRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingSTP($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to STP format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingSTPRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingSTPAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export existing drawing to another format. Drawing data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingSaveAsRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingSaveAs($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export existing drawing to another format. Drawing data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingSaveAsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingSaveAsAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to SVG format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingSvgRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingSvg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to SVG format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingSvgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingSvgAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to 3ds format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingThreeDSRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingThreeDS($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to 3ds format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingThreeDSRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingThreeDSAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing into TIFF format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingTiffRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingTiff($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing into TIFF format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingTiffAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to U3d format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingU3dRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingU3d($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to U3d format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingU3dRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingU3dAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to Webp format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingWebpRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingWebp($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to Webp format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingWebpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingWebpAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export an existing drawing to WMF format with export settings specified.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingWmfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postDrawingWmf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export an existing drawing to WMF format with export settings specified.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PostDrawingWmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDrawingWmfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to BMP format. Drawing data is passed as zero-indexed multipart/form-data as well as export BMP options serialized as JSON. Order of drawing data and BMP options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingBmpRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingBmp($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to BMP format. Drawing data is passed as zero-indexed multipart/form-data as well as export BMP options serialized as JSON. Order of drawing data and BMP options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingBmpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingBmpAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to CGM format. Drawing data is passed as zero-indexed multipart/form-data as well as export CGM options serialized as JSON. Order of drawing data and CGM options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingCgmRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingCgm($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to CGM format. Drawing data is passed as zero-indexed multipart/form-data as well as export CGM options serialized as JSON. Order of drawing data and CGM options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingCgmRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingCgmAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to DXF format. Drawing data is passed as zero-indexed multipart/form-data as well as export DXF options serialized as JSON. Order of drawing data and DXF options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDXFRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingDXF($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to DXF format. Drawing data is passed as zero-indexed multipart/form-data as well as export DXF options serialized as JSON. Order of drawing data and DXF options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDXFRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingDXFAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to Dicom format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dicom options serialized as JSON. Order of drawing data and Dicom options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDicomRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingDicom($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to Dicom format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dicom options serialized as JSON. Order of drawing data and Dicom options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDicomRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingDicomAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to Draco format. Drawing data is passed as zero-indexed multipart/form-data as well as export Draco options serialized as JSON. Order of drawing data and Draco options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDracoRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingDraco($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to Draco format. Drawing data is passed as zero-indexed multipart/form-data as well as export Draco options serialized as JSON. Order of drawing data and Draco options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDracoRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingDracoAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to Dwf format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dwf options serialized as JSON. Order of drawing data and Dwf options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDwfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingDwf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to Dwf format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dwf options serialized as JSON. Order of drawing data and Dwf options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingDwfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingDwfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to Fbx format. Drawing data is passed as zero-indexed multipart/form-data as well as export Fbx options serialized as JSON. Order of drawing data and Fbx options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingFbxRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingFbx($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to Fbx format. Drawing data is passed as zero-indexed multipart/form-data as well as export Fbx options serialized as JSON. Order of drawing data and Fbx options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingFbxRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingFbxAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to GIF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GIF options serialized as JSON. Order of drawing data and GIF options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingGifRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingGif($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to GIF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GIF options serialized as JSON. Order of drawing data and GIF options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingGifRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingGifAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to GLB format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLB options serialized as JSON. Order of drawing data and GLB options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingGlbRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingGlb($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to GLB format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLB options serialized as JSON. Order of drawing data and GLB options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingGlbRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingGlbAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to GLTF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLTF options serialized as JSON. Order of drawing data and GLTF options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingGltfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingGltf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to GLTF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLTF options serialized as JSON. Order of drawing data and GLTF options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingGltfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingGltfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to JPEG format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG options serialized as JSON. Order of drawing data and JPEG options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingJpegRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingJpeg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to JPEG format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG options serialized as JSON. Order of drawing data and JPEG options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingJpegRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingJpegAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to JPEG2000 format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG2000 options serialized as JSON. Order of drawing data and JPEG2000 options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingJpeg2000Request $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingJpeg2000($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to JPEG2000 format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG2000 options serialized as JSON. Order of drawing data and JPEG2000 options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingJpeg2000Request $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingJpeg2000Async($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to Obj format. Drawing data is passed as zero-indexed multipart/form-data as well as export Obj options serialized as JSON. Order of drawing data and Obj options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingObjRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingObj($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to Obj format. Drawing data is passed as zero-indexed multipart/form-data as well as export Obj options serialized as JSON. Order of drawing data and Obj options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingObjRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingObjAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to PDF format. Drawing data is passed as zero-indexed multipart/form-data as well as export PDF options serialized as JSON. Order of drawing data and PDF options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingPdfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingPdf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to PDF format. Drawing data is passed as zero-indexed multipart/form-data as well as export PDF options serialized as JSON. Order of drawing data and PDF options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingPdfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingPdfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to PNG format. Drawing data is passed as zero-indexed multipart/form-data as well as export PNG options serialized as JSON. Order of drawing data and PNG options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingPngRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingPng($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to PNG format. Drawing data is passed as zero-indexed multipart/form-data as well as export PNG options serialized as JSON. Order of drawing data and PNG options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingPngRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingPngAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to PSD format. Drawing data is passed as zero-indexed multipart/form-data as well as export PSD options serialized as JSON. Order of drawing data and PSD options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingPsdRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingPsd($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to PSD format. Drawing data is passed as zero-indexed multipart/form-data as well as export PSD options serialized as JSON. Order of drawing data and PSD options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingPsdRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingPsdAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to Stp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Stp options serialized as JSON. Order of drawing data and Stp options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingSTPRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingSTP($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to Stp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Stp options serialized as JSON. Order of drawing data and Stp options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingSTPRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingSTPAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to SVG format. Drawing data is passed as zero-indexed multipart/form-data as well as export SVG options serialized as JSON. Order of drawing data and SVG options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingSvgRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingSvg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to SVG format. Drawing data is passed as zero-indexed multipart/form-data as well as export SVG options serialized as JSON. Order of drawing data and SVG options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingSvgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingSvgAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to 3ds format. Drawing data is passed as zero-indexed multipart/form-data as well as export 3ds options serialized as JSON. Order of drawing data and 3ds options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingThreeDSRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingThreeDS($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to 3ds format. Drawing data is passed as zero-indexed multipart/form-data as well as export 3ds options serialized as JSON. Order of drawing data and 3ds options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingThreeDSRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingThreeDSAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to TIFF format. Drawing data is passed as zero-indexed multipart/form-data as well as export TIFF options serialized as JSON. Order of drawing data and TIFF options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingTiffRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingTiff($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to TIFF format. Drawing data is passed as zero-indexed multipart/form-data as well as export TIFF options serialized as JSON. Order of drawing data and TIFF options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingTiffAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to U3d format. Drawing data is passed as zero-indexed multipart/form-data as well as export U3d options serialized as JSON. Order of drawing data and U3d options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingU3dRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingU3d($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to U3d format. Drawing data is passed as zero-indexed multipart/form-data as well as export U3d options serialized as JSON. Order of drawing data and U3d options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingU3dRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingU3dAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to Webp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Webp options serialized as JSON. Order of drawing data and Webp options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingWebpRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingWebp($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to Webp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Webp options serialized as JSON. Order of drawing data and Webp options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingWebpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingWebpAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Export drawing to WMF format. Drawing data is passed as zero-indexed multipart/form-data as well as export WMF options serialized as JSON. Order of drawing data and WMF options could vary.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingWmfRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putDrawingWmf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Export drawing to WMF format. Drawing data is passed as zero-indexed multipart/form-data as well as export WMF options serialized as JSON. Order of drawing data and WMF options could vary.
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutDrawingWmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDrawingWmfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Save Metadata
     *
     * @param \Aspose\CAD\Model\Requests\PutEditMetadataRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putEditMetadata($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Save Metadata
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\PutEditMetadataRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putEditMetadataAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Check if storage exists
     *
     * @param \Aspose\CAD\Model\Requests\StorageExistsRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\StorageExist
     */
    public function storageExists($request)
    {
        $returnType = '\Aspose\CAD\Model\StorageExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Check if storage exists
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\StorageExistsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storageExistsAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\StorageExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Upload file
     *
     * @param \Aspose\CAD\Model\Requests\UploadFileRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\CAD\Model\FilesUploadResult
     */
    public function uploadFile($request)
    {
        $returnType = '\Aspose\CAD\Model\FilesUploadResult';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Upload file
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\UploadFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync($request) 
    {
        $returnType = '\Aspose\CAD\Model\FilesUploadResult';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Return file for viewer
     *
     * @param \Aspose\CAD\Model\Requests\ViewerRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function viewer($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Return file for viewer
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\ViewerRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function viewerAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Add watermark to drawing
     *
     * @param \Aspose\CAD\Model\Requests\WatermarkRequest $request Request object for operation
     *
     * @throws \Aspose\CAD\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function watermark($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Add watermark to drawing
     * Performs operation asynchronously.
     *
     * @param \Aspose\CAD\Model\Requests\WatermarkRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function watermarkAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Prepares HTTP request for CAD API operation
     *
     * @param \Aspose\CAD\CadRequest $request CAD request object for operation
     * @param string $httpMethod HTTP request method
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    private function getHttpRequest($cadRequest, $httpMethod)
    {
        $initialInfo = $cadRequest->getHttpRequestInfo($this->configuration);
        $resourcePath = $initialInfo['resourcePath'];
        $formParams = $initialInfo['formParams'];
        $queryParams = $initialInfo['queryParams'];
        $headerParams = $initialInfo['headerParams'];
        $headers = $initialInfo['headers'];
        $initialHttpBody = $initialInfo['httpBody'];
        $httpBody = '';

        // for model (json/xml)
        if (isset($initialHttpBody)) {
            $httpBody = $initialHttpBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValue) {
                $multipartContents[] = [
                    'name' => $formParamName,
                    'contents' => $formParamValue,
                    'filename' => $formParamName,
                    'headers' => [
                        'Content-Type' => 'application/octet-stream',
                        'Content-Length' => strlen($formParamValue)
                    ]
                ];
            }
            
            $boundary = sha1(uniqid('', true));
            $headers['Content-Type'] = "multipart/form-data; boundary=" . $boundary;
            $httpBody = new MultipartStream($multipartContents, $boundary);
        }
        
        if (!$this->configuration->getOnPremise() && $this->configuration->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->configuration->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->configuration->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->configuration->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->configuration->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            $httpMethod,
            $this->configuration->getApiBaseUrl() . "/" . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->configuration->getDebug()) {
            $this->writeRequestLog($httpMethod, $this->configuration->getApiBaseUrl() . "/" . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }
    
    /**
     * Processes CAD API response
     *
     * @param \GuzzleHttp\Psr7\Request $request CAD operation request
     * @param \Psr\Http\Message\ResponseInterface $response CAD operation response
     * @param bool $hasReturnType If response has a return type
     * @param string $returnType Return type of response
     * @param bool $isBinary If response should be binary
     *
     * @throws \Aspose\CAD\ApiException
     * @return mixed
     */
    private function processResponse($request, $response, $hasReturnType, $returnType, $isBinary)
    {
        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            $body = $response->getBody();
            $error = null;
            if (isset($body)) {
                try {
                    $error = ObjectSerializer::deserialize($body->getContents(), '\Aspose\CAD\Model\Error', []);
                } catch (\Throwable $th) {
                    // suppress exception
                }
            }

            throw new ApiException(
                sprintf('[%d] Error connecting to the API (%s); Body: (%s)', $statusCode, $request->getUri(), $response->getBody()), $statusCode, $error
            );
        }
        
        $result = null;

        if ($hasReturnType)
        {
            $responseBody = $response->getBody();
            if ($isBinary) {
                return $responseBody;
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            $result = ObjectSerializer::deserialize($content, $returnType, []);
            
            if ($this->configuration->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $result);
            }
        }
        
        return $result;
    }
    
    /**
     * Processes the exception caught during request execution
     *
     * @param \GuzzleHttp\Exception\RequestException $exception The initial exception
     *
     * @throws \Aspose\CAD\ApiException
     */
    private function processException($exception)
    {
        $response = $exception->getResponse();
        $statusCode = isset($response) ? $response->getStatusCode() : null;

        throw new ApiException(
            sprintf('[%d] Error connecting to the API (%s); Message: (%s)', $statusCode, $exception->getRequest()->getUri(), $exception->getMessage()), $statusCode
        );
    }
    
    /**
     * Create http client options
     *
     * @throws \RuntimeException Throws on file opening failure
     * @return array HTTP client options
     */
    private function createHttpClientOptions() 
    {
        $options = [];
        if ($this->configuration->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->configuration->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->configuration->getDebugFile());
            }
        }
        
        $options[RequestOptions::TIMEOUT] = 1200;
        $options[RequestOptions::READ_TIMEOUT] = 1200;
        $options[RequestOptions::CONNECT_TIMEOUT] = 1200;
        return $options;
    }
    
    /**
     * Executes response logging
     */
    private function writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
    
    /**
     * Executes request logging
     */
    private function writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
    
    /**
     * Executes header and boy formatting
     */
    private function writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }
  
    /**
     * Gets a request token from server
     */
    private function requestToken() 
    {
        $requestUrl = $this->configuration->getBaseUrl() . "connect/token";
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->configuration->getAppSid() . "&client_secret=" . $this->configuration->getAppKey();
        $headers = [];
        $headers['Content-Type'] = "application/x-www-form-urlencoded";
        $headers['Content-Length'] = strlen($postData);
        $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->configuration->setAccessToken($result["access_token"]);
    }
}
