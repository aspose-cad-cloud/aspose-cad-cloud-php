<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetImagePropertiesRequest.php">
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
 * Request model for getImageProperties operation.
 */
class GetImagePropertiesRequest
{
    /*
     * The image name.
     */
    public $name;
	
    /*
     * Original drawing folder.
     */
    public $folder;
	
    /*
     * File storage, which has to be used.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the GetImagePropertiesRequest class.
     *  
     * @param string $name The image name.
     * @param string $folder Original drawing folder.
     * @param string $storage File storage, which has to be used.
     */
    public function __construct($name, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->folder = $folder;
        $this->storage = $storage;
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
}
