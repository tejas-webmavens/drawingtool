<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])||isset($_POST['submitbutton'])) {
    $check = getimagesize($_FILES["upload_file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $target_file)) {
    	header('Location: http://localhost/drawingtool/editimage.php?bgUrl=http://localhost/drawingtool/'.$target_file);
    	die();
        echo "The file ". basename( $_FILES["upload_file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="upload_file">
	<button type="submit" name="submit"> Upload Image </button>
</form>