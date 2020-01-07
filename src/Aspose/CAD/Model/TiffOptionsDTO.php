<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffOptionsDTO.php">
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
 * TiffOptionsDTO
 */

namespace Aspose\CAD\Model;
use \Aspose\CAD\ObjectSerializer;

/*
 * TiffOptionsDTO
 *
 * @description Export options for TIFF format
 */
class TiffOptionsDTO extends ImageOptionsBaseDTO 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TiffOptionsDTO";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'byte_order' => 'string',
        'compression' => 'string',
        'expected_format' => 'string',
        'bits_per_sample' => 'int[]',
        'photometric' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'byte_order' => null,
        'compression' => null,
        'expected_format' => null,
        'bits_per_sample' => null,
        'photometric' => null
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
        'byte_order' => 'ByteOrder',
        'compression' => 'Compression',
        'expected_format' => 'ExpectedFormat',
        'bits_per_sample' => 'BitsPerSample',
        'photometric' => 'Photometric'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'byte_order' => 'setByteOrder',
        'compression' => 'setCompression',
        'expected_format' => 'setExpectedFormat',
        'bits_per_sample' => 'setBitsPerSample',
        'photometric' => 'setPhotometric'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'byte_order' => 'getByteOrder',
        'compression' => 'getCompression',
        'expected_format' => 'getExpectedFormat',
        'bits_per_sample' => 'getBitsPerSample',
        'photometric' => 'getPhotometric'
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

    const BYTE_ORDER_LITTLE_ENDIAN = 'LittleEndian';
    const BYTE_ORDER_BIG_ENDIAN = 'BigEndian';
    const COMPRESSION_NONE = 'None';
    const COMPRESSION_CCITT_RLE = 'CcittRle';
    const COMPRESSION_CCITT_FAX3 = 'CcittFax3';
    const COMPRESSION_CCITT_FAX4 = 'CcittFax4';
    const COMPRESSION_LZW = 'Lzw';
    const COMPRESSION_OJPEG = 'Ojpeg';
    const COMPRESSION_JPEG = 'Jpeg';
    const COMPRESSION_ADOBE_DEFLATE = 'AdobeDeflate';
    const COMPRESSION_NEXT = 'Next';
    const COMPRESSION_CCITT_RLE_W = 'CcittRleW';
    const COMPRESSION_PACKBITS = 'Packbits';
    const COMPRESSION_THUNDERSCAN = 'Thunderscan';
    const COMPRESSION_IT8_CTPAD = 'It8Ctpad';
    const COMPRESSION_IT8_LW = 'It8Lw';
    const COMPRESSION_IT8_MP = 'It8Mp';
    const COMPRESSION_IT8_BL = 'It8Bl';
    const COMPRESSION_PIXAR_FILM = 'PixarFilm';
    const COMPRESSION_PIXAR_LOG = 'PixarLog';
    const COMPRESSION_DEFLATE = 'Deflate';
    const COMPRESSION_DCS = 'Dcs';
    const COMPRESSION_JBIG = 'Jbig';
    const COMPRESSION_SGILOG = 'Sgilog';
    const COMPRESSION_SGILOG24 = 'Sgilog24';
    const COMPRESSION_JP2000 = 'Jp2000';
    const EXPECTED_FORMAT__DEFAULT = 'Default';
    const EXPECTED_FORMAT_TIFF_LZW_BW = 'TiffLzwBw';
    const EXPECTED_FORMAT_TIFF_LZW_RGB = 'TiffLzwRgb';
    const EXPECTED_FORMAT_TIFF_LZW_RGBA = 'TiffLzwRgba';
    const EXPECTED_FORMAT_TIFF_LZW_CMYK = 'TiffLzwCmyk';
    const EXPECTED_FORMAT_TIFF_CCITT_FAX3 = 'TiffCcittFax3';
    const EXPECTED_FORMAT_TIFF_CCITT_FAX4 = 'TiffCcittFax4';
    const EXPECTED_FORMAT_TIFF_DEFLATE_BW = 'TiffDeflateBw';
    const EXPECTED_FORMAT_TIFF_DEFLATE_RGB = 'TiffDeflateRgb';
    const EXPECTED_FORMAT_TIFF_DEFLATE_RGBA = 'TiffDeflateRgba';
    const EXPECTED_FORMAT_TIFF_CCIT_RLE = 'TiffCcitRle';
    const EXPECTED_FORMAT_TIFF_JPEG_RGB = 'TiffJpegRgb';
    const EXPECTED_FORMAT_TIFF_JPEG_Y_CB_CR = 'TiffJpegYCbCr';
    const EXPECTED_FORMAT_TIFF_NO_COMPRESSION_BW = 'TiffNoCompressionBw';
    const EXPECTED_FORMAT_TIFF_NO_COMPRESSION_RGB = 'TiffNoCompressionRgb';
    const EXPECTED_FORMAT_TIFF_NO_COMPRESSION_RGBA = 'TiffNoCompressionRgba';
    const PHOTOMETRIC_MIN_IS_WHITE = 'MinIsWhite';
    const PHOTOMETRIC_MIN_IS_BLACK = 'MinIsBlack';
    const PHOTOMETRIC_RGB = 'Rgb';
    const PHOTOMETRIC_PALETTE = 'Palette';
    const PHOTOMETRIC_MASK = 'Mask';
    const PHOTOMETRIC_SEPARATED = 'Separated';
    const PHOTOMETRIC_YCBCR = 'Ycbcr';
    const PHOTOMETRIC_CIELAB = 'Cielab';
    const PHOTOMETRIC_ICCLAB = 'Icclab';
    const PHOTOMETRIC_ITULAB = 'Itulab';
    const PHOTOMETRIC_LOGL = 'Logl';
    const PHOTOMETRIC_LOGLUV = 'Logluv';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getByteOrderAllowableValues()
    {
        return [
            self::BYTE_ORDER_LITTLE_ENDIAN,
            self::BYTE_ORDER_BIG_ENDIAN,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionAllowableValues()
    {
        return [
            self::COMPRESSION_NONE,
            self::COMPRESSION_CCITT_RLE,
            self::COMPRESSION_CCITT_FAX3,
            self::COMPRESSION_CCITT_FAX4,
            self::COMPRESSION_LZW,
            self::COMPRESSION_OJPEG,
            self::COMPRESSION_JPEG,
            self::COMPRESSION_ADOBE_DEFLATE,
            self::COMPRESSION_NEXT,
            self::COMPRESSION_CCITT_RLE_W,
            self::COMPRESSION_PACKBITS,
            self::COMPRESSION_THUNDERSCAN,
            self::COMPRESSION_IT8_CTPAD,
            self::COMPRESSION_IT8_LW,
            self::COMPRESSION_IT8_MP,
            self::COMPRESSION_IT8_BL,
            self::COMPRESSION_PIXAR_FILM,
            self::COMPRESSION_PIXAR_LOG,
            self::COMPRESSION_DEFLATE,
            self::COMPRESSION_DCS,
            self::COMPRESSION_JBIG,
            self::COMPRESSION_SGILOG,
            self::COMPRESSION_SGILOG24,
            self::COMPRESSION_JP2000,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExpectedFormatAllowableValues()
    {
        return [
            self::EXPECTED_FORMAT__DEFAULT,
            self::EXPECTED_FORMAT_TIFF_LZW_BW,
            self::EXPECTED_FORMAT_TIFF_LZW_RGB,
            self::EXPECTED_FORMAT_TIFF_LZW_RGBA,
            self::EXPECTED_FORMAT_TIFF_LZW_CMYK,
            self::EXPECTED_FORMAT_TIFF_CCITT_FAX3,
            self::EXPECTED_FORMAT_TIFF_CCITT_FAX4,
            self::EXPECTED_FORMAT_TIFF_DEFLATE_BW,
            self::EXPECTED_FORMAT_TIFF_DEFLATE_RGB,
            self::EXPECTED_FORMAT_TIFF_DEFLATE_RGBA,
            self::EXPECTED_FORMAT_TIFF_CCIT_RLE,
            self::EXPECTED_FORMAT_TIFF_JPEG_RGB,
            self::EXPECTED_FORMAT_TIFF_JPEG_Y_CB_CR,
            self::EXPECTED_FORMAT_TIFF_NO_COMPRESSION_BW,
            self::EXPECTED_FORMAT_TIFF_NO_COMPRESSION_RGB,
            self::EXPECTED_FORMAT_TIFF_NO_COMPRESSION_RGBA,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhotometricAllowableValues()
    {
        return [
            self::PHOTOMETRIC_MIN_IS_WHITE,
            self::PHOTOMETRIC_MIN_IS_BLACK,
            self::PHOTOMETRIC_RGB,
            self::PHOTOMETRIC_PALETTE,
            self::PHOTOMETRIC_MASK,
            self::PHOTOMETRIC_SEPARATED,
            self::PHOTOMETRIC_YCBCR,
            self::PHOTOMETRIC_CIELAB,
            self::PHOTOMETRIC_ICCLAB,
            self::PHOTOMETRIC_ITULAB,
            self::PHOTOMETRIC_LOGL,
            self::PHOTOMETRIC_LOGLUV,
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

        $this->container['byte_order'] = isset($data['byte_order']) ? $data['byte_order'] : null;
        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
        $this->container['expected_format'] = isset($data['expected_format']) ? $data['expected_format'] : null;
        $this->container['bits_per_sample'] = isset($data['bits_per_sample']) ? $data['bits_per_sample'] : null;
        $this->container['photometric'] = isset($data['photometric']) ? $data['photometric'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['byte_order'] === null) {
            $invalidProperties[] = "'byte_order' can't be null";
        }
        $allowedValues = $this->getByteOrderAllowableValues();
        if (!in_array($this->container['byte_order'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'byte_order', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['compression'] === null) {
            $invalidProperties[] = "'compression' can't be null";
        }
        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['expected_format'] === null) {
            $invalidProperties[] = "'expected_format' can't be null";
        }
        $allowedValues = $this->getExpectedFormatAllowableValues();
        if (!in_array($this->container['expected_format'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'expected_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['photometric'] === null) {
            $invalidProperties[] = "'photometric' can't be null";
        }
        $allowedValues = $this->getPhotometricAllowableValues();
        if (!in_array($this->container['photometric'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'photometric', must be one of '%s'",
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['byte_order'] === null) {
            return false;
        }
        $allowedValues = $this->getByteOrderAllowableValues();
        if (!in_array($this->container['byte_order'], $allowedValues)) {
            return false;
        }
        if ($this->container['compression'] === null) {
            return false;
        }
        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            return false;
        }
        if ($this->container['expected_format'] === null) {
            return false;
        }
        $allowedValues = $this->getExpectedFormatAllowableValues();
        if (!in_array($this->container['expected_format'], $allowedValues)) {
            return false;
        }
        if ($this->container['photometric'] === null) {
            return false;
        }
        $allowedValues = $this->getPhotometricAllowableValues();
        if (!in_array($this->container['photometric'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets byte_order
     *
     * @return string
     */
    public function getByteOrder()
    {
        return $this->container['byte_order'];
    }

    /*
     * Sets byte_order
     *
     * @param string $byte_order Bytes order (little/big-endian notation)
     *
     * @return $this
     */
    public function setByteOrder($byte_order)
    {
        $allowedValues = $this->getByteOrderAllowableValues();
        if ((!is_numeric($byte_order) && !in_array($byte_order, $allowedValues)) || (is_numeric($byte_order) && !in_array($allowedValues[$byte_order], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'byte_order', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['byte_order'] = $byte_order;

        return $this;
    }

    /*
     * Gets compression
     *
     * @return string
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /*
     * Sets compression
     *
     * @param string $compression Compression level
     *
     * @return $this
     */
    public function setCompression($compression)
    {
        $allowedValues = $this->getCompressionAllowableValues();
        if ((!is_numeric($compression) && !in_array($compression, $allowedValues)) || (is_numeric($compression) && !in_array($allowedValues[$compression], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compression', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['compression'] = $compression;

        return $this;
    }

    /*
     * Gets expected_format
     *
     * @return string
     */
    public function getExpectedFormat()
    {
        return $this->container['expected_format'];
    }

    /*
     * Sets expected_format
     *
     * @param string $expected_format Expected TIFF sub-format
     *
     * @return $this
     */
    public function setExpectedFormat($expected_format)
    {
        $allowedValues = $this->getExpectedFormatAllowableValues();
        if ((!is_numeric($expected_format) && !in_array($expected_format, $allowedValues)) || (is_numeric($expected_format) && !in_array($allowedValues[$expected_format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'expected_format', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['expected_format'] = $expected_format;

        return $this;
    }

    /*
     * Gets bits_per_sample
     *
     * @return int[]
     */
    public function getBitsPerSample()
    {
        return $this->container['bits_per_sample'];
    }

    /*
     * Sets bits_per_sample
     *
     * @param int[] $bits_per_sample Bits per pixel
     *
     * @return $this
     */
    public function setBitsPerSample($bits_per_sample)
    {
        $this->container['bits_per_sample'] = $bits_per_sample;

        return $this;
    }

    /*
     * Gets photometric
     *
     * @return string
     */
    public function getPhotometric()
    {
        return $this->container['photometric'];
    }

    /*
     * Sets photometric
     *
     * @param string $photometric Photometric options
     *
     * @return $this
     */
    public function setPhotometric($photometric)
    {
        $allowedValues = $this->getPhotometricAllowableValues();
        if ((!is_numeric($photometric) && !in_array($photometric, $allowedValues)) || (is_numeric($photometric) && !in_array($allowedValues[$photometric], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'photometric', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['photometric'] = $photometric;

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


