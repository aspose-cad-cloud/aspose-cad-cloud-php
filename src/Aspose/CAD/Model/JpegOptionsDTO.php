<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="JpegOptionsDTO.php">
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
 * JpegOptionsDTO
 */

namespace Aspose\CAD\Model;
use \Aspose\CAD\ObjectSerializer;

/*
 * JpegOptionsDTO
 *
 * @description Export options for JPEG format
 */
class JpegOptionsDTO extends ImageOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "JpegOptionsDTO";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'compression_type' => 'string',
        'color_type' => 'string',
        'quality' => 'int',
        'rd_opt_settings' => '\Aspose\CAD\Model\RdOptimizerSettings'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'comment' => null,
        'compression_type' => null,
        'color_type' => null,
        'quality' => 'int32',
        'rd_opt_settings' => null
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
        'comment' => 'Comment',
        'compression_type' => 'CompressionType',
        'color_type' => 'ColorType',
        'quality' => 'Quality',
        'rd_opt_settings' => 'RdOptSettings'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'compression_type' => 'setCompressionType',
        'color_type' => 'setColorType',
        'quality' => 'setQuality',
        'rd_opt_settings' => 'setRdOptSettings'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'compression_type' => 'getCompressionType',
        'color_type' => 'getColorType',
        'quality' => 'getQuality',
        'rd_opt_settings' => 'getRdOptSettings'
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

    const COMPRESSION_TYPE_BASELINE = 'Baseline';
    const COMPRESSION_TYPE_PROGRESSIVE = 'Progressive';
    const COMPRESSION_TYPE_LOSSLESS = 'Lossless';
    const COMPRESSION_TYPE_JPEG_LS = 'JpegLs';
    const COLOR_TYPE_GRAYSCALE = 'Grayscale';
    const COLOR_TYPE_Y_CB_CR = 'YCbCr';
    const COLOR_TYPE_CMYK = 'Cmyk';
    const COLOR_TYPE_YCCK = 'Ycck';
    const COLOR_TYPE_RGB = 'Rgb';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionTypeAllowableValues()
    {
        return [
            self::COMPRESSION_TYPE_BASELINE,
            self::COMPRESSION_TYPE_PROGRESSIVE,
            self::COMPRESSION_TYPE_LOSSLESS,
            self::COMPRESSION_TYPE_JPEG_LS,
        ];
    }
    
    /*
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
    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['compression_type'] = isset($data['compression_type']) ? $data['compression_type'] : null;
        $this->container['color_type'] = isset($data['color_type']) ? $data['color_type'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['rd_opt_settings'] = isset($data['rd_opt_settings']) ? $data['rd_opt_settings'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['compression_type'] === null) {
            $invalidProperties[] = "'compression_type' can't be null";
        }
        $allowedValues = $this->getCompressionTypeAllowableValues();
        if (!in_array($this->container['compression_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compression_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        if ($this->container['quality'] === null) {
            $invalidProperties[] = "'quality' can't be null";
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

        if ($this->container['compression_type'] === null) {
            return false;
        }
        $allowedValues = $this->getCompressionTypeAllowableValues();
        if (!in_array($this->container['compression_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['color_type'] === null) {
            return false;
        }
        $allowedValues = $this->getColorTypeAllowableValues();
        if (!in_array($this->container['color_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['quality'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /*
     * Sets comment
     *
     * @param string $comment Comment to resulting image
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /*
     * Gets compression_type
     *
     * @return string
     */
    public function getCompressionType()
    {
        return $this->container['compression_type'];
    }

    /*
     * Sets compression_type
     *
     * @param string $compression_type Compression type
     *
     * @return $this
     */
    public function setCompressionType($compression_type)
    {
        $allowedValues = $this->getCompressionTypeAllowableValues();
        if ((!is_numeric($compression_type) && !in_array($compression_type, $allowedValues)) || (is_numeric($compression_type) && !in_array($allowedValues[$compression_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compression_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['compression_type'] = $compression_type;

        return $this;
    }

    /*
     * Gets color_type
     *
     * @return string
     */
    public function getColorType()
    {
        return $this->container['color_type'];
    }

    /*
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

    /*
     * Gets quality
     *
     * @return int
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /*
     * Sets quality
     *
     * @param int $quality Quality level
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /*
     * Gets rd_opt_settings
     *
     * @return \Aspose\CAD\Model\RdOptimizerSettings
     */
    public function getRdOptSettings()
    {
        return $this->container['rd_opt_settings'];
    }

    /*
     * Sets rd_opt_settings
     *
     * @param \Aspose\CAD\Model\RdOptimizerSettings $rd_opt_settings Optimizer settings
     *
     * @return $this
     */
    public function setRdOptSettings($rd_opt_settings)
    {
        $this->container['rd_opt_settings'] = $rd_opt_settings;

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


