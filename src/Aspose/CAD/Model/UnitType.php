<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UnitType.php">
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
 * UnitType
 *
 * @description 
 */
class UnitType
{
    /**
     * Possible values of this enum
     */
    const KILOMETER = 'Kilometer';
    const METER = 'Meter';
    const CENTIMENTER = 'Centimenter';
    const MILLIMETER = 'Millimeter';
    const MICROMETER = 'Micrometer';
    const NANOMETER = 'Nanometer';
    const ANGSTROM = 'Angstrom';
    const DECIMETER = 'Decimeter';
    const DECAMETER = 'Decameter';
    const HECTOMETER = 'Hectometer';
    const GIGAMETER = 'Gigameter';
    const ASTRONOMICAL_UNIT = 'AstronomicalUnit';
    const LIGHT_YEAR = 'LightYear';
    const PARSEC = 'Parsec';
    const MILE = 'Mile';
    const YARD = 'Yard';
    const FOOT = 'Foot';
    const INCH = 'Inch';
    const MIL = 'Mil';
    const MICRO_INCH = 'MicroInch';
    const CUSTOM = 'Custom';
    const UNITLESS = 'Unitless';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::KILOMETER,
            self::METER,
            self::CENTIMENTER,
            self::MILLIMETER,
            self::MICROMETER,
            self::NANOMETER,
            self::ANGSTROM,
            self::DECIMETER,
            self::DECAMETER,
            self::HECTOMETER,
            self::GIGAMETER,
            self::ASTRONOMICAL_UNIT,
            self::LIGHT_YEAR,
            self::PARSEC,
            self::MILE,
            self::YARD,
            self::FOOT,
            self::INCH,
            self::MIL,
            self::MICRO_INCH,
            self::CUSTOM,
            self::UNITLESS,
        ];
    }
}


