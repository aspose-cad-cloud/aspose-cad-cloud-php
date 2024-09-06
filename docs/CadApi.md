# Aspose\CAD\CadApi

<a name="convert"></a>
# **convert**
> convert($convertRequest)

Convert CAD drawing to DXF, DWG, DGN, DRC, DWF, DWFX, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG format.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="convertasync"></a>
# **convertAsync**
> convertAsync($convertRequest)

Convert CAD drawing to DXF, DWG, DGN, DRC, DWF, DWFX, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG format.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ConvertRequest** Parameters
```php
__construct(
    $drawing_data, 
    $output_format, 
    $output_type_ext)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **output_format** | **string**| Output DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, PDF, SVG, PNG, BMP, DIB, TIFF, TIF, JPEG, GIF, PSD, JPG, JPE, JIF, JFIF, PSD, WEBP, DCM, DICOM, JP2, J2K, JPF, JPM, JPG2, J2C, JPC, JPX, MJ2 , DJVU file format. |
 **output_type_ext** | **string**| For output pdf format: PDF_15, PDFa_1a OR PDFa_1b. Null for another format | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="copyfile"></a>
# **copyFile**
> copyFile($copyFileRequest)

Copy file

### Return type

void (empty response body)

<a name="copyfileasync"></a>
# **copyFileAsync**
> copyFileAsync($copyFileRequest)

Copy file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CopyFileRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/folder/file.ext&#39; |
 **dest_path** | **string**| Destination file path |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to copy | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="copyfolder"></a>
# **copyFolder**
> copyFolder($copyFolderRequest)

Copy folder

### Return type

void (empty response body)

<a name="copyfolderasync"></a>
# **copyFolderAsync**
> copyFolderAsync($copyFolderRequest)

Copy folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CopyFolderRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source folder path e.g. &#39;/src&#39; |
 **dest_path** | **string**| Destination folder path e.g. &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createfolder"></a>
# **createFolder**
> createFolder($createFolderRequest)

Create the folder

### Return type

void (empty response body)

<a name="createfolderasync"></a>
# **createFolderAsync**
> createFolderAsync($createFolderRequest)

Create the folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateFolderRequest** Parameters
```php
__construct(
    $path, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path to create e.g. &#39;folder_1/folder_2/&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deletefile"></a>
# **deleteFile**
> deleteFile($deleteFileRequest)

Delete file

### Return type

void (empty response body)

<a name="deletefileasync"></a>
# **deleteFileAsync**
> deleteFileAsync($deleteFileRequest)

Delete file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeleteFileRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to delete | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deletefolder"></a>
# **deleteFolder**
> deleteFolder($deleteFolderRequest)

Delete folder

### Return type

void (empty response body)

<a name="deletefolderasync"></a>
# **deleteFolderAsync**
> deleteFolderAsync($deleteFolderRequest)

Delete folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeleteFolderRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $recursive)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **recursive** | **bool**| Enable to delete folders, subfolders and files | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="downloadfile"></a>
# **downloadFile**
> downloadFile($downloadFileRequest)

Download file

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="downloadfileasync"></a>
# **downloadFileAsync**
> downloadFileAsync($downloadFileRequest)

Download file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DownloadFileRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to download | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="editmetadata"></a>
# **editMetadata**
> editMetadata($editMetadataRequest)

Get Metadata info

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="editmetadataasync"></a>
# **editMetadataAsync**
> editMetadataAsync($editMetadataRequest)

Get Metadata info

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **EditMetadataRequest** Parameters
```php
__construct(
    $drawing_data)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="extractmetadata"></a>
# **extractMetadata**
> extractMetadata($extractMetadataRequest)

Extract Metadata from CAD drawing to txt, xml or json file.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="extractmetadataasync"></a>
# **extractMetadataAsync**
> extractMetadataAsync($extractMetadataRequest)

Extract Metadata from CAD drawing to txt, xml or json file.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ExtractMetadataRequest** Parameters
```php
__construct(
    $drawing_data, 
    $output_format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **output_format** | **string**| Output TXT, XML or JSON file format. |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="extracttext"></a>
# **extractText**
> extractText($extractTextRequest)

Extract Text from CAD drawing to txt file

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="extracttextasync"></a>
# **extractTextAsync**
> extractTextAsync($extractTextRequest)

Extract Text from CAD drawing to txt file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ExtractTextRequest** Parameters
```php
__construct(
    $drawing_data)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getdiscusage"></a>
# **getDiscUsage**
> getDiscUsage($getDiscUsageRequest)

Get disc usage

### Return type

[**\Aspose\CAD\Model\DiscUsage**](DiscUsage.md)

<a name="getdiscusageasync"></a>
# **getDiscUsageAsync**
> getDiscUsageAsync($getDiscUsageRequest)

Get disc usage

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetDiscUsageRequest** Parameters
```php
__construct(
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getdrawingproperties"></a>
# **getDrawingProperties**
> getDrawingProperties($getDrawingPropertiesRequest)

Retrieves info about an existing drawing.

### Return type

[**\Aspose\CAD\Model\CadResponse**](CadResponse.md)

<a name="getdrawingpropertiesasync"></a>
# **getDrawingPropertiesAsync**
> getDrawingPropertiesAsync($getDrawingPropertiesRequest)

Retrieves info about an existing drawing.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetDrawingPropertiesRequest** Parameters
```php
__construct(
    $name, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **folder** | **string**| Folder with a drawing to get properties for. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getdrawingresize"></a>
# **getDrawingResize**
> getDrawingResize($getDrawingResizeRequest)

Resize an existing drawing.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="getdrawingresizeasync"></a>
# **getDrawingResizeAsync**
> getDrawingResizeAsync($getDrawingResizeRequest)

Resize an existing drawing.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetDrawingResizeRequest** Parameters
```php
__construct(
    $name, 
    $output_format, 
    $new_width, 
    $new_height, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of a drawing. |
 **output_format** | **string**| Resulting file format. |
 **new_width** | **int**| New width. |
 **new_height** | **int**| New height. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getdrawingrotateflip"></a>
# **getDrawingRotateFlip**
> getDrawingRotateFlip($getDrawingRotateFlipRequest)

Rotate/flip an existing drawing.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="getdrawingrotateflipasync"></a>
# **getDrawingRotateFlipAsync**
> getDrawingRotateFlipAsync($getDrawingRotateFlipRequest)

Rotate/flip an existing drawing.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetDrawingRotateFlipRequest** Parameters
```php
__construct(
    $name, 
    $output_format, 
    $rotate_flip_type, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of a drawing. |
 **output_format** | **string**| Resulting file format. |
 **rotate_flip_type** | **string**| Rotate/flip operation to apply. Possible values: RotateNoneFlipNone, Rotate90FlipNone, Rotate180FlipNone, Rotate270FlipNone, RotateNoneFlipX, Rotate90FlipX, Rotate180FlipX, Rotate270FlipX, RotateNoneFlipY, Rotate90FlipY, Rotate180FlipY, Rotate270FlipY, RotateNoneFlipXY, Rotate90FlipXY, Rotate180FlipXY, Rotate270FlipXY |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getdrawingsaveas"></a>
# **getDrawingSaveAs**
> getDrawingSaveAs($getDrawingSaveAsRequest)

Export an existing drawing to another format.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="getdrawingsaveasasync"></a>
# **getDrawingSaveAsAsync**
> getDrawingSaveAsAsync($getDrawingSaveAsRequest)

Export an existing drawing to another format.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetDrawingSaveAsRequest** Parameters
```php
__construct(
    $name, 
    $output_format, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **output_format** | **string**| Resulting file format. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getfileversions"></a>
# **getFileVersions**
> getFileVersions($getFileVersionsRequest)

Get file versions

### Return type

[**\Aspose\CAD\Model\FileVersions**](FileVersions.md)

<a name="getfileversionsasync"></a>
# **getFileVersionsAsync**
> getFileVersionsAsync($getFileVersionsRequest)

Get file versions

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetFileVersionsRequest** Parameters
```php
__construct(
    $path, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getfileslist"></a>
# **getFilesList**
> getFilesList($getFilesListRequest)

Get all files and folders within a folder

### Return type

[**\Aspose\CAD\Model\FilesList**](FilesList.md)

<a name="getfileslistasync"></a>
# **getFilesListAsync**
> getFilesListAsync($getFilesListRequest)

Get all files and folders within a folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetFilesListRequest** Parameters
```php
__construct(
    $path, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="movefile"></a>
# **moveFile**
> moveFile($moveFileRequest)

Move file

### Return type

void (empty response body)

<a name="movefileasync"></a>
# **moveFileAsync**
> moveFileAsync($moveFileRequest)

Move file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **MoveFileRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/src.ext&#39; |
 **dest_path** | **string**| Destination file path e.g. &#39;/dest.ext&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to move | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="movefolder"></a>
# **moveFolder**
> moveFolder($moveFolderRequest)

Move folder

### Return type

void (empty response body)

<a name="movefolderasync"></a>
# **moveFolderAsync**
> moveFolderAsync($moveFolderRequest)

Move folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **MoveFolderRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Folder path to move e.g. &#39;/folder&#39; |
 **dest_path** | **string**| Destination folder path to move to e.g &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="objectexists"></a>
# **objectExists**
> objectExists($objectExistsRequest)

Check if file or folder exists

### Return type

[**\Aspose\CAD\Model\ObjectExist**](ObjectExist.md)

<a name="objectexistsasync"></a>
# **objectExistsAsync**
> objectExistsAsync($objectExistsRequest)

Check if file or folder exists

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ObjectExistsRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File or folder path e.g. &#39;/file.ext&#39; or &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="papertocad"></a>
# **paperToCad**
> paperToCad($paperToCadRequest)

Convert bitmap image to DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, SVG format.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="papertocadasync"></a>
# **paperToCadAsync**
> paperToCadAsync($paperToCadRequest)

Convert bitmap image to DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, SVG format.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PaperToCadRequest** Parameters
```php
__construct(
    $drawing_data, 
    $output_format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **output_format** | **string**| Output DXF, DWG, DGN, DWF, DWFX, DRC, IFC, STL, STP, STEP, CGM, GLB, GLTF, DWT, IGES, PLT, CF2, OBJ, HPGL, IGS, PCL, FBX, SVG file format. |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingbmp"></a>
# **postDrawingBmp**
> postDrawingBmp($postDrawingBmpRequest)

Export an existing drawing to BMP format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingbmpasync"></a>
# **postDrawingBmpAsync**
> postDrawingBmpAsync($postDrawingBmpRequest)

Export an existing drawing to BMP format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingBmpRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\BmpOptionsDTO**](BmpOptionsDTO.md)| Export BMP options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingcgm"></a>
# **postDrawingCgm**
> postDrawingCgm($postDrawingCgmRequest)

Export an existing drawing to CGM format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingcgmasync"></a>
# **postDrawingCgmAsync**
> postDrawingCgmAsync($postDrawingCgmRequest)

Export an existing drawing to CGM format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingCgmRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\CgmOptionsDTO**](CgmOptionsDTO.md)| Export CGM options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingdxf"></a>
# **postDrawingDXF**
> postDrawingDXF($postDrawingDXFRequest)

Export an existing drawing to DXF format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingdxfasync"></a>
# **postDrawingDXFAsync**
> postDrawingDXFAsync($postDrawingDXFRequest)

Export an existing drawing to DXF format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingDXFRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\DxfOptionsDTO**](DxfOptionsDTO.md)| Export DXF options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingdicom"></a>
# **postDrawingDicom**
> postDrawingDicom($postDrawingDicomRequest)

Export an existing drawing to Dicom format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingdicomasync"></a>
# **postDrawingDicomAsync**
> postDrawingDicomAsync($postDrawingDicomRequest)

Export an existing drawing to Dicom format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingDicomRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\DicomOptionsDTO**](DicomOptionsDTO.md)| Export Dicom options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingdraco"></a>
# **postDrawingDraco**
> postDrawingDraco($postDrawingDracoRequest)

Export an existing drawing to Draco format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingdracoasync"></a>
# **postDrawingDracoAsync**
> postDrawingDracoAsync($postDrawingDracoRequest)

Export an existing drawing to Draco format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingDracoRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\DracoOptionsDTO**](DracoOptionsDTO.md)| Export Draco options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingdwf"></a>
# **postDrawingDwf**
> postDrawingDwf($postDrawingDwfRequest)

Export an existing drawing to Dwf format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingdwfasync"></a>
# **postDrawingDwfAsync**
> postDrawingDwfAsync($postDrawingDwfRequest)

Export an existing drawing to Dwf format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingDwfRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\DwfOptionsDTO**](DwfOptionsDTO.md)| Export Dwf options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingfbx"></a>
# **postDrawingFbx**
> postDrawingFbx($postDrawingFbxRequest)

Export an existing drawing to Fbx format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingfbxasync"></a>
# **postDrawingFbxAsync**
> postDrawingFbxAsync($postDrawingFbxRequest)

Export an existing drawing to Fbx format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingFbxRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\FbxOptionsDTO**](FbxOptionsDTO.md)| Export Fbx options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawinggif"></a>
# **postDrawingGif**
> postDrawingGif($postDrawingGifRequest)

Export an existing drawing into GIF format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawinggifasync"></a>
# **postDrawingGifAsync**
> postDrawingGifAsync($postDrawingGifRequest)

Export an existing drawing into GIF format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingGifRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\GifOptionsDTO**](GifOptionsDTO.md)| Export GIF options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingglb"></a>
# **postDrawingGlb**
> postDrawingGlb($postDrawingGlbRequest)

Export an existing drawing to GLB format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingglbasync"></a>
# **postDrawingGlbAsync**
> postDrawingGlbAsync($postDrawingGlbRequest)

Export an existing drawing to GLB format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingGlbRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\GlbOptionsDTO**](GlbOptionsDTO.md)| Export GLB options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawinggltf"></a>
# **postDrawingGltf**
> postDrawingGltf($postDrawingGltfRequest)

Export an existing drawing to GLTF format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawinggltfasync"></a>
# **postDrawingGltfAsync**
> postDrawingGltfAsync($postDrawingGltfRequest)

Export an existing drawing to GLTF format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingGltfRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\GltfOptionsDTO**](GltfOptionsDTO.md)| Export GLTF options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingjpeg"></a>
# **postDrawingJpeg**
> postDrawingJpeg($postDrawingJpegRequest)

Export an existing drawing into JPEG format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingjpegasync"></a>
# **postDrawingJpegAsync**
> postDrawingJpegAsync($postDrawingJpegRequest)

Export an existing drawing into JPEG format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingJpegRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\JpegOptionsDTO**](JpegOptionsDTO.md)| Export JPEG options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingjpeg2000"></a>
# **postDrawingJpeg2000**
> postDrawingJpeg2000($postDrawingJpeg2000Request)

Export an existing drawing into JPEG2000 format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingjpeg2000async"></a>
# **postDrawingJpeg2000Async**
> postDrawingJpeg2000Async($postDrawingJpeg2000Request)

Export an existing drawing into JPEG2000 format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingJpeg2000Request** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\Jpeg2000OptionsDTO**](Jpeg2000OptionsDTO.md)| Export JPEG2000 options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingobj"></a>
# **postDrawingObj**
> postDrawingObj($postDrawingObjRequest)

Export an existing drawing to Obj format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingobjasync"></a>
# **postDrawingObjAsync**
> postDrawingObjAsync($postDrawingObjRequest)

Export an existing drawing to Obj format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingObjRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\ObjOptionsDTO**](ObjOptionsDTO.md)| Export Obj options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingpdf"></a>
# **postDrawingPdf**
> postDrawingPdf($postDrawingPdfRequest)

Export an existing drawing to PDF format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingpdfasync"></a>
# **postDrawingPdfAsync**
> postDrawingPdfAsync($postDrawingPdfRequest)

Export an existing drawing to PDF format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingPdfRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\PdfOptionsDTO**](PdfOptionsDTO.md)| Export PDF options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingpng"></a>
# **postDrawingPng**
> postDrawingPng($postDrawingPngRequest)

Export an existing drawing into PNG format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingpngasync"></a>
# **postDrawingPngAsync**
> postDrawingPngAsync($postDrawingPngRequest)

Export an existing drawing into PNG format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingPngRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\PngOptionsDTO**](PngOptionsDTO.md)| Export PNG options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingproperties"></a>
# **postDrawingProperties**
> postDrawingProperties($postDrawingPropertiesRequest)

Retrieves info about drawing which is passed as a zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\CAD\Model\CadResponse**](CadResponse.md)

<a name="postdrawingpropertiesasync"></a>
# **postDrawingPropertiesAsync**
> postDrawingPropertiesAsync($postDrawingPropertiesRequest)

Retrieves info about drawing which is passed as a zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingPropertiesRequest** Parameters
```php
__construct(
    $drawing_data)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingpsd"></a>
# **postDrawingPsd**
> postDrawingPsd($postDrawingPsdRequest)

Export an existing drawing into PSD format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingpsdasync"></a>
# **postDrawingPsdAsync**
> postDrawingPsdAsync($postDrawingPsdRequest)

Export an existing drawing into PSD format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingPsdRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\PsdOptionsDTO**](PsdOptionsDTO.md)| Export PSD options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingresize"></a>
# **postDrawingResize**
> postDrawingResize($postDrawingResizeRequest)

Resize a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingresizeasync"></a>
# **postDrawingResizeAsync**
> postDrawingResizeAsync($postDrawingResizeRequest)

Resize a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingResizeRequest** Parameters
```php
__construct(
    $drawing_data, 
    $output_format, 
    $new_width, 
    $new_height, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **output_format** | **string**| Resulting file format. |
 **new_width** | **int**| New width. |
 **new_height** | **int**| New height. |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingrotateflip"></a>
# **postDrawingRotateFlip**
> postDrawingRotateFlip($postDrawingRotateFlipRequest)

Rotate/flip a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingrotateflipasync"></a>
# **postDrawingRotateFlipAsync**
> postDrawingRotateFlipAsync($postDrawingRotateFlipRequest)

Rotate/flip a drawing. Drawing data is passed as a zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingRotateFlipRequest** Parameters
```php
__construct(
    $drawing_data, 
    $output_format, 
    $rotate_flip_type, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **output_format** | **string**| Resulting file format. |
 **rotate_flip_type** | **string**| Rotate/flip operation to apply. Possible values: RotateNoneFlipNone, Rotate90FlipNone, Rotate180FlipNone, Rotate270FlipNone, RotateNoneFlipX, Rotate90FlipX, Rotate180FlipX, Rotate270FlipX, RotateNoneFlipY, Rotate90FlipY, Rotate180FlipY, Rotate270FlipY, RotateNoneFlipXY, Rotate90FlipXY, Rotate180FlipXY, Rotate270FlipXY |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingstp"></a>
# **postDrawingSTP**
> postDrawingSTP($postDrawingSTPRequest)

Export an existing drawing to STP format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingstpasync"></a>
# **postDrawingSTPAsync**
> postDrawingSTPAsync($postDrawingSTPRequest)

Export an existing drawing to STP format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingSTPRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\StpOptionsDTO**](StpOptionsDTO.md)| Export STP options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingsaveas"></a>
# **postDrawingSaveAs**
> postDrawingSaveAs($postDrawingSaveAsRequest)

Export existing drawing to another format. Drawing data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingsaveasasync"></a>
# **postDrawingSaveAsAsync**
> postDrawingSaveAsAsync($postDrawingSaveAsRequest)

Export existing drawing to another format. Drawing data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingSaveAsRequest** Parameters
```php
__construct(
    $drawing_data, 
    $output_format, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **output_format** | **string**| Resulting file format. |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingsvg"></a>
# **postDrawingSvg**
> postDrawingSvg($postDrawingSvgRequest)

Export an existing drawing to SVG format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingsvgasync"></a>
# **postDrawingSvgAsync**
> postDrawingSvgAsync($postDrawingSvgRequest)

Export an existing drawing to SVG format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingSvgRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\SvgOptionsDTO**](SvgOptionsDTO.md)| Export SVG options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingthreeds"></a>
# **postDrawingThreeDS**
> postDrawingThreeDS($postDrawingThreeDSRequest)

Export an existing drawing to 3ds format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingthreedsasync"></a>
# **postDrawingThreeDSAsync**
> postDrawingThreeDSAsync($postDrawingThreeDSRequest)

Export an existing drawing to 3ds format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingThreeDSRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\ThreeDSOptionsDTO**](ThreeDSOptionsDTO.md)| Export 3ds options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingtiff"></a>
# **postDrawingTiff**
> postDrawingTiff($postDrawingTiffRequest)

Export an existing drawing into TIFF format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingtiffasync"></a>
# **postDrawingTiffAsync**
> postDrawingTiffAsync($postDrawingTiffRequest)

Export an existing drawing into TIFF format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingTiffRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\TiffOptionsDTO**](TiffOptionsDTO.md)| Export TIFF options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingu3d"></a>
# **postDrawingU3d**
> postDrawingU3d($postDrawingU3dRequest)

Export an existing drawing to U3d format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingu3dasync"></a>
# **postDrawingU3dAsync**
> postDrawingU3dAsync($postDrawingU3dRequest)

Export an existing drawing to U3d format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingU3dRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\U3dOptionsDTO**](U3dOptionsDTO.md)| Export U3d options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingwebp"></a>
# **postDrawingWebp**
> postDrawingWebp($postDrawingWebpRequest)

Export an existing drawing to Webp format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingwebpasync"></a>
# **postDrawingWebpAsync**
> postDrawingWebpAsync($postDrawingWebpRequest)

Export an existing drawing to Webp format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingWebpRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\WebpOptionsDTO**](WebpOptionsDTO.md)| Export Webp options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="postdrawingwmf"></a>
# **postDrawingWmf**
> postDrawingWmf($postDrawingWmfRequest)

Export an existing drawing to WMF format with export settings specified.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="postdrawingwmfasync"></a>
# **postDrawingWmfAsync**
> postDrawingWmfAsync($postDrawingWmfRequest)

Export an existing drawing to WMF format with export settings specified.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PostDrawingWmfRequest** Parameters
```php
__construct(
    $name, 
    $options, 
    $folder, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an input drawing on a storage. |
 **options** | [**\Aspose\CAD\Model\WmfOptionsDTO**](WmfOptionsDTO.md)| Export WMF options passed as a JSON on a request body. |
 **folder** | **string**| Folder with a drawing to process. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingbmp"></a>
# **putDrawingBmp**
> putDrawingBmp($putDrawingBmpRequest)

Export drawing to BMP format. Drawing data is passed as zero-indexed multipart/form-data as well as export BMP options serialized as JSON. Order of drawing data and BMP options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingbmpasync"></a>
# **putDrawingBmpAsync**
> putDrawingBmpAsync($putDrawingBmpRequest)

Export drawing to BMP format. Drawing data is passed as zero-indexed multipart/form-data as well as export BMP options serialized as JSON. Order of drawing data and BMP options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingBmpRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/BmpOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingcgm"></a>
# **putDrawingCgm**
> putDrawingCgm($putDrawingCgmRequest)

Export drawing to CGM format. Drawing data is passed as zero-indexed multipart/form-data as well as export CGM options serialized as JSON. Order of drawing data and CGM options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingcgmasync"></a>
# **putDrawingCgmAsync**
> putDrawingCgmAsync($putDrawingCgmRequest)

Export drawing to CGM format. Drawing data is passed as zero-indexed multipart/form-data as well as export CGM options serialized as JSON. Order of drawing data and CGM options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingCgmRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/CgmOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingdxf"></a>
# **putDrawingDXF**
> putDrawingDXF($putDrawingDXFRequest)

Export drawing to DXF format. Drawing data is passed as zero-indexed multipart/form-data as well as export DXF options serialized as JSON. Order of drawing data and DXF options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingdxfasync"></a>
# **putDrawingDXFAsync**
> putDrawingDXFAsync($putDrawingDXFRequest)

Export drawing to DXF format. Drawing data is passed as zero-indexed multipart/form-data as well as export DXF options serialized as JSON. Order of drawing data and DXF options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingDXFRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/DxfOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingdicom"></a>
# **putDrawingDicom**
> putDrawingDicom($putDrawingDicomRequest)

Export drawing to Dicom format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dicom options serialized as JSON. Order of drawing data and Dicom options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingdicomasync"></a>
# **putDrawingDicomAsync**
> putDrawingDicomAsync($putDrawingDicomRequest)

Export drawing to Dicom format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dicom options serialized as JSON. Order of drawing data and Dicom options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingDicomRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/DicomOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingdraco"></a>
# **putDrawingDraco**
> putDrawingDraco($putDrawingDracoRequest)

Export drawing to Draco format. Drawing data is passed as zero-indexed multipart/form-data as well as export Draco options serialized as JSON. Order of drawing data and Draco options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingdracoasync"></a>
# **putDrawingDracoAsync**
> putDrawingDracoAsync($putDrawingDracoRequest)

Export drawing to Draco format. Drawing data is passed as zero-indexed multipart/form-data as well as export Draco options serialized as JSON. Order of drawing data and Draco options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingDracoRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/DracoOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingdwf"></a>
# **putDrawingDwf**
> putDrawingDwf($putDrawingDwfRequest)

Export drawing to Dwf format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dwf options serialized as JSON. Order of drawing data and Dwf options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingdwfasync"></a>
# **putDrawingDwfAsync**
> putDrawingDwfAsync($putDrawingDwfRequest)

Export drawing to Dwf format. Drawing data is passed as zero-indexed multipart/form-data as well as export Dwf options serialized as JSON. Order of drawing data and Dwf options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingDwfRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/DwfOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingfbx"></a>
# **putDrawingFbx**
> putDrawingFbx($putDrawingFbxRequest)

Export drawing to Fbx format. Drawing data is passed as zero-indexed multipart/form-data as well as export Fbx options serialized as JSON. Order of drawing data and Fbx options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingfbxasync"></a>
# **putDrawingFbxAsync**
> putDrawingFbxAsync($putDrawingFbxRequest)

Export drawing to Fbx format. Drawing data is passed as zero-indexed multipart/form-data as well as export Fbx options serialized as JSON. Order of drawing data and Fbx options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingFbxRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/FbxOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawinggif"></a>
# **putDrawingGif**
> putDrawingGif($putDrawingGifRequest)

Export drawing to GIF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GIF options serialized as JSON. Order of drawing data and GIF options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawinggifasync"></a>
# **putDrawingGifAsync**
> putDrawingGifAsync($putDrawingGifRequest)

Export drawing to GIF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GIF options serialized as JSON. Order of drawing data and GIF options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingGifRequest** Parameters
```php
__construct(
    $drawing_data, 
    $export_options, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/GifOptionsDTO model definition. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingglb"></a>
# **putDrawingGlb**
> putDrawingGlb($putDrawingGlbRequest)

Export drawing to GLB format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLB options serialized as JSON. Order of drawing data and GLB options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingglbasync"></a>
# **putDrawingGlbAsync**
> putDrawingGlbAsync($putDrawingGlbRequest)

Export drawing to GLB format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLB options serialized as JSON. Order of drawing data and GLB options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingGlbRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/GlbOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawinggltf"></a>
# **putDrawingGltf**
> putDrawingGltf($putDrawingGltfRequest)

Export drawing to GLTF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLTF options serialized as JSON. Order of drawing data and GLTF options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawinggltfasync"></a>
# **putDrawingGltfAsync**
> putDrawingGltfAsync($putDrawingGltfRequest)

Export drawing to GLTF format. Drawing data is passed as zero-indexed multipart/form-data as well as export GLTF options serialized as JSON. Order of drawing data and GLTF options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingGltfRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/GltfOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingjpeg"></a>
# **putDrawingJpeg**
> putDrawingJpeg($putDrawingJpegRequest)

Export drawing to JPEG format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG options serialized as JSON. Order of drawing data and JPEG options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingjpegasync"></a>
# **putDrawingJpegAsync**
> putDrawingJpegAsync($putDrawingJpegRequest)

Export drawing to JPEG format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG options serialized as JSON. Order of drawing data and JPEG options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingJpegRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/JpegOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingjpeg2000"></a>
# **putDrawingJpeg2000**
> putDrawingJpeg2000($putDrawingJpeg2000Request)

Export drawing to JPEG2000 format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG2000 options serialized as JSON. Order of drawing data and JPEG2000 options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingjpeg2000async"></a>
# **putDrawingJpeg2000Async**
> putDrawingJpeg2000Async($putDrawingJpeg2000Request)

Export drawing to JPEG2000 format. Drawing data is passed as zero-indexed multipart/form-data as well as export JPEG2000 options serialized as JSON. Order of drawing data and JPEG2000 options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingJpeg2000Request** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/Jpeg2000OptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingobj"></a>
# **putDrawingObj**
> putDrawingObj($putDrawingObjRequest)

Export drawing to Obj format. Drawing data is passed as zero-indexed multipart/form-data as well as export Obj options serialized as JSON. Order of drawing data and Obj options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingobjasync"></a>
# **putDrawingObjAsync**
> putDrawingObjAsync($putDrawingObjRequest)

Export drawing to Obj format. Drawing data is passed as zero-indexed multipart/form-data as well as export Obj options serialized as JSON. Order of drawing data and Obj options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingObjRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/ObjOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingpdf"></a>
# **putDrawingPdf**
> putDrawingPdf($putDrawingPdfRequest)

Export drawing to PDF format. Drawing data is passed as zero-indexed multipart/form-data as well as export PDF options serialized as JSON. Order of drawing data and PDF options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingpdfasync"></a>
# **putDrawingPdfAsync**
> putDrawingPdfAsync($putDrawingPdfRequest)

Export drawing to PDF format. Drawing data is passed as zero-indexed multipart/form-data as well as export PDF options serialized as JSON. Order of drawing data and PDF options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingPdfRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/PdfOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingpng"></a>
# **putDrawingPng**
> putDrawingPng($putDrawingPngRequest)

Export drawing to PNG format. Drawing data is passed as zero-indexed multipart/form-data as well as export PNG options serialized as JSON. Order of drawing data and PNG options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingpngasync"></a>
# **putDrawingPngAsync**
> putDrawingPngAsync($putDrawingPngRequest)

Export drawing to PNG format. Drawing data is passed as zero-indexed multipart/form-data as well as export PNG options serialized as JSON. Order of drawing data and PNG options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingPngRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/PngOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingpsd"></a>
# **putDrawingPsd**
> putDrawingPsd($putDrawingPsdRequest)

Export drawing to PSD format. Drawing data is passed as zero-indexed multipart/form-data as well as export PSD options serialized as JSON. Order of drawing data and PSD options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingpsdasync"></a>
# **putDrawingPsdAsync**
> putDrawingPsdAsync($putDrawingPsdRequest)

Export drawing to PSD format. Drawing data is passed as zero-indexed multipart/form-data as well as export PSD options serialized as JSON. Order of drawing data and PSD options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingPsdRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/PsdOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingstp"></a>
# **putDrawingSTP**
> putDrawingSTP($putDrawingSTPRequest)

Export drawing to Stp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Stp options serialized as JSON. Order of drawing data and Stp options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingstpasync"></a>
# **putDrawingSTPAsync**
> putDrawingSTPAsync($putDrawingSTPRequest)

Export drawing to Stp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Stp options serialized as JSON. Order of drawing data and Stp options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingSTPRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/StpOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingsvg"></a>
# **putDrawingSvg**
> putDrawingSvg($putDrawingSvgRequest)

Export drawing to SVG format. Drawing data is passed as zero-indexed multipart/form-data as well as export SVG options serialized as JSON. Order of drawing data and SVG options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingsvgasync"></a>
# **putDrawingSvgAsync**
> putDrawingSvgAsync($putDrawingSvgRequest)

Export drawing to SVG format. Drawing data is passed as zero-indexed multipart/form-data as well as export SVG options serialized as JSON. Order of drawing data and SVG options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingSvgRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/SvgOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingthreeds"></a>
# **putDrawingThreeDS**
> putDrawingThreeDS($putDrawingThreeDSRequest)

Export drawing to 3ds format. Drawing data is passed as zero-indexed multipart/form-data as well as export 3ds options serialized as JSON. Order of drawing data and 3ds options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingthreedsasync"></a>
# **putDrawingThreeDSAsync**
> putDrawingThreeDSAsync($putDrawingThreeDSRequest)

Export drawing to 3ds format. Drawing data is passed as zero-indexed multipart/form-data as well as export 3ds options serialized as JSON. Order of drawing data and 3ds options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingThreeDSRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/ThreeDSOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingtiff"></a>
# **putDrawingTiff**
> putDrawingTiff($putDrawingTiffRequest)

Export drawing to TIFF format. Drawing data is passed as zero-indexed multipart/form-data as well as export TIFF options serialized as JSON. Order of drawing data and TIFF options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingtiffasync"></a>
# **putDrawingTiffAsync**
> putDrawingTiffAsync($putDrawingTiffRequest)

Export drawing to TIFF format. Drawing data is passed as zero-indexed multipart/form-data as well as export TIFF options serialized as JSON. Order of drawing data and TIFF options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingTiffRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/TiffOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingu3d"></a>
# **putDrawingU3d**
> putDrawingU3d($putDrawingU3dRequest)

Export drawing to U3d format. Drawing data is passed as zero-indexed multipart/form-data as well as export U3d options serialized as JSON. Order of drawing data and U3d options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingu3dasync"></a>
# **putDrawingU3dAsync**
> putDrawingU3dAsync($putDrawingU3dRequest)

Export drawing to U3d format. Drawing data is passed as zero-indexed multipart/form-data as well as export U3d options serialized as JSON. Order of drawing data and U3d options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingU3dRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/U3dOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingwebp"></a>
# **putDrawingWebp**
> putDrawingWebp($putDrawingWebpRequest)

Export drawing to Webp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Webp options serialized as JSON. Order of drawing data and Webp options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingwebpasync"></a>
# **putDrawingWebpAsync**
> putDrawingWebpAsync($putDrawingWebpRequest)

Export drawing to Webp format. Drawing data is passed as zero-indexed multipart/form-data as well as export Webp options serialized as JSON. Order of drawing data and Webp options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingWebpRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/WebpOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="putdrawingwmf"></a>
# **putDrawingWmf**
> putDrawingWmf($putDrawingWmfRequest)

Export drawing to WMF format. Drawing data is passed as zero-indexed multipart/form-data as well as export WMF options serialized as JSON. Order of drawing data and WMF options could vary.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="putdrawingwmfasync"></a>
# **putDrawingWmfAsync**
> putDrawingWmfAsync($putDrawingWmfRequest)

Export drawing to WMF format. Drawing data is passed as zero-indexed multipart/form-data as well as export WMF options serialized as JSON. Order of drawing data and WMF options could vary.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutDrawingWmfRequest** Parameters
```php
__construct(
    $drawing_data, 
    $out_path, 
    $export_options, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed file). | [optional]
 **export_options** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/WmfOptionsDTO model definition. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="puteditmetadata"></a>
# **putEditMetadata**
> putEditMetadata($putEditMetadataRequest)

Save Metadata

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="puteditmetadataasync"></a>
# **putEditMetadataAsync**
> putEditMetadataAsync($putEditMetadataRequest)

Save Metadata

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **PutEditMetadataRequest** Parameters
```php
__construct(
    $drawing_data, 
    $metadata_component)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **metadata_component** | **string**| Metadata string json from POST/EditMetadata |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="storageexists"></a>
# **storageExists**
> storageExists($storageExistsRequest)

Check if storage exists

### Return type

[**\Aspose\CAD\Model\StorageExist**](StorageExist.md)

<a name="storageexistsasync"></a>
# **storageExistsAsync**
> storageExistsAsync($storageExistsRequest)

Check if storage exists

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **StorageExistsRequest** Parameters
```php
__construct(
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="uploadfile"></a>
# **uploadFile**
> uploadFile($uploadFileRequest)

Upload file

### Return type

[**\Aspose\CAD\Model\FilesUploadResult**](FilesUploadResult.md)

<a name="uploadfileasync"></a>
# **uploadFileAsync**
> uploadFileAsync($uploadFileRequest)

Upload file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **UploadFileRequest** Parameters
```php
__construct(
    $path, 
    $file, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. |
 **file** | **string**| File to upload |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="viewer"></a>
# **viewer**
> viewer($viewerRequest)

Return file for viewer

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="viewerasync"></a>
# **viewerAsync**
> viewerAsync($viewerRequest)

Return file for viewer

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ViewerRequest** Parameters
```php
__construct(
    $output_format, 
    $drawing)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **output_format** | **string**|  |
 **drawing** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="watermark"></a>
# **watermark**
> watermark($watermarkRequest)

Add watermark to drawing

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="watermarkasync"></a>
# **watermarkAsync**
> watermarkAsync($watermarkRequest)

Add watermark to drawing

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **WatermarkRequest** Parameters
```php
__construct(
    $drawing_data, 
    $output_format, 
    $watermark, 
    $output_type_ext)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drawing_data** | **string**| Input drawing |
 **output_format** | **string**|  |
 **watermark** | **string**| JSON-serialized export options passed as zero-indexed multipart/form-data. Follow #/definitions/WatermarkRGB model definition. |
 **output_type_ext** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)



