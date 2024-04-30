<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GifOptionsDTO.php">
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
 * GifOptionsDTO
 *
 * @description Export options for GIF format
 */
class GifOptionsDTO extends DrawingOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "GifOptionsDTO";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'do_palette_correction' => 'bool',
        'color_resolution' => 'int',
        'is_palette_sorted' => 'bool',
        'pixel_aspect_ratio' => 'int',
        'background_color_index' => 'int',
        'has_trailer' => 'bool',
        'interlaced' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'do_palette_correction' => null,
        'color_resolution' => 'byte',
        'is_palette_sorted' => null,
        'pixel_aspect_ratio' => 'byte',
        'background_color_index' => 'byte',
        'has_trailer' => null,
        'interlaced' => null
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
        'do_palette_correction' => 'DoPaletteCorrection',
        'color_resolution' => 'ColorResolution',
        'is_palette_sorted' => 'IsPaletteSorted',
        'pixel_aspect_ratio' => 'PixelAspectRatio',
        'background_color_index' => 'BackgroundColorIndex',
        'has_trailer' => 'HasTrailer',
        'interlaced' => 'Interlaced'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'do_palette_correction' => 'setDoPaletteCorrection',
        'color_resolution' => 'setColorResolution',
        'is_palette_sorted' => 'setIsPaletteSorted',
        'pixel_aspect_ratio' => 'setPixelAspectRatio',
        'background_color_index' => 'setBackgroundColorIndex',
        'has_trailer' => 'setHasTrailer',
        'interlaced' => 'setInterlaced'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'do_palette_correction' => 'getDoPaletteCorrection',
        'color_resolution' => 'getColorResolution',
        'is_palette_sorted' => 'getIsPaletteSorted',
        'pixel_aspect_ratio' => 'getPixelAspectRatio',
        'background_color_index' => 'getBackgroundColorIndex',
        'has_trailer' => 'getHasTrailer',
        'interlaced' => 'getInterlaced'
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['do_palette_correction'] = isset($data['do_palette_correction']) ? $data['do_palette_correction'] : null;
        $this->container['color_resolution'] = isset($data['color_resolution']) ? $data['color_resolution'] : null;
        $this->container['is_palette_sorted'] = isset($data['is_palette_sorted']) ? $data['is_palette_sorted'] : null;
        $this->container['pixel_aspect_ratio'] = isset($data['pixel_aspect_ratio']) ? $data['pixel_aspect_ratio'] : null;
        $this->container['background_color_index'] = isset($data['background_color_index']) ? $data['background_color_index'] : null;
        $this->container['has_trailer'] = isset($data['has_trailer']) ? $data['has_trailer'] : null;
        $this->container['interlaced'] = isset($data['interlaced']) ? $data['interlaced'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['do_palette_correction'] === null) {
            $invalidProperties[] = "'do_palette_correction' can't be null";
        }
        if ($this->container['color_resolution'] === null) {
            $invalidProperties[] = "'color_resolution' can't be null";
        }
        if ($this->container['is_palette_sorted'] === null) {
            $invalidProperties[] = "'is_palette_sorted' can't be null";
        }
        if ($this->container['pixel_aspect_ratio'] === null) {
            $invalidProperties[] = "'pixel_aspect_ratio' can't be null";
        }
        if ($this->container['background_color_index'] === null) {
            $invalidProperties[] = "'background_color_index' can't be null";
        }
        if ($this->container['has_trailer'] === null) {
            $invalidProperties[] = "'has_trailer' can't be null";
        }
        if ($this->container['interlaced'] === null) {
            $invalidProperties[] = "'interlaced' can't be null";
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

        if ($this->container['do_palette_correction'] === null) {
            return false;
        }
        if ($this->container['color_resolution'] === null) {
            return false;
        }
        if ($this->container['is_palette_sorted'] === null) {
            return false;
        }
        if ($this->container['pixel_aspect_ratio'] === null) {
            return false;
        }
        if ($this->container['background_color_index'] === null) {
            return false;
        }
        if ($this->container['has_trailer'] === null) {
            return false;
        }
        if ($this->container['interlaced'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets do_palette_correction
     *
     * @return bool
     */
    public function getDoPaletteCorrection()
    {
        return $this->container['do_palette_correction'];
    }

    /**
     * Sets do_palette_correction
     *
     * @param bool $do_palette_correction Determines whether to do auto-correction of a palette
     *
     * @return $this
     */
    public function setDoPaletteCorrection($do_palette_correction)
    {
        $this->container['do_palette_correction'] = $do_palette_correction;

        return $this;
    }

    /**
     * Gets color_resolution
     *
     * @return int
     */
    public function getColorResolution()
    {
        return $this->container['color_resolution'];
    }

    /**
     * Sets color_resolution
     *
     * @param int $color_resolution Color resolution
     *
     * @return $this
     */
    public function setColorResolution($color_resolution)
    {
        $this->container['color_resolution'] = $color_resolution;

        return $this;
    }

    /**
     * Gets is_palette_sorted
     *
     * @return bool
     */
    public function getIsPaletteSorted()
    {
        return $this->container['is_palette_sorted'];
    }

    /**
     * Sets is_palette_sorted
     *
     * @param bool $is_palette_sorted Determines whether a palette is sorted
     *
     * @return $this
     */
    public function setIsPaletteSorted($is_palette_sorted)
    {
        $this->container['is_palette_sorted'] = $is_palette_sorted;

        return $this;
    }

    /**
     * Gets pixel_aspect_ratio
     *
     * @return int
     */
    public function getPixelAspectRatio()
    {
        return $this->container['pixel_aspect_ratio'];
    }

    /**
     * Sets pixel_aspect_ratio
     *
     * @param int $pixel_aspect_ratio Pixel aspect ration
     *
     * @return $this
     */
    public function setPixelAspectRatio($pixel_aspect_ratio)
    {
        $this->container['pixel_aspect_ratio'] = $pixel_aspect_ratio;

        return $this;
    }

    /**
     * Gets background_color_index
     *
     * @return int
     */
    public function getBackgroundColorIndex()
    {
        return $this->container['background_color_index'];
    }

    /**
     * Sets background_color_index
     *
     * @param int $background_color_index Background color index
     *
     * @return $this
     */
    public function setBackgroundColorIndex($background_color_index)
    {
        $this->container['background_color_index'] = $background_color_index;

        return $this;
    }

    /**
     * Gets has_trailer
     *
     * @return bool
     */
    public function getHasTrailer()
    {
        return $this->container['has_trailer'];
    }

    /**
     * Sets has_trailer
     *
     * @param bool $has_trailer Determines whether image has to have a trailer
     *
     * @return $this
     */
    public function setHasTrailer($has_trailer)
    {
        $this->container['has_trailer'] = $has_trailer;

        return $this;
    }

    /**
     * Gets interlaced
     *
     * @return bool
     */
    public function getInterlaced()
    {
        return $this->container['interlaced'];
    }

    /**
     * Sets interlaced
     *
     * @param bool $interlaced Determines whether an image has to be interlaced
     *
     * @return $this
     */
    public function setInterlaced($interlaced)
    {
        $this->container['interlaced'] = $interlaced;

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


