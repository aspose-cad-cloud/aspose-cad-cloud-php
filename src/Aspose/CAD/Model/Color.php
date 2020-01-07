<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Color.php">
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
 * Color
 */

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/*
 * Color
 *
 * @description The color of the pixel.
 */
class Color implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Color";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'r' => 'int',
        'g' => 'int',
        'b' => 'int',
        'a' => 'int',
        'is_known_color' => 'bool',
        'is_empty' => 'bool',
        'is_named_color' => 'bool',
        'name' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'r' => 'byte',
        'g' => 'byte',
        'b' => 'byte',
        'a' => 'byte',
        'is_known_color' => null,
        'is_empty' => null,
        'is_named_color' => null,
        'name' => null
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
        'r' => 'R',
        'g' => 'G',
        'b' => 'B',
        'a' => 'A',
        'is_known_color' => 'IsKnownColor',
        'is_empty' => 'IsEmpty',
        'is_named_color' => 'IsNamedColor',
        'name' => 'Name'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'r' => 'setR',
        'g' => 'setG',
        'b' => 'setB',
        'a' => 'setA',
        'is_known_color' => 'setIsKnownColor',
        'is_empty' => 'setIsEmpty',
        'is_named_color' => 'setIsNamedColor',
        'name' => 'setName'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'r' => 'getR',
        'g' => 'getG',
        'b' => 'getB',
        'a' => 'getA',
        'is_known_color' => 'getIsKnownColor',
        'is_empty' => 'getIsEmpty',
        'is_named_color' => 'getIsNamedColor',
        'name' => 'getName'
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
        $this->container['r'] = isset($data['r']) ? $data['r'] : null;
        $this->container['g'] = isset($data['g']) ? $data['g'] : null;
        $this->container['b'] = isset($data['b']) ? $data['b'] : null;
        $this->container['a'] = isset($data['a']) ? $data['a'] : null;
        $this->container['is_known_color'] = isset($data['is_known_color']) ? $data['is_known_color'] : null;
        $this->container['is_empty'] = isset($data['is_empty']) ? $data['is_empty'] : null;
        $this->container['is_named_color'] = isset($data['is_named_color']) ? $data['is_named_color'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['r'] === null) {
            $invalidProperties[] = "'r' can't be null";
        }
        if ($this->container['g'] === null) {
            $invalidProperties[] = "'g' can't be null";
        }
        if ($this->container['b'] === null) {
            $invalidProperties[] = "'b' can't be null";
        }
        if ($this->container['a'] === null) {
            $invalidProperties[] = "'a' can't be null";
        }
        if ($this->container['is_known_color'] === null) {
            $invalidProperties[] = "'is_known_color' can't be null";
        }
        if ($this->container['is_empty'] === null) {
            $invalidProperties[] = "'is_empty' can't be null";
        }
        if ($this->container['is_named_color'] === null) {
            $invalidProperties[] = "'is_named_color' can't be null";
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

        if ($this->container['r'] === null) {
            return false;
        }
        if ($this->container['g'] === null) {
            return false;
        }
        if ($this->container['b'] === null) {
            return false;
        }
        if ($this->container['a'] === null) {
            return false;
        }
        if ($this->container['is_known_color'] === null) {
            return false;
        }
        if ($this->container['is_empty'] === null) {
            return false;
        }
        if ($this->container['is_named_color'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets r
     *
     * @return int
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /*
     * Sets r
     *
     * @param int $r Gets the red component value of this Color structure.
     *
     * @return $this
     */
    public function setR($r)
    {
        $this->container['r'] = $r;

        return $this;
    }

    /*
     * Gets g
     *
     * @return int
     */
    public function getG()
    {
        return $this->container['g'];
    }

    /*
     * Sets g
     *
     * @param int $g Gets the green component value of this Color structure.
     *
     * @return $this
     */
    public function setG($g)
    {
        $this->container['g'] = $g;

        return $this;
    }

    /*
     * Gets b
     *
     * @return int
     */
    public function getB()
    {
        return $this->container['b'];
    }

    /*
     * Sets b
     *
     * @param int $b Gets the blue component value of this Color structure.
     *
     * @return $this
     */
    public function setB($b)
    {
        $this->container['b'] = $b;

        return $this;
    }

    /*
     * Gets a
     *
     * @return int
     */
    public function getA()
    {
        return $this->container['a'];
    }

    /*
     * Sets a
     *
     * @param int $a Gets the alpha component value of this Color structure.
     *
     * @return $this
     */
    public function setA($a)
    {
        $this->container['a'] = $a;

        return $this;
    }

    /*
     * Gets is_known_color
     *
     * @return bool
     */
    public function getIsKnownColor()
    {
        return $this->container['is_known_color'];
    }

    /*
     * Sets is_known_color
     *
     * @param bool $is_known_color Gets a value indicating whether this Color structure is a predefined color. Predefined colors are represented by the elements of the KnownColor enumeration.
     *
     * @return $this
     */
    public function setIsKnownColor($is_known_color)
    {
        $this->container['is_known_color'] = $is_known_color;

        return $this;
    }

    /*
     * Gets is_empty
     *
     * @return bool
     */
    public function getIsEmpty()
    {
        return $this->container['is_empty'];
    }

    /*
     * Sets is_empty
     *
     * @param bool $is_empty Gets a value indicating whether this Color structure is uninitialized.
     *
     * @return $this
     */
    public function setIsEmpty($is_empty)
    {
        $this->container['is_empty'] = $is_empty;

        return $this;
    }

    /*
     * Gets is_named_color
     *
     * @return bool
     */
    public function getIsNamedColor()
    {
        return $this->container['is_named_color'];
    }

    /*
     * Sets is_named_color
     *
     * @param bool $is_named_color Gets a value indicating whether this Color structure is a named color or a member of the KnownColor enumeration.
     *
     * @return $this
     */
    public function setIsNamedColor($is_named_color)
    {
        $this->container['is_named_color'] = $is_named_color;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name Gets the name of this Color.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


