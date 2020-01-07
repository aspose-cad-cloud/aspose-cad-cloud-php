<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RdOptimizerSettings.php">
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
 * RdOptimizerSettings
 */

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/*
 * RdOptimizerSettings
 *
 * @description RD optimizer settings class
 */
class RdOptimizerSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "RdOptimizerSettings";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bpp_scale' => 'int',
        'bpp_max' => 'double',
        'max_q' => 'int',
        'min_q' => 'int',
        'max_pixel_value' => 'int',
        'psnr_max' => 'int',
        'discretized_bpp_max' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bpp_scale' => 'int32',
        'bpp_max' => 'double',
        'max_q' => 'int32',
        'min_q' => 'int32',
        'max_pixel_value' => 'int32',
        'psnr_max' => 'int32',
        'discretized_bpp_max' => 'int32'
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
        'bpp_scale' => 'BppScale',
        'bpp_max' => 'BppMax',
        'max_q' => 'MaxQ',
        'min_q' => 'MinQ',
        'max_pixel_value' => 'MaxPixelValue',
        'psnr_max' => 'PsnrMax',
        'discretized_bpp_max' => 'DiscretizedBppMax'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bpp_scale' => 'setBppScale',
        'bpp_max' => 'setBppMax',
        'max_q' => 'setMaxQ',
        'min_q' => 'setMinQ',
        'max_pixel_value' => 'setMaxPixelValue',
        'psnr_max' => 'setPsnrMax',
        'discretized_bpp_max' => 'setDiscretizedBppMax'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bpp_scale' => 'getBppScale',
        'bpp_max' => 'getBppMax',
        'max_q' => 'getMaxQ',
        'min_q' => 'getMinQ',
        'max_pixel_value' => 'getMaxPixelValue',
        'psnr_max' => 'getPsnrMax',
        'discretized_bpp_max' => 'getDiscretizedBppMax'
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
        $this->container['bpp_scale'] = isset($data['bpp_scale']) ? $data['bpp_scale'] : null;
        $this->container['bpp_max'] = isset($data['bpp_max']) ? $data['bpp_max'] : null;
        $this->container['max_q'] = isset($data['max_q']) ? $data['max_q'] : null;
        $this->container['min_q'] = isset($data['min_q']) ? $data['min_q'] : null;
        $this->container['max_pixel_value'] = isset($data['max_pixel_value']) ? $data['max_pixel_value'] : null;
        $this->container['psnr_max'] = isset($data['psnr_max']) ? $data['psnr_max'] : null;
        $this->container['discretized_bpp_max'] = isset($data['discretized_bpp_max']) ? $data['discretized_bpp_max'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bpp_scale'] === null) {
            $invalidProperties[] = "'bpp_scale' can't be null";
        }
        if ($this->container['bpp_max'] === null) {
            $invalidProperties[] = "'bpp_max' can't be null";
        }
        if ($this->container['max_q'] === null) {
            $invalidProperties[] = "'max_q' can't be null";
        }
        if ($this->container['min_q'] === null) {
            $invalidProperties[] = "'min_q' can't be null";
        }
        if ($this->container['max_pixel_value'] === null) {
            $invalidProperties[] = "'max_pixel_value' can't be null";
        }
        if ($this->container['psnr_max'] === null) {
            $invalidProperties[] = "'psnr_max' can't be null";
        }
        if ($this->container['discretized_bpp_max'] === null) {
            $invalidProperties[] = "'discretized_bpp_max' can't be null";
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

        if ($this->container['bpp_scale'] === null) {
            return false;
        }
        if ($this->container['bpp_max'] === null) {
            return false;
        }
        if ($this->container['max_q'] === null) {
            return false;
        }
        if ($this->container['min_q'] === null) {
            return false;
        }
        if ($this->container['max_pixel_value'] === null) {
            return false;
        }
        if ($this->container['psnr_max'] === null) {
            return false;
        }
        if ($this->container['discretized_bpp_max'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets bpp_scale
     *
     * @return int
     */
    public function getBppScale()
    {
        return $this->container['bpp_scale'];
    }

    /*
     * Sets bpp_scale
     *
     * @param int $bpp_scale Gets or sets the BPP (bits per pixel) scale factor.
     *
     * @return $this
     */
    public function setBppScale($bpp_scale)
    {
        $this->container['bpp_scale'] = $bpp_scale;

        return $this;
    }

    /*
     * Gets bpp_max
     *
     * @return double
     */
    public function getBppMax()
    {
        return $this->container['bpp_max'];
    }

    /*
     * Sets bpp_max
     *
     * @param double $bpp_max Gets or sets the maximum R value for consideration in  in bits per pixel
     *
     * @return $this
     */
    public function setBppMax($bpp_max)
    {
        $this->container['bpp_max'] = $bpp_max;

        return $this;
    }

    /*
     * Gets max_q
     *
     * @return int
     */
    public function getMaxQ()
    {
        return $this->container['max_q'];
    }

    /*
     * Sets max_q
     *
     * @param int $max_q Gets or sets the maximum quantization value.
     *
     * @return $this
     */
    public function setMaxQ($max_q)
    {
        $this->container['max_q'] = $max_q;

        return $this;
    }

    /*
     * Gets min_q
     *
     * @return int
     */
    public function getMinQ()
    {
        return $this->container['min_q'];
    }

    /*
     * Sets min_q
     *
     * @param int $min_q Gets the minimum allowed quantization value.
     *
     * @return $this
     */
    public function setMinQ($min_q)
    {
        $this->container['min_q'] = $min_q;

        return $this;
    }

    /*
     * Gets max_pixel_value
     *
     * @return int
     */
    public function getMaxPixelValue()
    {
        return $this->container['max_pixel_value'];
    }

    /*
     * Sets max_pixel_value
     *
     * @param int $max_pixel_value Gets the maximum pixel value.
     *
     * @return $this
     */
    public function setMaxPixelValue($max_pixel_value)
    {
        $this->container['max_pixel_value'] = $max_pixel_value;

        return $this;
    }

    /*
     * Gets psnr_max
     *
     * @return int
     */
    public function getPsnrMax()
    {
        return $this->container['psnr_max'];
    }

    /*
     * Sets psnr_max
     *
     * @param int $psnr_max Gets the PSNR maximum expected value.
     *
     * @return $this
     */
    public function setPsnrMax($psnr_max)
    {
        $this->container['psnr_max'] = $psnr_max;

        return $this;
    }

    /*
     * Gets discretized_bpp_max
     *
     * @return int
     */
    public function getDiscretizedBppMax()
    {
        return $this->container['discretized_bpp_max'];
    }

    /*
     * Sets discretized_bpp_max
     *
     * @param int $discretized_bpp_max Gets the maximum R value for consideration.
     *
     * @return $this
     */
    public function setDiscretizedBppMax($discretized_bpp_max)
    {
        $this->container['discretized_bpp_max'] = $discretized_bpp_max;

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


