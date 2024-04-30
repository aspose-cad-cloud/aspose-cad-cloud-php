<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SvgOptionsDTO.php">
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
 * SvgOptionsDTO
 *
 * @description Export options for SVG format
 */
class SvgOptionsDTO extends DrawingOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SvgOptionsDTO";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'color_type' => 'string',
        'text_as_shapes' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'color_type' => null,
        'text_as_shapes' => null
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
        'text_as_shapes' => 'TextAsShapes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color_type' => 'setColorType',
        'text_as_shapes' => 'setTextAsShapes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color_type' => 'getColorType',
        'text_as_shapes' => 'getTextAsShapes'
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
    const COLOR_TYPE_Y_CB_CR = 'YCbCr';
    const COLOR_TYPE_CMYK = 'Cmyk';
    const COLOR_TYPE_YCCK = 'Ycck';
    const COLOR_TYPE_RGB = 'Rgb';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorTypeAllowableValues()
    {
        return [
            self::COLOR_TYPE_GRAYSCALE,
            self::COLOR_TYPE_Y_CB_CR,
            self::COLOR_TYPE_CMYK,
            self::COLOR_TYPE_YCCK,
            self::COLOR_TYPE_RGB,
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
        $this->container['text_as_shapes'] = isset($data['text_as_shapes']) ? $data['text_as_shapes'] : null;
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

        if ($this->container['text_as_shapes'] === null) {
            $invalidProperties[] = "'text_as_shapes' can't be null";
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
        if ($this->container['text_as_shapes'] === null) {
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
     * Gets text_as_shapes
     *
     * @return bool
     */
    public function getTextAsShapes()
    {
        return $this->container['text_as_shapes'];
    }

    /**
     * Sets text_as_shapes
     *
     * @param bool $text_as_shapes Render text as shapes
     *
     * @return $this
     */
    public function setTextAsShapes($text_as_shapes)
    {
        $this->container['text_as_shapes'] = $text_as_shapes;

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


