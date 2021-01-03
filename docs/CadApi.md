# Aspose\CAD\CadApi

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



