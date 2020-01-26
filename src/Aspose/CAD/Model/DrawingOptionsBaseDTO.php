<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DrawingOptionsBaseDTO.php">
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
 * DrawingOptionsBaseDTO
 */

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/*
 * DrawingOptionsBaseDTO
 *
 * @description Image options base class
 */
class DrawingOptionsBaseDTO implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DrawingOptionsBaseDTO";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'rotation' => 'string',
        'layers' => 'string[]',
        'resolution_settings' => '\Aspose\CAD\Model\ResolutionSetting',
        'vector_rasterization_options' => '\Aspose\CAD\Model\CadRasterizationOptionsDTO'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'rotation' => null,
        'layers' => null,
        'resolution_settings' => null,
        'vector_rasterization_options' => null
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
        'rotation' => 'Rotation',
        'layers' => 'Layers',
        'resolution_settings' => 'ResolutionSettings',
        'vector_rasterization_options' => 'VectorRasterizationOptions'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rotation' => 'setRotation',
        'layers' => 'setLayers',
        'resolution_settings' => 'setResolutionSettings',
        'vector_rasterization_options' => 'setVectorRasterizationOptions'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rotation' => 'getRotation',
        'layers' => 'getLayers',
        'resolution_settings' => 'getResolutionSettings',
        'vector_rasterization_options' => 'getVectorRasterizationOptions'
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

    const ROTATION_ROTATE_NONE_FLIP_NONE = 'RotateNoneFlipNone';
    const ROTATION_ROTATE90_FLIP_NONE = 'Rotate90FlipNone';
    const ROTATION_ROTATE180_FLIP_NONE = 'Rotate180FlipNone';
    const ROTATION_ROTATE270_FLIP_NONE = 'Rotate270FlipNone';
    const ROTATION_ROTATE_NONE_FLIP_X = 'RotateNoneFlipX';
    const ROTATION_ROTATE90_FLIP_X = 'Rotate90FlipX';
    const ROTATION_ROTATE180_FLIP_X = 'Rotate180FlipX';
    const ROTATION_ROTATE270_FLIP_X = 'Rotate270FlipX';
    const ROTATION_ROTATE_NONE_FLIP_Y = 'RotateNoneFlipY';
    const ROTATION_ROTATE90_FLIP_Y = 'Rotate90FlipY';
    const ROTATION_ROTATE180_FLIP_Y = 'Rotate180FlipY';
    const ROTATION_ROTATE270_FLIP_Y = 'Rotate270FlipY';
    const ROTATION_ROTATE_NONE_FLIP_XY = 'RotateNoneFlipXY';
    const ROTATION_ROTATE90_FLIP_XY = 'Rotate90FlipXY';
    const ROTATION_ROTATE180_FLIP_XY = 'Rotate180FlipXY';
    const ROTATION_ROTATE270_FLIP_XY = 'Rotate270FlipXY';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRotationAllowableValues()
    {
        return [
            self::ROTATION_ROTATE_NONE_FLIP_NONE,
            self::ROTATION_ROTATE90_FLIP_NONE,
            self::ROTATION_ROTATE180_FLIP_NONE,
            self::ROTATION_ROTATE270_FLIP_NONE,
            self::ROTATION_ROTATE_NONE_FLIP_X,
            self::ROTATION_ROTATE90_FLIP_X,
            self::ROTATION_ROTATE180_FLIP_X,
            self::ROTATION_ROTATE270_FLIP_X,
            self::ROTATION_ROTATE_NONE_FLIP_Y,
            self::ROTATION_ROTATE90_FLIP_Y,
            self::ROTATION_ROTATE180_FLIP_Y,
            self::ROTATION_ROTATE270_FLIP_Y,
            self::ROTATION_ROTATE_NONE_FLIP_XY,
            self::ROTATION_ROTATE90_FLIP_XY,
            self::ROTATION_ROTATE180_FLIP_XY,
            self::ROTATION_ROTATE270_FLIP_XY,
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
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['layers'] = isset($data['layers']) ? $data['layers'] : null;
        $this->container['resolution_settings'] = isset($data['resolution_settings']) ? $data['resolution_settings'] : null;
        $this->container['vector_rasterization_options'] = isset($data['vector_rasterization_options']) ? $data['vector_rasterization_options'] : null;

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

        if ($this->container['rotation'] === null) {
            $invalidProperties[] = "'rotation' can't be null";
        }
        $allowedValues = $this->getRotationAllowableValues();
        if (!in_array($this->container['rotation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rotation', must be one of '%s'",
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

        if ($this->container['rotation'] === null) {
            return false;
        }
        $allowedValues = $this->getRotationAllowableValues();
        if (!in_array($this->container['rotation'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets rotation
     *
     * @return string
     */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /*
     * Sets rotation
     *
     * @param string $rotation Resulting rotation operation
     *
     * @return $this
     */
    public function setRotation($rotation)
    {
        $allowedValues = $this->getRotationAllowableValues();
        if ((!is_numeric($rotation) && !in_array($rotation, $allowedValues)) || (is_numeric($rotation) && !in_array($allowedValues[$rotation], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'rotation', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['rotation'] = $rotation;

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
     * Gets resolution_settings
     *
     * @return \Aspose\CAD\Model\ResolutionSetting
     */
    public function getResolutionSettings()
    {
        return $this->container['resolution_settings'];
    }

    /*
     * Sets resolution_settings
     *
     * @param \Aspose\CAD\Model\ResolutionSetting $resolution_settings DPI resolution settings
     *
     * @return $this
     */
    public function setResolutionSettings($resolution_settings)
    {
        $this->container['resolution_settings'] = $resolution_settings;

        return $this;
    }

    /*
     * Gets vector_rasterization_options
     *
     * @return \Aspose\CAD\Model\CadRasterizationOptionsDTO
     */
    public function getVectorRasterizationOptions()
    {
        return $this->container['vector_rasterization_options'];
    }

    /*
     * Sets vector_rasterization_options
     *
     * @param \Aspose\CAD\Model\CadRasterizationOptionsDTO $vector_rasterization_options Raster options
     *
     * @return $this
     */
    public function setVectorRasterizationOptions($vector_rasterization_options)
    {
        $this->container['vector_rasterization_options'] = $vector_rasterization_options;

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


