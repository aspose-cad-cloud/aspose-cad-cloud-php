<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffCompressions.php">
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
 * TiffCompressions
 *
 * @description 
 */
class TiffCompressions
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const CCITT_RLE = 'CcittRle';
    const CCITT_FAX3 = 'CcittFax3';
    const CCITT_FAX4 = 'CcittFax4';
    const LZW = 'Lzw';
    const OJPEG = 'Ojpeg';
    const JPEG = 'Jpeg';
    const ADOBE_DEFLATE = 'AdobeDeflate';
    const NEXT = 'Next';
    const CCITT_RLE_W = 'CcittRleW';
    const PACKBITS = 'Packbits';
    const THUNDERSCAN = 'Thunderscan';
    const IT8_CTPAD = 'It8Ctpad';
    const IT8_LW = 'It8Lw';
    const IT8_MP = 'It8Mp';
    const IT8_BL = 'It8Bl';
    const PIXAR_FILM = 'PixarFilm';
    const PIXAR_LOG = 'PixarLog';
    const DEFLATE = 'Deflate';
    const DCS = 'Dcs';
    const JBIG = 'Jbig';
    const SGILOG = 'Sgilog';
    const SGILOG24 = 'Sgilog24';
    const JP2000 = 'Jp2000';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::CCITT_RLE,
            self::CCITT_FAX3,
            self::CCITT_FAX4,
            self::LZW,
            self::OJPEG,
            self::JPEG,
            self::ADOBE_DEFLATE,
            self::NEXT,
            self::CCITT_RLE_W,
            self::PACKBITS,
            self::THUNDERSCAN,
            self::IT8_CTPAD,
            self::IT8_LW,
            self::IT8_MP,
            self::IT8_BL,
            self::PIXAR_FILM,
            self::PIXAR_LOG,
            self::DEFLATE,
            self::DCS,
            self::JBIG,
            self::SGILOG,
            self::SGILOG24,
            self::JP2000,
        ];
    }
}


