
<?php
    include('../component/imageLib.php');
    if (isset($_POST['timeline'])) {
        $title = $_POST['title'];
        $year = $_POST['year'];
        $content = $_POST['content'];

        if(isset($_FILES['timeline_image1']) && file_exists($_FILES['timeline_image1']['tmp_name'])) {
            // replaceImage('../../images', $_FILES['timeline_image1'], 'bride.png');
            // moveImageWithName('../../images', $_FILES['timeline_image1'], 'bride.png');
            $image1 = moveImage('../../images', $_FILES['timeline_image1']);
        } 
        if(isset($_FILES['timeline_image2']) && file_exists($_FILES['timeline_image2']['tmp_name'])) {
            // replaceImage('../../images', $_FILES['timeline_image2'], 'groom.png');
            // moveImageWithName('../../images', $_FILES['timeline_image2'], 'groom.png');
            $image2 = moveImage('../../images', $_FILES['timeline_image2']);
        }
        if(isset($_FILES['timeline_image3']) && file_exists($_FILES['timeline_image3']['tmp_name'])) {
            // replaceImage('../../images', $_FILES['timeline_image2'], 'groom.png');
            // moveImageWithName('../../images', $_FILES['timeline_image2'], 'groom.png');
            $image3 = moveImage('../../images', $_FILES['timeline_image3']);
        }

        if ($editMode)  {
            $check_database = $connect->prepare("SELECT * FROM timeline WHERE id=?");
            $check_database -> execute([$_POST['timeline_id']]);
        
            $data = array();
            if ($check_database->rowCount() > 0) {
                $data = $check_database->fetch(PDO::FETCH_ASSOC);
            } 

            if (empty($image1)) {
                $image1 = $data['imageA'];
            } else {
                deleteImage('../../images', $data['imageA']);
            }
            if (empty($image2)) {
                $image2 = $data['imageB'];
            } else {
                deleteImage('../../images', $data['imageB']);
            }
            if (empty($image3)) {
                $image3 = $data['imageC'];
            } else {
                deleteImage('../../images', $data['imageC']);
            }

            $query = "UPDATE timeline SET title = ?, year = ?, content = ?, imageA = ?, imageB = ?, imageC = ? WHERE id = ?";
            $update = $connect->prepare($query);
            $update->execute([$title, $year, $content, $image1, $image2, $image3, $editId]);
               
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Data has been updated successfully!',
                }).then(function(){
                    window.location = `timeline.php?edit=<?=$editId?>`;
                });
            </script>
            <?php

        } else {
            if (empty($image1)) {
                $image1 = '';
            }
            if (empty($image2)) {
                $image2 = '';
            }
            if (empty($image3)) {
                $image3 = '';
            }
            $query = "INSERT INTO timeline (`title`, `year`, `content`, `imageA`, `imageB`, `imageC`) VALUES (?,?,?,?,?,?)";
            $update = $connect->prepare($query);
            $update->execute([$title, $year, $content, $image1, $image2, $image3]);

            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Data has been inserted successfully!',
                }).then(function(){
                    window.location = "timelineTable.php";
                });
            </script>
            <?php
        }
        
    }
    
?>
