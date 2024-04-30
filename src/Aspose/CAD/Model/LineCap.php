<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LineCap.php">
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
 * LineCap
 *
 * @description 
 */
class LineCap
{
    /**
     * Possible values of this enum
     */
    const FLAT = 'Flat';
    const SQUARE = 'Square';
    const ROUND = 'Round';
    const TRIANGLE = 'Triangle';
    const NO_ANCHOR = 'NoAnchor';
    const SQUARE_ANCHOR = 'SquareAnchor';
    const ROUND_ANCHOR = 'RoundAnchor';
    const DIAMOND_ANCHOR = 'DiamondAnchor';
    const ARROW_ANCHOR = 'ArrowAnchor';
    const ANCHOR_MASK = 'AnchorMask';
    const CUSTOM = 'Custom';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FLAT,
            self::SQUARE,
            self::ROUND,
            self::TRIANGLE,
            self::NO_ANCHOR,
            self::SQUARE_ANCHOR,
            self::ROUND_ANCHOR,
            self::DIAMOND_ANCHOR,
            self::ARROW_ANCHOR,
            self::ANCHOR_MASK,
            self::CUSTOM,
        ];
    }
}


