<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PngOptionsDTO.php">
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
 * PngOptionsDTO
 *
 * @description Export options for PNG format
 */
class PngOptionsDTO extends DrawingOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PngOptionsDTO";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'color_type' => 'string',
        'progressive' => 'bool',
        'filter_type' => 'string',
        'compression_level' => 'int',
        'bit_depth' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'color_type' => null,
        'progressive' => null,
        'filter_type' => null,
        'compression_level' => 'int32',
        'bit_depth' => 'byte'
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
        'color_type' => 'ColorType',
        'progressive' => 'Progressive',
        'filter_type' => 'FilterType',
        'compression_level' => 'CompressionLevel',
        'bit_depth' => 'BitDepth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color_type' => 'setColorType',
        'progressive' => 'setProgressive',
        'filter_type' => 'setFilterType',
        'compression_level' => 'setCompressionLevel',
        'bit_depth' => 'setBitDepth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color_type' => 'getColorType',
        'progressive' => 'getProgressive',
        'filter_type' => 'getFilterType',
        'compression_level' => 'getCompressionLevel',
        'bit_depth' => 'getBitDepth'
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

    const COLOR_TYPE_GRAYSCALE = 'Grayscale';
    const COLOR_TYPE_TRUECOLOR = 'Truecolor';
    const COLOR_TYPE_INDEXED_COLOR = 'IndexedColor';
    const COLOR_TYPE_GRAYSCALE_WITH_ALPHA = 'GrayscaleWithAlpha';
    const COLOR_TYPE_TRUECOLOR_WITH_ALPHA = 'TruecolorWithAlpha';
    const FILTER_TYPE_NONE = 'None';
    const FILTER_TYPE_SUB = 'Sub';
    const FILTER_TYPE_UP = 'Up';
    const FILTER_TYPE_AVG = 'Avg';
    const FILTER_TYPE_PAETH = 'Paeth';
    const FILTER_TYPE_ADAPTIVE = 'Adaptive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorTypeAllowableValues()
    {
        return [
            self::COLOR_TYPE_GRAYSCALE,
            self::COLOR_TYPE_TRUECOLOR,
            self::COLOR_TYPE_INDEXED_COLOR,
            self::COLOR_TYPE_GRAYSCALE_WITH_ALPHA,
            self::COLOR_TYPE_TRUECOLOR_WITH_ALPHA,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterTypeAllowableValues()
    {
        return [
            self::FILTER_TYPE_NONE,
            self::FILTER_TYPE_SUB,
            self::FILTER_TYPE_UP,
            self::FILTER_TYPE_AVG,
            self::FILTER_TYPE_PAETH,
            self::FILTER_TYPE_ADAPTIVE,
        ];
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

        $this->container['color_type'] = isset($data['color_type']) ? $data['color_type'] : null;
        $this->container['progressive'] = isset($data['progressive']) ? $data['progressive'] : null;
        $this->container['filter_type'] = isset($data['filter_type']) ? $data['filter_type'] : null;
        $this->container['compression_level'] = isset($data['compression_level']) ? $data['compression_level'] : null;
        $this->container['bit_depth'] = isset($data['bit_depth']) ? $data['bit_depth'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['color_type'] === null) {
            $invalidProperties[] = "'color_type' can't be null";
        }
        $allowedValues = $this->getColorTypeAllowableValues();
        if (!in_array($this->container['color_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'color_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['progressive'] === null) {
            $invalidProperties[] = "'progressive' can't be null";
        }
        if ($this->container['filter_type'] === null) {
            $invalidProperties[] = "'filter_type' can't be null";
        }
        $allowedValues = $this->getFilterTypeAllowableValues();
        if (!in_array($this->container['filter_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'filter_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['compression_level'] === null) {
            $invalidProperties[] = "'compression_level' can't be null";
        }
        if ($this->container['bit_depth'] === null) {
            $invalidProperties[] = "'bit_depth' can't be null";
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

        if ($this->container['color_type'] === null) {
            return false;
        }
        $allowedValues = $this->getColorTypeAllowableValues();
        if (!in_array($this->container['color_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['progressive'] === null) {
            return false;
        }
        if ($this->container['filter_type'] === null) {
            return false;
        }
        $allowedValues = $this->getFilterTypeAllowableValues();
        if (!in_array($this->container['filter_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['compression_level'] === null) {
            return false;
        }
        if ($this->container['bit_depth'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets color_type
     *
     * @return string
     */
    public function getColorType()
    {
        return $this->container['color_type'];
    }

    /**
     * Sets color_type
     *
     * @param string $color_type Color type
     *
     * @return $this
     */
    public function setColorType($color_type)
    {
        $allowedValues = $this->getColorTypeAllowableValues();
        if ((!is_numeric($color_type) && !in_array($color_type, $allowedValues)) || (is_numeric($color_type) && !in_array($allowedValues[$color_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'color_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
            
        $this->container['color_type'] = $color_type;

        return $this;
    }

    /**
     * Gets progressive
     *
     * @return bool
     */
    public function getProgressive()
    {
        return $this->container['progressive'];
    }

    /**
     * Sets progressive
     *
     * @param bool $progressive Determines whether 'progressive' method is used
     *
     * @return $this
     */
    public function setProgressive($progressive)
    {
        $this->container['progressive'] = $progressive;

        return $this;
    }

    /**
     * Gets filter_type
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type
     *
     * @param string $filter_type Filter type
     *
     * @return $this
     */
    public function setFilterType($filter_type)
    {
        $allowedValues = $this->getFilterTypeAllowableValues();
        if ((!is_numeric($filter_type) && !in_array($filter_type, $allowedValues)) || (is_numeric($filter_type) && !in_array($allowedValues[$filter_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'filter_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
            
        $this->container['filter_type'] = $filter_type;

        return $this;
    }

    /**
     * Gets compression_level
     *
     * @return int
     */
    public function getCompressionLevel()
    {
        return $this->container['compression_level'];
    }

    /**
     * Sets compression_level
     *
     * @param int $compression_level Compression level
     *
     * @return $this
     */
    public function setCompressionLevel($compression_level)
    {
        $this->container['compression_level'] = $compression_level;

        return $this;
    }

    /**
     * Gets bit_depth
     *
     * @return int
     */
    public function getBitDepth()
    {
        return $this->container['bit_depth'];
    }

    /**
     * Sets bit_depth
     *
     * @param int $bit_depth Bits depth
     *
     * @return $this
     */
    public function setBitDepth($bit_depth)
    {
        $this->container['bit_depth'] = $bit_depth;

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


