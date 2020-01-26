<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CadResponse.php">
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
 * CadResponse
 */

namespace Aspose\CAD\Model;

use \ArrayAccess;
use \Aspose\CAD\ObjectSerializer;

/*
 * CadResponse
 *
 * @description Represents information about a drawing.
 */
class CadResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CadResponse";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'height' => 'int',
        'width' => 'int',
        'dwg_properties' => '\Aspose\CAD\Model\DwgProperties',
        'dxf_properties' => '\Aspose\CAD\Model\DxfProperties',
        'dwt_properties' => '\Aspose\CAD\Model\DwgProperties',
        'dgn_properties' => '\Aspose\CAD\Model\DgnProperties',
        'ifc_properties' => '\Aspose\CAD\Model\IfcProperties',
        'igs_properties' => '\Aspose\CAD\Model\IgsProperties',
        'stl_properties' => '\Aspose\CAD\Model\StlProperties',
        'dwf_properties' => '\Aspose\CAD\Model\DwfProperties',
        'cff2_properties' => '\Aspose\CAD\Model\Cff2Properties'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'height' => 'int32',
        'width' => 'int32',
        'dwg_properties' => null,
        'dxf_properties' => null,
        'dwt_properties' => null,
        'dgn_properties' => null,
        'ifc_properties' => null,
        'igs_properties' => null,
        'stl_properties' => null,
        'dwf_properties' => null,
        'cff2_properties' => null
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
        'height' => 'Height',
        'width' => 'Width',
        'dwg_properties' => 'DwgProperties',
        'dxf_properties' => 'DxfProperties',
        'dwt_properties' => 'DwtProperties',
        'dgn_properties' => 'DgnProperties',
        'ifc_properties' => 'IfcProperties',
        'igs_properties' => 'IgsProperties',
        'stl_properties' => 'StlProperties',
        'dwf_properties' => 'DwfProperties',
        'cff2_properties' => 'Cff2Properties'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'width' => 'setWidth',
        'dwg_properties' => 'setDwgProperties',
        'dxf_properties' => 'setDxfProperties',
        'dwt_properties' => 'setDwtProperties',
        'dgn_properties' => 'setDgnProperties',
        'ifc_properties' => 'setIfcProperties',
        'igs_properties' => 'setIgsProperties',
        'stl_properties' => 'setStlProperties',
        'dwf_properties' => 'setDwfProperties',
        'cff2_properties' => 'setCff2Properties'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'width' => 'getWidth',
        'dwg_properties' => 'getDwgProperties',
        'dxf_properties' => 'getDxfProperties',
        'dwt_properties' => 'getDwtProperties',
        'dgn_properties' => 'getDgnProperties',
        'ifc_properties' => 'getIfcProperties',
        'igs_properties' => 'getIgsProperties',
        'stl_properties' => 'getStlProperties',
        'dwf_properties' => 'getDwfProperties',
        'cff2_properties' => 'getCff2Properties'
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
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['dwg_properties'] = isset($data['dwg_properties']) ? $data['dwg_properties'] : null;
        $this->container['dxf_properties'] = isset($data['dxf_properties']) ? $data['dxf_properties'] : null;
        $this->container['dwt_properties'] = isset($data['dwt_properties']) ? $data['dwt_properties'] : null;
        $this->container['dgn_properties'] = isset($data['dgn_properties']) ? $data['dgn_properties'] : null;
        $this->container['ifc_properties'] = isset($data['ifc_properties']) ? $data['ifc_properties'] : null;
        $this->container['igs_properties'] = isset($data['igs_properties']) ? $data['igs_properties'] : null;
        $this->container['stl_properties'] = isset($data['stl_properties']) ? $data['stl_properties'] : null;
        $this->container['dwf_properties'] = isset($data['dwf_properties']) ? $data['dwf_properties'] : null;
        $this->container['cff2_properties'] = isset($data['cff2_properties']) ? $data['cff2_properties'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
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

        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /*
     * Sets height
     *
     * @param int $height Gets or sets the height of a drawing.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param int $width Gets or sets the width of a drawing.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /*
     * Gets dwg_properties
     *
     * @return \Aspose\CAD\Model\DwgProperties
     */
    public function getDwgProperties()
    {
        return $this->container['dwg_properties'];
    }

    /*
     * Sets dwg_properties
     *
     * @param \Aspose\CAD\Model\DwgProperties $dwg_properties Gets or sets the DWG properties.
     *
     * @return $this
     */
    public function setDwgProperties($dwg_properties)
    {
        $this->container['dwg_properties'] = $dwg_properties;

        return $this;
    }

    /*
     * Gets dxf_properties
     *
     * @return \Aspose\CAD\Model\DxfProperties
     */
    public function getDxfProperties()
    {
        return $this->container['dxf_properties'];
    }

    /*
     * Sets dxf_properties
     *
     * @param \Aspose\CAD\Model\DxfProperties $dxf_properties Gets or sets the DXF properties.
     *
     * @return $this
     */
    public function setDxfProperties($dxf_properties)
    {
        $this->container['dxf_properties'] = $dxf_properties;

        return $this;
    }

    /*
     * Gets dwt_properties
     *
     * @return \Aspose\CAD\Model\DwgProperties
     */
    public function getDwtProperties()
    {
        return $this->container['dwt_properties'];
    }

    /*
     * Sets dwt_properties
     *
     * @param \Aspose\CAD\Model\DwgProperties $dwt_properties Gets or sets the DWT properties.
     *
     * @return $this
     */
    public function setDwtProperties($dwt_properties)
    {
        $this->container['dwt_properties'] = $dwt_properties;

        return $this;
    }

    /*
     * Gets dgn_properties
     *
     * @return \Aspose\CAD\Model\DgnProperties
     */
    public function getDgnProperties()
    {
        return $this->container['dgn_properties'];
    }

    /*
     * Sets dgn_properties
     *
     * @param \Aspose\CAD\Model\DgnProperties $dgn_properties Gets or sets the DGN properties.
     *
     * @return $this
     */
    public function setDgnProperties($dgn_properties)
    {
        $this->container['dgn_properties'] = $dgn_properties;

        return $this;
    }

    /*
     * Gets ifc_properties
     *
     * @return \Aspose\CAD\Model\IfcProperties
     */
    public function getIfcProperties()
    {
        return $this->container['ifc_properties'];
    }

    /*
     * Sets ifc_properties
     *
     * @param \Aspose\CAD\Model\IfcProperties $ifc_properties Gets or sets the IFC properties.
     *
     * @return $this
     */
    public function setIfcProperties($ifc_properties)
    {
        $this->container['ifc_properties'] = $ifc_properties;

        return $this;
    }

    /*
     * Gets igs_properties
     *
     * @return \Aspose\CAD\Model\IgsProperties
     */
    public function getIgsProperties()
    {
        return $this->container['igs_properties'];
    }

    /*
     * Sets igs_properties
     *
     * @param \Aspose\CAD\Model\IgsProperties $igs_properties Gets or sets the IGS properties.
     *
     * @return $this
     */
    public function setIgsProperties($igs_properties)
    {
        $this->container['igs_properties'] = $igs_properties;

        return $this;
    }

    /*
     * Gets stl_properties
     *
     * @return \Aspose\CAD\Model\StlProperties
     */
    public function getStlProperties()
    {
        return $this->container['stl_properties'];
    }

    /*
     * Sets stl_properties
     *
     * @param \Aspose\CAD\Model\StlProperties $stl_properties Gets or sets the STL properties.
     *
     * @return $this
     */
    public function setStlProperties($stl_properties)
    {
        $this->container['stl_properties'] = $stl_properties;

        return $this;
    }

    /*
     * Gets dwf_properties
     *
     * @return \Aspose\CAD\Model\DwfProperties
     */
    public function getDwfProperties()
    {
        return $this->container['dwf_properties'];
    }

    /*
     * Sets dwf_properties
     *
     * @param \Aspose\CAD\Model\DwfProperties $dwf_properties Gets or sets the DWF properties.
     *
     * @return $this
     */
    public function setDwfProperties($dwf_properties)
    {
        $this->container['dwf_properties'] = $dwf_properties;

        return $this;
    }

    /*
     * Gets cff2_properties
     *
     * @return \Aspose\CAD\Model\Cff2Properties
     */
    public function getCff2Properties()
    {
        return $this->container['cff2_properties'];
    }

    /*
     * Sets cff2_properties
     *
     * @param \Aspose\CAD\Model\Cff2Properties $cff2_properties Gets or sets the CFF2 properties.
     *
     * @return $this
     */
    public function setCff2Properties($cff2_properties)
    {
        $this->container['cff2_properties'] = $cff2_properties;

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


