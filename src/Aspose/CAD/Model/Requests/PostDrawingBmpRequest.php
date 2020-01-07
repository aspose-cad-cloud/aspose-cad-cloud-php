<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostDrawingBmpRequest.php">
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
 * Request model for postDrawingBmp operation.
 */
class PostDrawingBmpRequest
{
    /*
     * Filename of an input drawing on a storage.
     */
    public $name;
	
    /*
     * Export BMP options passed as a JSON on a request body.
     */
    public $options;
	
    /*
     * Folder with a drawing to process.
     */
    public $folder;
	
    /*
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public $out_path;
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the PostDrawingBmpRequest class.
     *  
     * @param string $name Filename of an input drawing on a storage.
     * @param \Aspose\CAD\Model\BmpOptionsDTO $options Export BMP options passed as a JSON on a request body.
     * @param string $folder Folder with a drawing to process.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed image).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $options = null, $folder = null, $out_path = null, $storage = null)             
    {
        $this->name = $name;
        $this->options = $options;
        $this->folder = $folder;
        $this->out_path = $out_path;
        $this->storage = $storage;
    }

    /*
     * Filename of an input drawing on a storage.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Filename of an input drawing on a storage.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * Export BMP options passed as a JSON on a request body.
     */
    public function get_options()
    {
        return $this->options;
    }

    /*
     * Export BMP options passed as a JSON on a request body.
     */
    public function set_options($value)
    {
        $this->options = $value;
        return $this;
    }
	
    /*
     * Folder with a drawing to process.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Folder with a drawing to process.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
	
    /*
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /*
     * Path to updated file (if this is empty, response contains streamed image).
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
