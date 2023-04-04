<?php
require "../../../vendor/autoload.php";
//folder untuk simpan
$storage = new \Upload\Storage\FileSystem('gambar/');
$file = new \Upload\File('foo', $storage);

// Optionally you can rename the file on upload
$new_filename = "foto".uniqid();
$file->setName($new_filename);

// Validate file upload
// MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
$file->addValidations(array(
    // Ensure file is of type "image/png"
    new \Upload\Validation\Mimetype(array('image/png','image/gif')),

    //You can also add multi mimetype validation
    //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))

    // Ensure file is no larger than 5M (use "B", "K", M", or "G")
    new \Upload\Validation\Size('10M')
));

// Access data about the file that has been uploaded
$data = array(
    'name'       => $file->getNameWithExtension(),
    'extension'  => $file->getExtension(),
    'mime'       => $file->getMimetype(),
    'size'       => $file->getSize(),
    'md5'        => $file->getMd5(),
    'dimensions' => $file->getDimensions()
);

// Try to upload file
try {
    //lakukan tulis file

    // Success!
    $file->upload();
    //lakukan baca file

    echo "sukses upload file".$data['name'];
    echo "<img src='gambar/".$data['name']."'/>";
}catch (\Exception $e) {
    // Fail!
    $errors = $file->getErrors();
    die("tes");
}