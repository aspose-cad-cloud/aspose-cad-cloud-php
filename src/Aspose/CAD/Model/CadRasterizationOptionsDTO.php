<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CadRasterizationOptionsDTO.php">
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
 * CadRasterizationOptionsDTO
 */

namespace Aspose\CAD\Model;
use \Aspose\CAD\ObjectSerializer;

/*
 * CadRasterizationOptionsDTO
 *
 * @description Raster export options
 */
class CadRasterizationOptionsDTO extends VectorRasterizationOptionsDTO 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CadRasterizationOptionsDTO";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'zoom' => 'double',
        'pen_options' => '\Aspose\CAD\Model\PenOptions',
        'automatic_layouts_scaling' => 'bool',
        'layers' => 'string[]',
        'layouts' => 'string[]',
        'draw_type' => 'string',
        'no_scaling' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'zoom' => 'double',
        'pen_options' => null,
        'automatic_layouts_scaling' => null,
        'layers' => null,
        'layouts' => null,
        'draw_type' => null,
        'no_scaling' => null
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
        'zoom' => 'Zoom',
        'pen_options' => 'PenOptions',
        'automatic_layouts_scaling' => 'AutomaticLayoutsScaling',
        'layers' => 'Layers',
        'layouts' => 'Layouts',
        'draw_type' => 'DrawType',
        'no_scaling' => 'NoScaling'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'zoom' => 'setZoom',
        'pen_options' => 'setPenOptions',
        'automatic_layouts_scaling' => 'setAutomaticLayoutsScaling',
        'layers' => 'setLayers',
        'layouts' => 'setLayouts',
        'draw_type' => 'setDrawType',
        'no_scaling' => 'setNoScaling'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'zoom' => 'getZoom',
        'pen_options' => 'getPenOptions',
        'automatic_layouts_scaling' => 'getAutomaticLayoutsScaling',
        'layers' => 'getLayers',
        'layouts' => 'getLayouts',
        'draw_type' => 'getDrawType',
        'no_scaling' => 'getNoScaling'
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

    const DRAW_TYPE_USE_DRAW_COLOR = 'UseDrawColor';
    const DRAW_TYPE_USE_OBJECT_COLOR = 'UseObjectColor';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDrawTypeAllowableValues()
    {
        return [
            self::DRAW_TYPE_USE_DRAW_COLOR,
            self::DRAW_TYPE_USE_OBJECT_COLOR,
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

        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['pen_options'] = isset($data['pen_options']) ? $data['pen_options'] : null;
        $this->container['automatic_layouts_scaling'] = isset($data['automatic_layouts_scaling']) ? $data['automatic_layouts_scaling'] : null;
        $this->container['layers'] = isset($data['layers']) ? $data['layers'] : null;
        $this->container['layouts'] = isset($data['layouts']) ? $data['layouts'] : null;
        $this->container['draw_type'] = isset($data['draw_type']) ? $data['draw_type'] : null;
        $this->container['no_scaling'] = isset($data['no_scaling']) ? $data['no_scaling'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['zoom'] === null) {
            $invalidProperties[] = "'zoom' can't be null";
        }
        if ($this->container['automatic_layouts_scaling'] === null) {
            $invalidProperties[] = "'automatic_layouts_scaling' can't be null";
        }
        if ($this->container['draw_type'] === null) {
            $invalidProperties[] = "'draw_type' can't be null";
        }
        $allowedValues = $this->getDrawTypeAllowableValues();
        if (!in_array($this->container['draw_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'draw_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['no_scaling'] === null) {
            $invalidProperties[] = "'no_scaling' can't be null";
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

        if ($this->container['zoom'] === null) {
            return false;
        }
        if ($this->container['automatic_layouts_scaling'] === null) {
            return false;
        }
        if ($this->container['draw_type'] === null) {
            return false;
        }
        $allowedValues = $this->getDrawTypeAllowableValues();
        if (!in_array($this->container['draw_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['no_scaling'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets zoom
     *
     * @return double
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /*
     * Sets zoom
     *
     * @param double $zoom Zoom factor
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

        return $this;
    }

    /*
     * Gets pen_options
     *
     * @return \Aspose\CAD\Model\PenOptions
     */
    public function getPenOptions()
    {
        return $this->container['pen_options'];
    }

    /*
     * Sets pen_options
     *
     * @param \Aspose\CAD\Model\PenOptions $pen_options Pen options
     *
     * @return $this
     */
    public function setPenOptions($pen_options)
    {
        $this->container['pen_options'] = $pen_options;

        return $this;
    }

    /*
     * Gets automatic_layouts_scaling
     *
     * @return bool
     */
    public function getAutomaticLayoutsScaling()
    {
        return $this->container['automatic_layouts_scaling'];
    }

    /*
     * Sets automatic_layouts_scaling
     *
     * @param bool $automatic_layouts_scaling Determines whether layout has to be scaled automatically
     *
     * @return $this
     */
    public function setAutomaticLayoutsScaling($automatic_layouts_scaling)
    {
        $this->container['automatic_layouts_scaling'] = $automatic_layouts_scaling;

        return $this;
    }

    /*
     * Gets layers
     *
     * @return string[]
     */
    public function getLayers()
    {
        return $this->container['layers'];
    }

    /*
     * Sets layers
     *
     * @param string[] $layers Layers to export
     *
     * @return $this
     */
    public function setLayers($layers)
    {
        $this->container['layers'] = $layers;

        return $this;
    }

    /*
     * Gets layouts
     *
     * @return string[]
     */
    public function getLayouts()
    {
        return $this->container['layouts'];
    }

    /*
     * Sets layouts
     *
     * @param string[] $layouts Layouts to export
     *
     * @return $this
     */
    public function setLayouts($layouts)
    {
        $this->container['layouts'] = $layouts;

        return $this;
    }

    /*
     * Gets draw_type
     *
     * @return string
     */
    public function getDrawType()
    {
        return $this->container['draw_type'];
    }

    /*
     * Sets draw_type
     *
     * @param string $draw_type Drawing mode
     *
     * @return $this
     */
    public function setDrawType($draw_type)
    {
        $allowedValues = $this->getDrawTypeAllowableValues();
        if ((!is_numeric($draw_type) && !in_array($draw_type, $allowedValues)) || (is_numeric($draw_type) && !in_array($allowedValues[$draw_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'draw_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['draw_type'] = $draw_type;

        return $this;
    }

    /*
     * Gets no_scaling
     *
     * @return bool
     */
    public function getNoScaling()
    {
        return $this->container['no_scaling'];
    }

    /*
     * Sets no_scaling
     *
     * @param bool $no_scaling Determines whether scaling has to be turned off
     *
     * @return $this
     */
    public function setNoScaling($no_scaling)
    {
        $this->container['no_scaling'] = $no_scaling;

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


