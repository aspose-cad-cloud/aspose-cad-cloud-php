<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GraphicsOptions.php">
 *   Copyright (c) 2018 Aspose.CAD Cloud
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
 * GraphicsOptions
 */

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/*
 * GraphicsOptions
 *
 * @description Represents graphics options for embedded bitmap.
 */
class GraphicsOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "GraphicsOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'text_rendering_hint' => 'string',
        'smoothing_mode' => 'string',
        'interpolation_mode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'text_rendering_hint' => null,
        'smoothing_mode' => null,
        'interpolation_mode' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text_rendering_hint' => 'TextRenderingHint',
        'smoothing_mode' => 'SmoothingMode',
        'interpolation_mode' => 'InterpolationMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_rendering_hint' => 'setTextRenderingHint',
        'smoothing_mode' => 'setSmoothingMode',
        'interpolation_mode' => 'setInterpolationMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_rendering_hint' => 'getTextRenderingHint',
        'smoothing_mode' => 'getSmoothingMode',
        'interpolation_mode' => 'getInterpolationMode'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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

    const TEXT_RENDERING_HINT_SYSTEM_DEFAULT = 'SystemDefault';
    const TEXT_RENDERING_HINT_SINGLE_BIT_PER_PIXEL_GRID_FIT = 'SingleBitPerPixelGridFit';
    const TEXT_RENDERING_HINT_SINGLE_BIT_PER_PIXEL = 'SingleBitPerPixel';
    const TEXT_RENDERING_HINT_ANTI_ALIAS_GRID_FIT = 'AntiAliasGridFit';
    const TEXT_RENDERING_HINT_ANTI_ALIAS = 'AntiAlias';
    const TEXT_RENDERING_HINT_CLEAR_TYPE_GRID_FIT = 'ClearTypeGridFit';
    const SMOOTHING_MODE__DEFAULT = 'Default';
    const SMOOTHING_MODE_HIGH_SPEED = 'HighSpeed';
    const SMOOTHING_MODE_HIGH_QUALITY = 'HighQuality';
    const SMOOTHING_MODE_NONE = 'None';
    const SMOOTHING_MODE_ANTI_ALIAS = 'AntiAlias';
    const SMOOTHING_MODE_INVALID = 'Invalid';
    const INTERPOLATION_MODE__DEFAULT = 'Default';
    const INTERPOLATION_MODE_LOW = 'Low';
    const INTERPOLATION_MODE_HIGH = 'High';
    const INTERPOLATION_MODE_BILINEAR = 'Bilinear';
    const INTERPOLATION_MODE_BICUBIC = 'Bicubic';
    const INTERPOLATION_MODE_NEAREST_NEIGHBOR = 'NearestNeighbor';
    const INTERPOLATION_MODE_HIGH_QUALITY_BILINEAR = 'HighQualityBilinear';
    const INTERPOLATION_MODE_HIGH_QUALITY_BICUBIC = 'HighQualityBicubic';
    const INTERPOLATION_MODE_INVALID = 'Invalid';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextRenderingHintAllowableValues()
    {
        return [
            self::TEXT_RENDERING_HINT_SYSTEM_DEFAULT,
            self::TEXT_RENDERING_HINT_SINGLE_BIT_PER_PIXEL_GRID_FIT,
            self::TEXT_RENDERING_HINT_SINGLE_BIT_PER_PIXEL,
            self::TEXT_RENDERING_HINT_ANTI_ALIAS_GRID_FIT,
            self::TEXT_RENDERING_HINT_ANTI_ALIAS,
            self::TEXT_RENDERING_HINT_CLEAR_TYPE_GRID_FIT,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSmoothingModeAllowableValues()
    {
        return [
            self::SMOOTHING_MODE__DEFAULT,
            self::SMOOTHING_MODE_HIGH_SPEED,
            self::SMOOTHING_MODE_HIGH_QUALITY,
            self::SMOOTHING_MODE_NONE,
            self::SMOOTHING_MODE_ANTI_ALIAS,
            self::SMOOTHING_MODE_INVALID,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInterpolationModeAllowableValues()
    {
        return [
            self::INTERPOLATION_MODE__DEFAULT,
            self::INTERPOLATION_MODE_LOW,
            self::INTERPOLATION_MODE_HIGH,
            self::INTERPOLATION_MODE_BILINEAR,
            self::INTERPOLATION_MODE_BICUBIC,
            self::INTERPOLATION_MODE_NEAREST_NEIGHBOR,
            self::INTERPOLATION_MODE_HIGH_QUALITY_BILINEAR,
            self::INTERPOLATION_MODE_HIGH_QUALITY_BICUBIC,
            self::INTERPOLATION_MODE_INVALID,
        ];
    }
    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['text_rendering_hint'] = isset($data['text_rendering_hint']) ? $data['text_rendering_hint'] : null;
        $this->container['smoothing_mode'] = isset($data['smoothing_mode']) ? $data['smoothing_mode'] : null;
        $this->container['interpolation_mode'] = isset($data['interpolation_mode']) ? $data['interpolation_mode'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['text_rendering_hint'] === null) {
            $invalidProperties[] = "'text_rendering_hint' can't be null";
        }
        $allowedValues = $this->getTextRenderingHintAllowableValues();
        if (!in_array($this->container['text_rendering_hint'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_rendering_hint', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['smoothing_mode'] === null) {
            $invalidProperties[] = "'smoothing_mode' can't be null";
        }
        $allowedValues = $this->getSmoothingModeAllowableValues();
        if (!in_array($this->container['smoothing_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'smoothing_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['interpolation_mode'] === null) {
            $invalidProperties[] = "'interpolation_mode' can't be null";
        }
        $allowedValues = $this->getInterpolationModeAllowableValues();
        if (!in_array($this->container['interpolation_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'interpolation_mode', must be one of '%s'",
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

        if ($this->container['text_rendering_hint'] === null) {
            return false;
        }
        $allowedValues = $this->getTextRenderingHintAllowableValues();
        if (!in_array($this->container['text_rendering_hint'], $allowedValues)) {
            return false;
        }
        if ($this->container['smoothing_mode'] === null) {
            return false;
        }
        $allowedValues = $this->getSmoothingModeAllowableValues();
        if (!in_array($this->container['smoothing_mode'], $allowedValues)) {
            return false;
        }
        if ($this->container['interpolation_mode'] === null) {
            return false;
        }
        $allowedValues = $this->getInterpolationModeAllowableValues();
        if (!in_array($this->container['interpolation_mode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets text_rendering_hint
     *
     * @return string
     */
    public function getTextRenderingHint()
    {
        return $this->container['text_rendering_hint'];
    }

    /*
     * Sets text_rendering_hint
     *
     * @param string $text_rendering_hint Gets or sets text rendering hint.
     *
     * @return $this
     */
    public function setTextRenderingHint($text_rendering_hint)
    {
        $allowedValues = $this->getTextRenderingHintAllowableValues();
        if ((!is_numeric($text_rendering_hint) && !in_array($text_rendering_hint, $allowedValues)) || (is_numeric($text_rendering_hint) && !in_array($allowedValues[$text_rendering_hint], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'text_rendering_hint', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['text_rendering_hint'] = $text_rendering_hint;

        return $this;
    }

    /*
     * Gets smoothing_mode
     *
     * @return string
     */
    public function getSmoothingMode()
    {
        return $this->container['smoothing_mode'];
    }

    /*
     * Sets smoothing_mode
     *
     * @param string $smoothing_mode Gets or sets smoothing mode.
     *
     * @return $this
     */
    public function setSmoothingMode($smoothing_mode)
    {
        $allowedValues = $this->getSmoothingModeAllowableValues();
        if ((!is_numeric($smoothing_mode) && !in_array($smoothing_mode, $allowedValues)) || (is_numeric($smoothing_mode) && !in_array($allowedValues[$smoothing_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'smoothing_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['smoothing_mode'] = $smoothing_mode;

        return $this;
    }

    /*
     * Gets interpolation_mode
     *
     * @return string
     */
    public function getInterpolationMode()
    {
        return $this->container['interpolation_mode'];
    }

    /*
     * Sets interpolation_mode
     *
     * @param string $interpolation_mode Gets or sets interpolation mode.
     *
     * @return $this
     */
    public function setInterpolationMode($interpolation_mode)
    {
        $allowedValues = $this->getInterpolationModeAllowableValues();
        if ((!is_numeric($interpolation_mode) && !in_array($interpolation_mode, $allowedValues)) || (is_numeric($interpolation_mode) && !in_array($allowedValues[$interpolation_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'interpolation_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['interpolation_mode'] = $interpolation_mode;

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


