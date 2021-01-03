<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PsdOptionsDTO.php">
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
 * PsdOptionsDTO
 *
 * @description Export options for PSD format
 */
class PsdOptionsDTO extends DrawingOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PsdOptionsDTO";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'version' => 'int',
        'compression_method' => 'object',
        'color_mode' => 'object',
        'channel_bits_count' => 'int',
        'channels_count' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'version' => 'int32',
        'compression_method' => null,
        'color_mode' => null,
        'channel_bits_count' => null,
        'channels_count' => null
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
        'version' => 'Version',
        'compression_method' => 'CompressionMethod',
        'color_mode' => 'ColorMode',
        'channel_bits_count' => 'ChannelBitsCount',
        'channels_count' => 'ChannelsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'compression_method' => 'setCompressionMethod',
        'color_mode' => 'setColorMode',
        'channel_bits_count' => 'setChannelBitsCount',
        'channels_count' => 'setChannelsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'compression_method' => 'getCompressionMethod',
        'color_mode' => 'getColorMode',
        'channel_bits_count' => 'getChannelBitsCount',
        'channels_count' => 'getChannelsCount'
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

        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['compression_method'] = isset($data['compression_method']) ? $data['compression_method'] : null;
        $this->container['color_mode'] = isset($data['color_mode']) ? $data['color_mode'] : null;
        $this->container['channel_bits_count'] = isset($data['channel_bits_count']) ? $data['channel_bits_count'] : null;
        $this->container['channels_count'] = isset($data['channels_count']) ? $data['channels_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['compression_method'] === null) {
            $invalidProperties[] = "'compression_method' can't be null";
        }
        if ($this->container['color_mode'] === null) {
            $invalidProperties[] = "'color_mode' can't be null";
        }
        if ($this->container['channel_bits_count'] === null) {
            $invalidProperties[] = "'channel_bits_count' can't be null";
        }
        if ($this->container['channels_count'] === null) {
            $invalidProperties[] = "'channels_count' can't be null";
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

        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['compression_method'] === null) {
            return false;
        }
        if ($this->container['color_mode'] === null) {
            return false;
        }
        if ($this->container['channel_bits_count'] === null) {
            return false;
        }
        if ($this->container['channels_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version PSD format version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets compression_method
     *
     * @return object
     */
    public function getCompressionMethod()
    {
        return $this->container['compression_method'];
    }

    /**
     * Sets compression_method
     *
     * @param object $compression_method Compression method
     *
     * @return $this
     */
    public function setCompressionMethod($compression_method)
    {
        $this->container['compression_method'] = $compression_method;

        return $this;
    }

    /**
     * Gets color_mode
     *
     * @return object
     */
    public function getColorMode()
    {
        return $this->container['color_mode'];
    }

    /**
     * Sets color_mode
     *
     * @param object $color_mode Color mode
     *
     * @return $this
     */
    public function setColorMode($color_mode)
    {
        $this->container['color_mode'] = $color_mode;

        return $this;
    }

    /**
     * Gets channel_bits_count
     *
     * @return int
     */
    public function getChannelBitsCount()
    {
        return $this->container['channel_bits_count'];
    }

    /**
     * Sets channel_bits_count
     *
     * @param int $channel_bits_count Bits count per channel
     *
     * @return $this
     */
    public function setChannelBitsCount($channel_bits_count)
    {
        $this->container['channel_bits_count'] = $channel_bits_count;

        return $this;
    }

    /**
     * Gets channels_count
     *
     * @return int
     */
    public function getChannelsCount()
    {
        return $this->container['channels_count'];
    }

    /**
     * Sets channels_count
     *
     * @param int $channels_count Channels count
     *
     * @return $this
     */
    public function setChannelsCount($channels_count)
    {
        $this->container['channels_count'] = $channels_count;

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


