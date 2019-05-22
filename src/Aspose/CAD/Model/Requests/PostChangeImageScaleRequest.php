<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostChangeImageScaleRequest.php">
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
 * Request model for postChangeImageScale operation.
 */
class PostChangeImageScaleRequest
{
    /*
     * Input drawing
     */
    public $drawing_data;
	
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
     * Path to updated file, if this is empty, response contains streamed image.
     */
    public $out_path;
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the PostChangeImageScaleRequest class.
     *  
     * @param \SplFileObject $drawing_data Input drawing
     * @param string $format Output file format. Valid formats: BMP, PNG, JPG, JPEG, JPEG2000, TIF, TIFF, PSD, GIF, PDF, WMF.
     * @param int $new_width New width of the scaled image.
     * @param int $new_height New height of the scaled image.
     * @param string $out_path Path to updated file, if this is empty, response contains streamed image.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($drawing_data, $format, $new_width, $new_height, $out_path = null, $storage = null)             
    {
        $this->drawing_data = $drawing_data;
        $this->format = $format;
        $this->new_width = $new_width;
        $this->new_height = $new_height;
        $this->out_path = $out_path;
        $this->storage = $storage;
    }

    /*
     * Input drawing
     */
    public function get_drawing_data()
    {
        return $this->drawing_data;
    }

    /*
     * Input drawing
     */
    public function set_drawing_data($value)
    {
        $this->drawing_data = $value;
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
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Your Aspose Cloud Storage name.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
}
