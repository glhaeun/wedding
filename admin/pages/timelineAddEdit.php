
<?php
    if (isset($_POST['timeline'])) {
        $title = $_POST['title'];
        $year = $_POST['year'];
        $content = $_POST['content'];

        if(isset($_FILES['timeline_image1']) && file_exists($_FILES['timeline_image1']['tmp_name'])) {
            // replaceImage('../../images', $_FILES['timeline_image1'], 'bride.png');
            moveImageWithName('../../images', $_FILES['timeline_image1'], 'bride.png');
        }
        if(isset($_FILES['timeline_image2']) && file_exists($_FILES['timeline_image2']['tmp_name'])) {
            // replaceImage('../../images', $_FILES['timeline_image2'], 'groom.png');
            moveImageWithName('../../images', $_FILES['timeline_image2'], 'groom.png');
        }
        if(isset($_FILES['timeline_image2']) && file_exists($_FILES['timeline_image2']['tmp_name'])) {
            // replaceImage('../../images', $_FILES['timeline_image2'], 'groom.png');
            moveImageWithName('../../images', $_FILES['timeline_image2'], 'groom.png');
        }

        if ($editMode)  {
            $query = "UPDATE timeline SET title = ?, year = ?, content = ?, imageA =?, imageB = ?, imageC =? WHERE id = ?";
            $update = $connect->prepare($query);
            $update->execute([$title, $year, $content, $editId]);
               
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
            $query = "INSERT INTO timeline (`title`, `year`, `content`) VALUES (?,?,?)";
            $update = $connect->prepare($query);
            $update->execute([$title, $year, $content]);

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
