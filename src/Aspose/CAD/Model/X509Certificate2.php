<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="X509Certificate2.php">
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
use \Aspose\CAD\ObjectSerializer;

/**
 * X509Certificate2
 *
 */
class X509Certificate2 extends X509Certificate 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "X509Certificate2";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'archived' => 'bool',
        'extensions' => 'object[]',
        'friendly_name' => 'string',
        'has_private_key' => 'bool',
        'private_key' => '\Aspose\CAD\Model\AsymmetricAlgorithm',
        'issuer_name' => '\Aspose\CAD\Model\X500DistinguishedName',
        'not_after' => '\DateTime',
        'not_before' => '\DateTime',
        'public_key' => '\Aspose\CAD\Model\PublicKey',
        'raw_data' => 'string',
        'serial_number' => 'string',
        'signature_algorithm' => '\Aspose\CAD\Model\Oid',
        'subject_name' => '\Aspose\CAD\Model\X500DistinguishedName',
        'thumbprint' => 'string',
        'version' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'archived' => null,
        'extensions' => null,
        'friendly_name' => null,
        'has_private_key' => null,
        'private_key' => null,
        'issuer_name' => null,
        'not_after' => 'date-time',
        'not_before' => 'date-time',
        'public_key' => null,
        'raw_data' => 'byte',
        'serial_number' => null,
        'signature_algorithm' => null,
        'subject_name' => null,
        'thumbprint' => null,
        'version' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'archived' => 'Archived',
        'extensions' => 'Extensions',
        'friendly_name' => 'FriendlyName',
        'has_private_key' => 'HasPrivateKey',
        'private_key' => 'PrivateKey',
        'issuer_name' => 'IssuerName',
        'not_after' => 'NotAfter',
        'not_before' => 'NotBefore',
        'public_key' => 'PublicKey',
        'raw_data' => 'RawData',
        'serial_number' => 'SerialNumber',
        'signature_algorithm' => 'SignatureAlgorithm',
        'subject_name' => 'SubjectName',
        'thumbprint' => 'Thumbprint',
        'version' => 'Version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'archived' => 'setArchived',
        'extensions' => 'setExtensions',
        'friendly_name' => 'setFriendlyName',
        'has_private_key' => 'setHasPrivateKey',
        'private_key' => 'setPrivateKey',
        'issuer_name' => 'setIssuerName',
        'not_after' => 'setNotAfter',
        'not_before' => 'setNotBefore',
        'public_key' => 'setPublicKey',
        'raw_data' => 'setRawData',
        'serial_number' => 'setSerialNumber',
        'signature_algorithm' => 'setSignatureAlgorithm',
        'subject_name' => 'setSubjectName',
        'thumbprint' => 'setThumbprint',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'archived' => 'getArchived',
        'extensions' => 'getExtensions',
        'friendly_name' => 'getFriendlyName',
        'has_private_key' => 'getHasPrivateKey',
        'private_key' => 'getPrivateKey',
        'issuer_name' => 'getIssuerName',
        'not_after' => 'getNotAfter',
        'not_before' => 'getNotBefore',
        'public_key' => 'getPublicKey',
        'raw_data' => 'getRawData',
        'serial_number' => 'getSerialNumber',
        'signature_algorithm' => 'getSignatureAlgorithm',
        'subject_name' => 'getSubjectName',
        'thumbprint' => 'getThumbprint',
        'version' => 'getVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
        $this->container['friendly_name'] = isset($data['friendly_name']) ? $data['friendly_name'] : null;
        $this->container['has_private_key'] = isset($data['has_private_key']) ? $data['has_private_key'] : null;
        $this->container['private_key'] = isset($data['private_key']) ? $data['private_key'] : null;
        $this->container['issuer_name'] = isset($data['issuer_name']) ? $data['issuer_name'] : null;
        $this->container['not_after'] = isset($data['not_after']) ? $data['not_after'] : null;
        $this->container['not_before'] = isset($data['not_before']) ? $data['not_before'] : null;
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null;
        $this->container['raw_data'] = isset($data['raw_data']) ? $data['raw_data'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['signature_algorithm'] = isset($data['signature_algorithm']) ? $data['signature_algorithm'] : null;
        $this->container['subject_name'] = isset($data['subject_name']) ? $data['subject_name'] : null;
        $this->container['thumbprint'] = isset($data['thumbprint']) ? $data['thumbprint'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['has_private_key'] === null) {
            $invalidProperties[] = "'has_private_key' can't be null";
        }
        if ($this->container['not_after'] === null) {
            $invalidProperties[] = "'not_after' can't be null";
        }
        if ($this->container['not_before'] === null) {
            $invalidProperties[] = "'not_before' can't be null";
        }
        if (!is_null($this->container['raw_data']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['raw_data'])) {
            $invalidProperties[] = "invalid value for 'raw_data', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['archived'] === null) {
            return false;
        }
        if ($this->container['has_private_key'] === null) {
            return false;
        }
        if ($this->container['not_after'] === null) {
            return false;
        }
        if ($this->container['not_before'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived archived
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets extensions
     *
     * @return object[]
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     *
     * @param object[] $extensions extensions
     *
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

        return $this;
    }

    /**
     * Gets friendly_name
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->container['friendly_name'];
    }

    /**
     * Sets friendly_name
     *
     * @param string $friendly_name friendly_name
     *
     * @return $this
     */
    public function setFriendlyName($friendly_name)
    {
        $this->container['friendly_name'] = $friendly_name;

        return $this;
    }

    /**
     * Gets has_private_key
     *
     * @return bool
     */
    public function getHasPrivateKey()
    {
        return $this->container['has_private_key'];
    }

    /**
     * Sets has_private_key
     *
     * @param bool $has_private_key has_private_key
     *
     * @return $this
     */
    public function setHasPrivateKey($has_private_key)
    {
        $this->container['has_private_key'] = $has_private_key;

        return $this;
    }

    /**
     * Gets private_key
     *
     * @return \Aspose\CAD\Model\AsymmetricAlgorithm
     */
    public function getPrivateKey()
    {
        return $this->container['private_key'];
    }

    /**
     * Sets private_key
     *
     * @param \Aspose\CAD\Model\AsymmetricAlgorithm $private_key private_key
     *
     * @return $this
     */
    public function setPrivateKey($private_key)
    {
        $this->container['private_key'] = $private_key;

        return $this;
    }

    /**
     * Gets issuer_name
     *
     * @return \Aspose\CAD\Model\X500DistinguishedName
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /**
     * Sets issuer_name
     *
     * @param \Aspose\CAD\Model\X500DistinguishedName $issuer_name issuer_name
     *
     * @return $this
     */
    public function setIssuerName($issuer_name)
    {
        $this->container['issuer_name'] = $issuer_name;

        return $this;
    }

    /**
     * Gets not_after
     *
     * @return \DateTime
     */
    public function getNotAfter()
    {
        return $this->container['not_after'];
    }

    /**
     * Sets not_after
     *
     * @param \DateTime $not_after not_after
     *
     * @return $this
     */
    public function setNotAfter($not_after)
    {
        $this->container['not_after'] = $not_after;

        return $this;
    }

    /**
     * Gets not_before
     *
     * @return \DateTime
     */
    public function getNotBefore()
    {
        return $this->container['not_before'];
    }

    /**
     * Sets not_before
     *
     * @param \DateTime $not_before not_before
     *
     * @return $this
     */
    public function setNotBefore($not_before)
    {
        $this->container['not_before'] = $not_before;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return \Aspose\CAD\Model\PublicKey
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param \Aspose\CAD\Model\PublicKey $public_key public_key
     *
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets raw_data
     *
     * @return string
     */
    public function getRawData()
    {
        return $this->container['raw_data'];
    }

    /**
     * Sets raw_data
     *
     * @param string $raw_data raw_data
     *
     * @return $this
     */
    public function setRawData($raw_data)
    {
        $this->container['raw_data'] = $raw_data;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets signature_algorithm
     *
     * @return \Aspose\CAD\Model\Oid
     */
    public function getSignatureAlgorithm()
    {
        return $this->container['signature_algorithm'];
    }

    /**
     * Sets signature_algorithm
     *
     * @param \Aspose\CAD\Model\Oid $signature_algorithm signature_algorithm
     *
     * @return $this
     */
    public function setSignatureAlgorithm($signature_algorithm)
    {
        $this->container['signature_algorithm'] = $signature_algorithm;

        return $this;
    }

    /**
     * Gets subject_name
     *
     * @return \Aspose\CAD\Model\X500DistinguishedName
     */
    public function getSubjectName()
    {
        return $this->container['subject_name'];
    }

    /**
     * Sets subject_name
     *
     * @param \Aspose\CAD\Model\X500DistinguishedName $subject_name subject_name
     *
     * @return $this
     */
    public function setSubjectName($subject_name)
    {
        $this->container['subject_name'] = $subject_name;

        return $this;
    }

    /**
     * Gets thumbprint
     *
     * @return string
     */
    public function getThumbprint()
    {
        return $this->container['thumbprint'];
    }

    /**
     * Sets thumbprint
     *
     * @param string $thumbprint thumbprint
     *
     * @return $this
     */
    public function setThumbprint($thumbprint)
    {
        $this->container['thumbprint'] = $thumbprint;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


