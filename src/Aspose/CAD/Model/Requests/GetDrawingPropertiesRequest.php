<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetDrawingPropertiesRequest.php">
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
 * Request model for getDrawingProperties operation.
 */
class GetDrawingPropertiesRequest
{
    /*
     * Filename of an input drawing on a storage.
     */
    public $name;
	
    /*
     * Folder with a drawing to get properties for.
     */
    public $folder;
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the GetDrawingPropertiesRequest class.
     *  
     * @param string $name Filename of an input drawing on a storage.
     * @param string $folder Folder with a drawing to get properties for.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->folder = $folder;
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
     * Folder with a drawing to get properties for.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Folder with a drawing to get properties for.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
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
