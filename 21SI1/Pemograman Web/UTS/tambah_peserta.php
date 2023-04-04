<?php
require '../../../vendor/autoload.php';

$storage = new \Upload\Storage\FileSystem('gambar/');
$file = new \Upload\File('foo', $storage);

// Optionally you can rename the file on upload
// $new_filename = uniqid();
// $file->setName($new_filename);

// Validate file upload
// MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
$file->addValidations(array(
    // Ensure file is of type "image/png"
    // new \Upload\Validation\Mimetype('image/png'),

    //You can also add multi mimetype validation
    new \Upload\Validation\Mimetype(array('image/png', 'image/jpg')),

    // Ensure file is no larger than 5M (use "B", "K", M", or "G")
    new \Upload\Validation\Size('5M')
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
    // Success!
    $file->upload();

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $data_registrasi = $username.";".$nama.";".$email.";".$gender.";".$alamat.";".$data['name']; 
    file_put_contents("data_peserta_seminar.txt", $data_registrasi);

    $isi_file = file("daftar_peserta_seminar.txt");

    echo"
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
            <style>
                table, td{
                    padding: 5px;
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                img{
                    width: 80px;
                    height: 80px;
                }
            </style>
        </head>
        <body> 
            <h1>Data User</h1>
            <hr/>
        <table>";

        foreach($isi_file as $key => $value){
            $data_file = explode(";", $value);
        }

        echo"<tr>
                <td>Username</td>
                <td>$data_file[0]</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>$data_file[1]</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$data_file[2]</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>$data_file[3]</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>$data_file[4]</td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><img src='gambar/$data_file[5]'></td>
            </tr>
        </table> 
        <a href= 'form.php' >Kembali ke Registrasi</a>
    </body>
    </html>";

} catch (\Exception $e) {
    // Fail!
    $errors = $file->getErrors();
}