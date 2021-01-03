<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffOptionsDTO.php">
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
 * TiffOptionsDTO
 *
 * @description Export options for TIFF format
 */
class TiffOptionsDTO extends DrawingOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TiffOptionsDTO";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'byte_order' => 'object',
        'compression' => 'object',
        'expected_format' => 'object',
        'bits_per_sample' => 'int[]',
        'photometric' => 'object'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'byte_order' => null,
        'compression' => null,
        'expected_format' => null,
        'bits_per_sample' => null,
        'photometric' => null
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
        'byte_order' => 'ByteOrder',
        'compression' => 'Compression',
        'expected_format' => 'ExpectedFormat',
        'bits_per_sample' => 'BitsPerSample',
        'photometric' => 'Photometric'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'byte_order' => 'setByteOrder',
        'compression' => 'setCompression',
        'expected_format' => 'setExpectedFormat',
        'bits_per_sample' => 'setBitsPerSample',
        'photometric' => 'setPhotometric'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'byte_order' => 'getByteOrder',
        'compression' => 'getCompression',
        'expected_format' => 'getExpectedFormat',
        'bits_per_sample' => 'getBitsPerSample',
        'photometric' => 'getPhotometric'
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

        $this->container['byte_order'] = isset($data['byte_order']) ? $data['byte_order'] : null;
        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
        $this->container['expected_format'] = isset($data['expected_format']) ? $data['expected_format'] : null;
        $this->container['bits_per_sample'] = isset($data['bits_per_sample']) ? $data['bits_per_sample'] : null;
        $this->container['photometric'] = isset($data['photometric']) ? $data['photometric'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['byte_order'] === null) {
            $invalidProperties[] = "'byte_order' can't be null";
        }
        if ($this->container['compression'] === null) {
            $invalidProperties[] = "'compression' can't be null";
        }
        if ($this->container['expected_format'] === null) {
            $invalidProperties[] = "'expected_format' can't be null";
        }
        if ($this->container['photometric'] === null) {
            $invalidProperties[] = "'photometric' can't be null";
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

        if ($this->container['byte_order'] === null) {
            return false;
        }
        if ($this->container['compression'] === null) {
            return false;
        }
        if ($this->container['expected_format'] === null) {
            return false;
        }
        if ($this->container['photometric'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets byte_order
     *
     * @return object
     */
    public function getByteOrder()
    {
        return $this->container['byte_order'];
    }

    /**
     * Sets byte_order
     *
     * @param object $byte_order Bytes order (little/big-endian notation)
     *
     * @return $this
     */
    public function setByteOrder($byte_order)
    {
        $this->container['byte_order'] = $byte_order;

        return $this;
    }

    /**
     * Gets compression
     *
     * @return object
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /**
     * Sets compression
     *
     * @param object $compression Compression level
     *
     * @return $this
     */
    public function setCompression($compression)
    {
        $this->container['compression'] = $compression;

        return $this;
    }

    /**
     * Gets expected_format
     *
     * @return object
     */
    public function getExpectedFormat()
    {
        return $this->container['expected_format'];
    }

    /**
     * Sets expected_format
     *
     * @param object $expected_format Expected TIFF sub-format
     *
     * @return $this
     */
    public function setExpectedFormat($expected_format)
    {
        $this->container['expected_format'] = $expected_format;

        return $this;
    }

    /**
     * Gets bits_per_sample
     *
     * @return int[]
     */
    public function getBitsPerSample()
    {
        return $this->container['bits_per_sample'];
    }

    /**
     * Sets bits_per_sample
     *
     * @param int[] $bits_per_sample Bits per pixel
     *
     * @return $this
     */
    public function setBitsPerSample($bits_per_sample)
    {
        $this->container['bits_per_sample'] = $bits_per_sample;

        return $this;
    }

    /**
     * Gets photometric
     *
     * @return object
     */
    public function getPhotometric()
    {
        return $this->container['photometric'];
    }

    /**
     * Sets photometric
     *
     * @param object $photometric Photometric options
     *
     * @return $this
     */
    public function setPhotometric($photometric)
    {
        $this->container['photometric'] = $photometric;

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


