
<?php
    if (isset($_POST['wishlist'])) {
        // If it's in edit mode, update the record; otherwise, insert a new record
        if ($editMode) {
            $query = "UPDATE wishlist SET item=?, detail=? WHERE id=?";
            $update = $connect->prepare($query);
            $update->execute([$_POST['item'], $_POST['detail'], $_POST['wishlist_id']]);
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Data has been updated successfully!',
                }).then(function(){
                    window.location = `wishlistTable.php`;
                });
            </script>
            <?php
        } else {
            $query = "INSERT INTO wishlist (`item`, `detail`) VALUES (?,?)";
            $update = $connect->prepare($query);
            $update->execute([$_POST['item'], $_POST['detail']]);
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Data has been inserted successfully!',
                }).then(function(){
                    window.location = "wishlistTable.php";
                });
            </script>
            <?php
        }
    }
    // if (isset($_POST['wishlist'])) {
    //     if ($editMode)  {
    //         $check_database = $connect->prepare("SELECT * FROM wishlist WHERE id=?");
    //         $check_database -> execute([$_POST['wishlist_id']]);
        
    //         $data = array();
    //         if ($check_database->rowCount() > 0) {
    //             $data = $check_database->fetch(PDO::FETCH_ASSOC);
    //         } 

    //         $query = "UPDATE wishlist SET item = ?, detail = ? WHERE id = ?";
    //         $update = $connect->prepare($query);
    //         $update->execute([$_POST['item'], $_POST['detail'], $_POST['wishlist_id']]);
               
    //         ?
    //         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    //         <script>
    //             Swal.fire({
    //                 icon:'success',
    //                 title:'Data has been updated successfully!',
    //             }).then(function(){
    //                 window.location = `wishlistTable.php`;
    //             });
    //         </script>
    //         <?php

    //     } else {

    //         // $query = "INSERT INTO wishlist (`item`, `detail`) VALUES (?,?)";
    //         // $update = $connect->prepare($query);
    //         // $update->execute([$_POST['item'], $_POST['detail']]);

    //         ?
    //         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    //         <script>
    //             Swal.fire({
    //                 icon:'success',
    //                 title:'Data has been inserted successfully!',
    //             }).then(function(){
    //                 window.location = "wishlistTable.php";
    //             });
    //         </script>
    //         <?php
    //     }
        
    // }
    
?>
