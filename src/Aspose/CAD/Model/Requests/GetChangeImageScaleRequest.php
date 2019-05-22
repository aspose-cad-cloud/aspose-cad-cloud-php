<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetChangeImageScaleRequest.php">
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

namespace Aspose\CAD\Model\Requests;

/*
 * Request model for getChangeImageScale operation.
 */
class GetChangeImageScaleRequest
{
    /*
     * The image name.
     */
    public $name;
	
    /*
     * Output file format. Valid formats: BMP, PNG, JPG, JPEG, JPEG2000, TIF, TIFF, PSD, GIF, PDF, WMF.
     */
    public $format;
	
    /*
     * New width of the scaled image.
     */
    public $new_width;
	
    /*
     * New height of the scaled image.
     */
    public $new_height;
	
    /*
     * Original drawing folder.
     */
    public $folder;
	
    /*
     * File storage, which has to be used.
     */
    public $storage;
	
    /*
     * Path to updated file, if this is empty, response contains streamed image.
     */
    public $out_path;
    
	
    /*
     * Initializes a new instance of the GetChangeImageScaleRequest class.
     *  
     * @param string $name The image name.
     * @param string $format Output file format. Valid formats: BMP, PNG, JPG, JPEG, JPEG2000, TIF, TIFF, PSD, GIF, PDF, WMF.
     * @param int $new_width New width of the scaled image.
     * @param int $new_height New height of the scaled image.
     * @param string $folder Original drawing folder.
     * @param string $storage File storage, which has to be used.
     * @param string $out_path Path to updated file, if this is empty, response contains streamed image.
     */
    public function __construct($name, $format, $new_width, $new_height, $folder = null, $storage = null, $out_path = null)             
    {
        $this->name = $name;
        $this->format = $format;
        $this->new_width = $new_width;
        $this->new_height = $new_height;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->out_path = $out_path;
    }

    /*
     * The image name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The image name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * Output file format. Valid formats: BMP, PNG, JPG, JPEG, JPEG2000, TIF, TIFF, PSD, GIF, PDF, WMF.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Output file format. Valid formats: BMP, PNG, JPG, JPEG, JPEG2000, TIF, TIFF, PSD, GIF, PDF, WMF.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
	
    /*
     * New width of the scaled image.
     */
    public function get_new_width()
    {
        return $this->new_width;
    }

    /*
     * New width of the scaled image.
     */
    public function set_new_width($value)
    {
        $this->new_width = $value;
        return $this;
    }
	
    /*
     * New height of the scaled image.
     */
    public function get_new_height()
    {
        return $this->new_height;
    }

    /*
     * New height of the scaled image.
     */
    public function set_new_height($value)
    {
        $this->new_height = $value;
        return $this;
    }
	
    /*
     * Original drawing folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Original drawing folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
	
    /*
     * File storage, which has to be used.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * File storage, which has to be used.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
	
    /*
     * Path to updated file, if this is empty, response contains streamed image.
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /*
     * Path to updated file, if this is empty, response contains streamed image.
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }
}
