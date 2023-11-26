<?php
    function moveImage($location, $image) {
        $foto = $image["tmp_name"];     
        $targetDirectory = $location . '/';
        $extension = pathinfo($image["name"], PATHINFO_EXTENSION);
        $newFileName = uniqid() . "." . $extension;
        $targetFile = $targetDirectory . $newFileName;
        if (compressImage($foto, $targetFile, 75)) {
            return $newFileName;
        } 
        return $newFileName;
    }

    function moveImageWithName($location, $image, $imageName) {
        $foto = $image["tmp_name"];     
        $targetDirectory = $location . '/';
        $newFileName = $imageName;
        $targetFile = $targetDirectory . $newFileName;
        if (compressImage($foto, $targetFile, 75)) {
            return true;
        } 
        var_dump('fail');
        return true;
    }

    function deleteImage($location, $imageName) {
        $path = $location . "/" . $imageName;
        if(file_exists($path)) if (unlink($path)) return true;
        return false;
    }

    function compressImage($image, $destination, $quality) {
        if(isset($image["tmp_name"])) $image= $image["tmp_name"];
        $info = getimagesize($image);
        if ($info['mime'] == 'image/jpeg') 
          $image = imagecreatefromjpeg($image);  
        elseif ($info['mime'] == 'image/gif') 
          $image = imagecreatefromgif($image);
        elseif ($info['mime'] == 'image/png') 
          $image = @imagecreatefrompng($image);
          imagealphablending($image, false);
          imagesavealpha($image, true);
        if ($info['mime'] == 'image/png') {
          if (imagepng($image, $destination, round(9 * $quality / 100))) {
            return true;
          }
        } else {
            if (imagejpeg($image, $destination, $quality)) {
              return true;
          }
        }
        return false;
    }

    function replaceImage($location, $newImage, $oldImageName) {
        try {
            deleteImage($location, $oldImageName);
            moveImageWithName($location, $newImage, $oldImageName);
            return true;
        }
        catch(Exception) {
            return false;
        }
    }
?>