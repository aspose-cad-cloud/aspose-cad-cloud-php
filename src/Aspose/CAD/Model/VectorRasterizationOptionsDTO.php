<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="VectorRasterizationOptionsDTO.php">
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
 * VectorRasterizationOptionsDTO
 */

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/*
 * VectorRasterizationOptionsDTO
 *
 * @description Base raster export options class
 */
class VectorRasterizationOptionsDTO implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "VectorRasterizationOptionsDTO";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'border_x' => 'double',
        'border_y' => 'double',
        'page_height' => 'double',
        'page_width' => 'double',
        'background_color' => '\Aspose\CAD\Model\Color',
        'draw_color' => '\Aspose\CAD\Model\Color',
        'unit_type' => 'string',
        'content_as_bitmap' => 'bool',
        'graphics_options' => '\Aspose\CAD\Model\GraphicsOptions'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'border_x' => 'double',
        'border_y' => 'double',
        'page_height' => 'double',
        'page_width' => 'double',
        'background_color' => null,
        'draw_color' => null,
        'unit_type' => null,
        'content_as_bitmap' => null,
        'graphics_options' => null
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
        'border_x' => 'BorderX',
        'border_y' => 'BorderY',
        'page_height' => 'PageHeight',
        'page_width' => 'PageWidth',
        'background_color' => 'BackgroundColor',
        'draw_color' => 'DrawColor',
        'unit_type' => 'UnitType',
        'content_as_bitmap' => 'ContentAsBitmap',
        'graphics_options' => 'GraphicsOptions'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'border_x' => 'setBorderX',
        'border_y' => 'setBorderY',
        'page_height' => 'setPageHeight',
        'page_width' => 'setPageWidth',
        'background_color' => 'setBackgroundColor',
        'draw_color' => 'setDrawColor',
        'unit_type' => 'setUnitType',
        'content_as_bitmap' => 'setContentAsBitmap',
        'graphics_options' => 'setGraphicsOptions'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'border_x' => 'getBorderX',
        'border_y' => 'getBorderY',
        'page_height' => 'getPageHeight',
        'page_width' => 'getPageWidth',
        'background_color' => 'getBackgroundColor',
        'draw_color' => 'getDrawColor',
        'unit_type' => 'getUnitType',
        'content_as_bitmap' => 'getContentAsBitmap',
        'graphics_options' => 'getGraphicsOptions'
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

    const UNIT_TYPE_KILOMETER = 'Kilometer';
    const UNIT_TYPE_METER = 'Meter';
    const UNIT_TYPE_CENTIMENTER = 'Centimenter';
    const UNIT_TYPE_MILLIMETER = 'Millimeter';
    const UNIT_TYPE_MICROMETER = 'Micrometer';
    const UNIT_TYPE_NANOMETER = 'Nanometer';
    const UNIT_TYPE_ANGSTROM = 'Angstrom';
    const UNIT_TYPE_DECIMETER = 'Decimeter';
    const UNIT_TYPE_DECAMETER = 'Decameter';
    const UNIT_TYPE_HECTOMETER = 'Hectometer';
    const UNIT_TYPE_GIGAMETER = 'Gigameter';
    const UNIT_TYPE_ASTRONOMICAL_UNIT = 'AstronomicalUnit';
    const UNIT_TYPE_LIGHT_YEAR = 'LightYear';
    const UNIT_TYPE_PARSEC = 'Parsec';
    const UNIT_TYPE_MILE = 'Mile';
    const UNIT_TYPE_YARD = 'Yard';
    const UNIT_TYPE_FOOT = 'Foot';
    const UNIT_TYPE_INCH = 'Inch';
    const UNIT_TYPE_MIL = 'Mil';
    const UNIT_TYPE_MICRO_INCH = 'MicroInch';
    const UNIT_TYPE_CUSTOM = 'Custom';
    const UNIT_TYPE_UNITLESS = 'Unitless';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitTypeAllowableValues()
    {
        return [
            self::UNIT_TYPE_KILOMETER,
            self::UNIT_TYPE_METER,
            self::UNIT_TYPE_CENTIMENTER,
            self::UNIT_TYPE_MILLIMETER,
            self::UNIT_TYPE_MICROMETER,
            self::UNIT_TYPE_NANOMETER,
            self::UNIT_TYPE_ANGSTROM,
            self::UNIT_TYPE_DECIMETER,
            self::UNIT_TYPE_DECAMETER,
            self::UNIT_TYPE_HECTOMETER,
            self::UNIT_TYPE_GIGAMETER,
            self::UNIT_TYPE_ASTRONOMICAL_UNIT,
            self::UNIT_TYPE_LIGHT_YEAR,
            self::UNIT_TYPE_PARSEC,
            self::UNIT_TYPE_MILE,
            self::UNIT_TYPE_YARD,
            self::UNIT_TYPE_FOOT,
            self::UNIT_TYPE_INCH,
            self::UNIT_TYPE_MIL,
            self::UNIT_TYPE_MICRO_INCH,
            self::UNIT_TYPE_CUSTOM,
            self::UNIT_TYPE_UNITLESS,
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
        $this->container['border_x'] = isset($data['border_x']) ? $data['border_x'] : null;
        $this->container['border_y'] = isset($data['border_y']) ? $data['border_y'] : null;
        $this->container['page_height'] = isset($data['page_height']) ? $data['page_height'] : null;
        $this->container['page_width'] = isset($data['page_width']) ? $data['page_width'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['draw_color'] = isset($data['draw_color']) ? $data['draw_color'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
        $this->container['content_as_bitmap'] = isset($data['content_as_bitmap']) ? $data['content_as_bitmap'] : null;
        $this->container['graphics_options'] = isset($data['graphics_options']) ? $data['graphics_options'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['border_x'] === null) {
            $invalidProperties[] = "'border_x' can't be null";
        }
        if ($this->container['border_y'] === null) {
            $invalidProperties[] = "'border_y' can't be null";
        }
        if ($this->container['page_height'] === null) {
            $invalidProperties[] = "'page_height' can't be null";
        }
        if ($this->container['page_width'] === null) {
            $invalidProperties[] = "'page_width' can't be null";
        }
        if ($this->container['background_color'] === null) {
            $invalidProperties[] = "'background_color' can't be null";
        }
        if ($this->container['draw_color'] === null) {
            $invalidProperties[] = "'draw_color' can't be null";
        }
        if ($this->container['unit_type'] === null) {
            $invalidProperties[] = "'unit_type' can't be null";
        }
        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!in_array($this->container['unit_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['content_as_bitmap'] === null) {
            $invalidProperties[] = "'content_as_bitmap' can't be null";
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

        if ($this->container['border_x'] === null) {
            return false;
        }
        if ($this->container['border_y'] === null) {
            return false;
        }
        if ($this->container['page_height'] === null) {
            return false;
        }
        if ($this->container['page_width'] === null) {
            return false;
        }
        if ($this->container['background_color'] === null) {
            return false;
        }
        if ($this->container['draw_color'] === null) {
            return false;
        }
        if ($this->container['unit_type'] === null) {
            return false;
        }
        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!in_array($this->container['unit_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['content_as_bitmap'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets border_x
     *
     * @return double
     */
    public function getBorderX()
    {
        return $this->container['border_x'];
    }

    /*
     * Sets border_x
     *
     * @param double $border_x Gets or sets the border X.
     *
     * @return $this
     */
    public function setBorderX($border_x)
    {
        $this->container['border_x'] = $border_x;

        return $this;
    }

    /*
     * Gets border_y
     *
     * @return double
     */
    public function getBorderY()
    {
        return $this->container['border_y'];
    }

    /*
     * Sets border_y
     *
     * @param double $border_y Gets or sets the border Y.
     *
     * @return $this
     */
    public function setBorderY($border_y)
    {
        $this->container['border_y'] = $border_y;

        return $this;
    }

    /*
     * Gets page_height
     *
     * @return double
     */
    public function getPageHeight()
    {
        return $this->container['page_height'];
    }

    /*
     * Sets page_height
     *
     * @param double $page_height Gets or sets the page height.
     *
     * @return $this
     */
    public function setPageHeight($page_height)
    {
        $this->container['page_height'] = $page_height;

        return $this;
    }

    /*
     * Gets page_width
     *
     * @return double
     */
    public function getPageWidth()
    {
        return $this->container['page_width'];
    }

    /*
     * Sets page_width
     *
     * @param double $page_width Gets or sets the page width.
     *
     * @return $this
     */
    public function setPageWidth($page_width)
    {
        $this->container['page_width'] = $page_width;

        return $this;
    }

    /*
     * Gets background_color
     *
     * @return \Aspose\CAD\Model\Color
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /*
     * Sets background_color
     *
     * @param \Aspose\CAD\Model\Color $background_color Gets or sets a background color.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /*
     * Gets draw_color
     *
     * @return \Aspose\CAD\Model\Color
     */
    public function getDrawColor()
    {
        return $this->container['draw_color'];
    }

    /*
     * Sets draw_color
     *
     * @param \Aspose\CAD\Model\Color $draw_color Gets or sets a foreground color.
     *
     * @return $this
     */
    public function setDrawColor($draw_color)
    {
        $this->container['draw_color'] = $draw_color;

        return $this;
    }

    /*
     * Gets unit_type
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /*
     * Sets unit_type
     *
     * @param string $unit_type unit_type
     *
     * @return $this
     */
    public function setUnitType($unit_type)
    {
        $allowedValues = $this->getUnitTypeAllowableValues();
        if ((!is_numeric($unit_type) && !in_array($unit_type, $allowedValues)) || (is_numeric($unit_type) && !in_array($allowedValues[$unit_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'unit_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /*
     * Gets content_as_bitmap
     *
     * @return bool
     */
    public function getContentAsBitmap()
    {
        return $this->container['content_as_bitmap'];
    }

    /*
     * Sets content_as_bitmap
     *
     * @param bool $content_as_bitmap Gets or sets a value indicating whether content of a drawing is represented as image inside Pdf. Applicable only for CAD to Pdf export. Default is false.
     *
     * @return $this
     */
    public function setContentAsBitmap($content_as_bitmap)
    {
        $this->container['content_as_bitmap'] = $content_as_bitmap;

        return $this;
    }

    /*
     * Gets graphics_options
     *
     * @return \Aspose\CAD\Model\GraphicsOptions
     */
    public function getGraphicsOptions()
    {
        return $this->container['graphics_options'];
    }

    /*
     * Sets graphics_options
     *
     * @param \Aspose\CAD\Model\GraphicsOptions $graphics_options Gets or sets options to render bitmap inside pdf (if ContentAsBitmap is set to true).
     *
     * @return $this
     */
    public function setGraphicsOptions($graphics_options)
    {
        $this->container['graphics_options'] = $graphics_options;

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


