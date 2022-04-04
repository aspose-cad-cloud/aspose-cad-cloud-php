<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfDigitalSignatureDetailsCore.php">
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

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/**
 * PdfDigitalSignatureDetailsCore
 *
 */
class PdfDigitalSignatureDetailsCore implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfDigitalSignatureDetailsCore";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'certificate' => '\Aspose\CAD\Model\X509Certificate2',
        'reason' => 'string',
        'location' => 'string',
        'signature_date' => '\DateTime',
        'hash_algorithm' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'certificate' => null,
        'reason' => null,
        'location' => null,
        'signature_date' => 'date-time',
        'hash_algorithm' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'certificate' => 'Certificate',
        'reason' => 'Reason',
        'location' => 'Location',
        'signature_date' => 'SignatureDate',
        'hash_algorithm' => 'HashAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificate' => 'setCertificate',
        'reason' => 'setReason',
        'location' => 'setLocation',
        'signature_date' => 'setSignatureDate',
        'hash_algorithm' => 'setHashAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificate' => 'getCertificate',
        'reason' => 'getReason',
        'location' => 'getLocation',
        'signature_date' => 'getSignatureDate',
        'hash_algorithm' => 'getHashAlgorithm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const HASH_ALGORITHM_SHA1 = 'Sha1';
    const HASH_ALGORITHM_SHA256 = 'Sha256';
    const HASH_ALGORITHM_SHA384 = 'Sha384';
    const HASH_ALGORITHM_SHA512 = 'Sha512';
    const HASH_ALGORITHM_MD5 = 'Md5';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHashAlgorithmAllowableValues()
    {
        return [
            self::HASH_ALGORITHM_SHA1,
            self::HASH_ALGORITHM_SHA256,
            self::HASH_ALGORITHM_SHA384,
            self::HASH_ALGORITHM_SHA512,
            self::HASH_ALGORITHM_MD5,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['signature_date'] = isset($data['signature_date']) ? $data['signature_date'] : null;
        $this->container['hash_algorithm'] = isset($data['hash_algorithm']) ? $data['hash_algorithm'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['signature_date'] === null) {
            $invalidProperties[] = "'signature_date' can't be null";
        }
        if ($this->container['hash_algorithm'] === null) {
            $invalidProperties[] = "'hash_algorithm' can't be null";
        }
        $allowedValues = $this->getHashAlgorithmAllowableValues();
        if (!in_array($this->container['hash_algorithm'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hash_algorithm', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['signature_date'] === null) {
            return false;
        }
        if ($this->container['hash_algorithm'] === null) {
            return false;
        }
        $allowedValues = $this->getHashAlgorithmAllowableValues();
        if (!in_array($this->container['hash_algorithm'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets certificate
     *
     * @return \Aspose\CAD\Model\X509Certificate2
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param \Aspose\CAD\Model\X509Certificate2 $certificate certificate
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets signature_date
     *
     * @return \DateTime
     */
    public function getSignatureDate()
    {
        return $this->container['signature_date'];
    }

    /**
     * Sets signature_date
     *
     * @param \DateTime $signature_date signature_date
     *
     * @return $this
     */
    public function setSignatureDate($signature_date)
    {
        $this->container['signature_date'] = $signature_date;

        return $this;
    }

    /**
     * Gets hash_algorithm
     *
     * @return string
     */
    public function getHashAlgorithm()
    {
        return $this->container['hash_algorithm'];
    }

    /**
     * Sets hash_algorithm
     *
     * @param string $hash_algorithm hash_algorithm
     *
     * @return $this
     */
    public function setHashAlgorithm($hash_algorithm)
    {
        $allowedValues = $this->getHashAlgorithmAllowableValues();
        if ((!is_numeric($hash_algorithm) && !in_array($hash_algorithm, $allowedValues)) || (is_numeric($hash_algorithm) && !in_array($allowedValues[$hash_algorithm], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'hash_algorithm', must be one of '%s'", implode("', '", $allowedValues)));
        }
            
        $this->container['hash_algorithm'] = $hash_algorithm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


