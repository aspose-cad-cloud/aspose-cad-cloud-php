<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffPhotometrics.php">
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
 * TiffPhotometrics
 *
 * @description 
 */
class TiffPhotometrics
{
    /**
     * Possible values of this enum
     */
    const MIN_IS_WHITE = 'MinIsWhite';
    const MIN_IS_BLACK = 'MinIsBlack';
    const RGB = 'Rgb';
    const PALETTE = 'Palette';
    const MASK = 'Mask';
    const SEPARATED = 'Separated';
    const YCBCR = 'Ycbcr';
    const CIELAB = 'Cielab';
    const ICCLAB = 'Icclab';
    const ITULAB = 'Itulab';
    const LOGL = 'Logl';
    const LOGLUV = 'Logluv';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MIN_IS_WHITE,
            self::MIN_IS_BLACK,
            self::RGB,
            self::PALETTE,
            self::MASK,
            self::SEPARATED,
            self::YCBCR,
            self::CIELAB,
            self::ICCLAB,
            self::ITULAB,
            self::LOGL,
            self::LOGLUV,
        ];
    }
}


