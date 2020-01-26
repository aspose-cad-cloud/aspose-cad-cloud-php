<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutDrawingJpegRequest.php">
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

namespace Aspose\CAD\Model\Requests;

/*
 * Request model for putDrawingJpeg operation.
 */
class PutDrawingJpegRequest
{
    /*
     * Input drawing
     */
    public $drawing_data;
	
    /*
     * Path to updated file (if this is empty, response contains streamed file).
     */
    public $out_path;
	
    /*
     * JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/JpegOptionsDTO model definition.
     */
    public $export_options;
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the PutDrawingJpegRequest class.
     *  
     * @param \SplFileObject $drawing_data Input drawing
     * @param string $out_path Path to updated file (if this is empty, response contains streamed file).
     * @param string $export_options JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/JpegOptionsDTO model definition.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($drawing_data, $out_path = null, $export_options = null, $storage = null)             
    {
        $this->drawing_data = $drawing_data;
        $this->out_path = $out_path;
        $this->export_options = $export_options;
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
     * Path to updated file (if this is empty, response contains streamed file).
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /*
     * Path to updated file (if this is empty, response contains streamed file).
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }
	
    /*
     * JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/JpegOptionsDTO model definition.
     */
    public function get_export_options()
    {
        return $this->export_options;
    }

    /*
     * JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/JpegOptionsDTO model definition.
     */
    public function set_export_options($value)
    {
        $this->export_options = $value;
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
