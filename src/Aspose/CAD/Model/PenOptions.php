<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PenOptions.php">
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
 * PenOptions
 */

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/*
 * PenOptions
 *
 * @description Drawing pen options
 */
class PenOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PenOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'start_cap' => 'string',
        'end_cap' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'start_cap' => null,
        'end_cap' => null
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
        'start_cap' => 'StartCap',
        'end_cap' => 'EndCap'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_cap' => 'setStartCap',
        'end_cap' => 'setEndCap'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_cap' => 'getStartCap',
        'end_cap' => 'getEndCap'
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

    const START_CAP_FLAT = 'Flat';
    const START_CAP_SQUARE = 'Square';
    const START_CAP_ROUND = 'Round';
    const START_CAP_TRIANGLE = 'Triangle';
    const START_CAP_NO_ANCHOR = 'NoAnchor';
    const START_CAP_SQUARE_ANCHOR = 'SquareAnchor';
    const START_CAP_ROUND_ANCHOR = 'RoundAnchor';
    const START_CAP_DIAMOND_ANCHOR = 'DiamondAnchor';
    const START_CAP_ARROW_ANCHOR = 'ArrowAnchor';
    const START_CAP_ANCHOR_MASK = 'AnchorMask';
    const START_CAP_CUSTOM = 'Custom';
    const END_CAP_FLAT = 'Flat';
    const END_CAP_SQUARE = 'Square';
    const END_CAP_ROUND = 'Round';
    const END_CAP_TRIANGLE = 'Triangle';
    const END_CAP_NO_ANCHOR = 'NoAnchor';
    const END_CAP_SQUARE_ANCHOR = 'SquareAnchor';
    const END_CAP_ROUND_ANCHOR = 'RoundAnchor';
    const END_CAP_DIAMOND_ANCHOR = 'DiamondAnchor';
    const END_CAP_ARROW_ANCHOR = 'ArrowAnchor';
    const END_CAP_ANCHOR_MASK = 'AnchorMask';
    const END_CAP_CUSTOM = 'Custom';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStartCapAllowableValues()
    {
        return [
            self::START_CAP_FLAT,
            self::START_CAP_SQUARE,
            self::START_CAP_ROUND,
            self::START_CAP_TRIANGLE,
            self::START_CAP_NO_ANCHOR,
            self::START_CAP_SQUARE_ANCHOR,
            self::START_CAP_ROUND_ANCHOR,
            self::START_CAP_DIAMOND_ANCHOR,
            self::START_CAP_ARROW_ANCHOR,
            self::START_CAP_ANCHOR_MASK,
            self::START_CAP_CUSTOM,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndCapAllowableValues()
    {
        return [
            self::END_CAP_FLAT,
            self::END_CAP_SQUARE,
            self::END_CAP_ROUND,
            self::END_CAP_TRIANGLE,
            self::END_CAP_NO_ANCHOR,
            self::END_CAP_SQUARE_ANCHOR,
            self::END_CAP_ROUND_ANCHOR,
            self::END_CAP_DIAMOND_ANCHOR,
            self::END_CAP_ARROW_ANCHOR,
            self::END_CAP_ANCHOR_MASK,
            self::END_CAP_CUSTOM,
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
        $this->container['start_cap'] = isset($data['start_cap']) ? $data['start_cap'] : null;
        $this->container['end_cap'] = isset($data['end_cap']) ? $data['end_cap'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_cap'] === null) {
            $invalidProperties[] = "'start_cap' can't be null";
        }
        $allowedValues = $this->getStartCapAllowableValues();
        if (!in_array($this->container['start_cap'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'start_cap', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['end_cap'] === null) {
            $invalidProperties[] = "'end_cap' can't be null";
        }
        $allowedValues = $this->getEndCapAllowableValues();
        if (!in_array($this->container['end_cap'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'end_cap', must be one of '%s'",
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

        if ($this->container['start_cap'] === null) {
            return false;
        }
        $allowedValues = $this->getStartCapAllowableValues();
        if (!in_array($this->container['start_cap'], $allowedValues)) {
            return false;
        }
        if ($this->container['end_cap'] === null) {
            return false;
        }
        $allowedValues = $this->getEndCapAllowableValues();
        if (!in_array($this->container['end_cap'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets start_cap
     *
     * @return string
     */
    public function getStartCap()
    {
        return $this->container['start_cap'];
    }

    /*
     * Sets start_cap
     *
     * @param string $start_cap Gets or sets the start cap.
     *
     * @return $this
     */
    public function setStartCap($start_cap)
    {
        $allowedValues = $this->getStartCapAllowableValues();
        if ((!is_numeric($start_cap) && !in_array($start_cap, $allowedValues)) || (is_numeric($start_cap) && !in_array($allowedValues[$start_cap], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'start_cap', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['start_cap'] = $start_cap;

        return $this;
    }

    /*
     * Gets end_cap
     *
     * @return string
     */
    public function getEndCap()
    {
        return $this->container['end_cap'];
    }

    /*
     * Sets end_cap
     *
     * @param string $end_cap Gets or sets the end cap.
     *
     * @return $this
     */
    public function setEndCap($end_cap)
    {
        $allowedValues = $this->getEndCapAllowableValues();
        if ((!is_numeric($end_cap) && !in_array($end_cap, $allowedValues)) || (is_numeric($end_cap) && !in_array($allowedValues[$end_cap], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'end_cap', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['end_cap'] = $end_cap;

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


