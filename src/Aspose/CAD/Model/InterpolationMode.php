<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="InterpolationMode.php">
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
 * InterpolationMode
 *
 * @description 
 */
class InterpolationMode
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'Default';
    const LOW = 'Low';
    const HIGH = 'High';
    const BILINEAR = 'Bilinear';
    const BICUBIC = 'Bicubic';
    const NEAREST_NEIGHBOR = 'NearestNeighbor';
    const HIGH_QUALITY_BILINEAR = 'HighQualityBilinear';
    const HIGH_QUALITY_BICUBIC = 'HighQualityBicubic';
    const INVALID = 'Invalid';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::LOW,
            self::HIGH,
            self::BILINEAR,
            self::BICUBIC,
            self::NEAREST_NEIGHBOR,
            self::HIGH_QUALITY_BILINEAR,
            self::HIGH_QUALITY_BICUBIC,
            self::INVALID,
        ];
    }
}


