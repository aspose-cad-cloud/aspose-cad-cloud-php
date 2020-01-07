<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BmpOptionsDTO.php">
 *   Copyright (c) 2018 Aspose.Cad for Cloud
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
/*
 * BmpOptionsDTO
 */

namespace Aspose\CAD\Model;
use \Aspose\CAD\ObjectSerializer;

/*
 * BmpOptionsDTO
 *
 * @description Export options for BMP format
 */
class BmpOptionsDTO extends ImageOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "BmpOptionsDTO";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bits_per_pixel' => 'int',
        'compression' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bits_per_pixel' => 'int32',
        'compression' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bits_per_pixel' => 'BitsPerPixel',
        'compression' => 'Compression'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bits_per_pixel' => 'setBitsPerPixel',
        'compression' => 'setCompression'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bits_per_pixel' => 'getBitsPerPixel',
        'compression' => 'getCompression'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const COMPRESSION_RGB = 'Rgb';
    const COMPRESSION_RLE8 = 'Rle8';
    const COMPRESSION_RLE4 = 'Rle4';
    const COMPRESSION_BITFIELDS = 'Bitfields';
    const COMPRESSION_JPEG = 'Jpeg';
    const COMPRESSION_PNG = 'Png';
    const COMPRESSION_ALPHA_BITFIELDS = 'AlphaBitfields';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionAllowableValues()
    {
        return [
            self::COMPRESSION_RGB,
            self::COMPRESSION_RLE8,
            self::COMPRESSION_RLE4,
            self::COMPRESSION_BITFIELDS,
            self::COMPRESSION_JPEG,
            self::COMPRESSION_PNG,
            self::COMPRESSION_ALPHA_BITFIELDS,
        ];
    }
    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['bits_per_pixel'] = isset($data['bits_per_pixel']) ? $data['bits_per_pixel'] : null;
        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['bits_per_pixel'] === null) {
            $invalidProperties[] = "'bits_per_pixel' can't be null";
        }
        if ($this->container['compression'] === null) {
            $invalidProperties[] = "'compression' can't be null";
        }
        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /*
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

        if ($this->container['bits_per_pixel'] === null) {
            return false;
        }
        if ($this->container['compression'] === null) {
            return false;
        }
        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets bits_per_pixel
     *
     * @return int
     */
    public function getBitsPerPixel()
    {
        return $this->container['bits_per_pixel'];
    }

    /*
     * Sets bits_per_pixel
     *
     * @param int $bits_per_pixel Bits per pixel
     *
     * @return $this
     */
    public function setBitsPerPixel($bits_per_pixel)
    {
        $this->container['bits_per_pixel'] = $bits_per_pixel;

        return $this;
    }

    /*
     * Gets compression
     *
     * @return string
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /*
     * Sets compression
     *
     * @param string $compression Compression type
     *
     * @return $this
     */
    public function setCompression($compression)
    {
        $allowedValues = $this->getCompressionAllowableValues();
        if ((!is_numeric($compression) && !in_array($compression, $allowedValues)) || (is_numeric($compression) && !in_array($allowedValues[$compression], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compression', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['compression'] = $compression;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


