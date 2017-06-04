
<form method="post" enctype="multipart/form-data">
    Select .txt file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
if(isset($_POST["submit"])) {
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Selline fail juba olemas.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sinu fail on liiga suur.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "txt" && $imageFileType != "docx" && $imageFileType != "odt" && $imageFileType != "doc") {
    echo "Ainult TXT, DOC, DOCX ja ODT formaadid on lubatud.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Fail ei ole allalaaditud.";
// if everything is ok, try to upload file
} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         $files = scandir($target_dir);
        $num_files = count($files)-2;
        echo "On laaditud <strong>".$num_files. "</strong> faile";
    } else {
        echo " Tekkis viga, fail ei ole laetud. ";
    }
}
unset($_FILES["fileToUpload"]);
?>
