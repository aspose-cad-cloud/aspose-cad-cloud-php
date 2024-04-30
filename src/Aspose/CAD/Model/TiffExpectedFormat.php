<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffExpectedFormat.php">
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
 * TiffExpectedFormat
 *
 * @description 
 */
class TiffExpectedFormat
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'Default';
    const TIFF_LZW_BW = 'TiffLzwBw';
    const TIFF_LZW_RGB = 'TiffLzwRgb';
    const TIFF_LZW_RGBA = 'TiffLzwRgba';
    const TIFF_LZW_CMYK = 'TiffLzwCmyk';
    const TIFF_CCITT_FAX3 = 'TiffCcittFax3';
    const TIFF_CCITT_FAX4 = 'TiffCcittFax4';
    const TIFF_DEFLATE_BW = 'TiffDeflateBw';
    const TIFF_DEFLATE_RGB = 'TiffDeflateRgb';
    const TIFF_DEFLATE_RGBA = 'TiffDeflateRgba';
    const TIFF_CCIT_RLE = 'TiffCcitRle';
    const TIFF_JPEG_RGB = 'TiffJpegRgb';
    const TIFF_JPEG_Y_CB_CR = 'TiffJpegYCbCr';
    const TIFF_NO_COMPRESSION_BW = 'TiffNoCompressionBw';
    const TIFF_NO_COMPRESSION_RGB = 'TiffNoCompressionRgb';
    const TIFF_NO_COMPRESSION_RGBA = 'TiffNoCompressionRgba';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::TIFF_LZW_BW,
            self::TIFF_LZW_RGB,
            self::TIFF_LZW_RGBA,
            self::TIFF_LZW_CMYK,
            self::TIFF_CCITT_FAX3,
            self::TIFF_CCITT_FAX4,
            self::TIFF_DEFLATE_BW,
            self::TIFF_DEFLATE_RGB,
            self::TIFF_DEFLATE_RGBA,
            self::TIFF_CCIT_RLE,
            self::TIFF_JPEG_RGB,
            self::TIFF_JPEG_Y_CB_CR,
            self::TIFF_NO_COMPRESSION_BW,
            self::TIFF_NO_COMPRESSION_RGB,
            self::TIFF_NO_COMPRESSION_RGBA,
        ];
    }
}


