<?php 

    $editMode = false;
    if(isset($_GET['edit']) && !empty($_GET['edit'])) {
        $editId = $_GET['edit'];
        $editMode = true;

        $check_database = $connect->prepare("SELECT * FROM wishlist where id=$editId");
        $check_database -> execute();
    
        $data = array();
        if ($check_database->rowCount() > 0) {
            $data = $check_database->fetch(PDO::FETCH_ASSOC);
        } 
    }

    $readonly = $editMode ? '' : 'readonly';
    
    
    include 'wishlistAddEdit.php';

?>

<style>
    .yellow {
        background-image: linear-gradient(to right, #FAD983 0%, #FAD983 100%);

    }
    .black {
        color: black;
    }
</style>

<div class="row justify-content-center">
        <div class="card shadow mb-4 w-75">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-0 text-gray-800 ">Prize Form</h1>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <?php
                            if($editMode) {
                                echo "<input type='hidden' name='wishlist_id' id='wishlist_id' value='$editId'>";
                            }
                        ?>
                        <div class="data-wishlist" id="additionalWishlist">
                        <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="item">Item Name</label>
                                    <input required  name="item" type="text" class="form-control" id="item"    value="<?php echo isset($data['item']) ? $data['item'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter item name
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="detail">Details</label>
                                    <!-- <input required  name="inv_title" detailpe="text" class="form-control" id="inv_title"   > -->
                                    <textarea name="detail" class="form-control" id="detail" rows="4"  ><?= isset($data['detail']) ? $data['detail'] : ''; ?></textarea>
                                    <div class="invalid-feedback">
                                        Please enter Detail
                                    </div>
                                </div>
                            </div>
                        </div>
                            <input type="submit" class="btn btn-primary yellow black mt-5" style="border:none" value="<?php echo !$editMode ? 'Add' : 'Edit'; ?>" name="wishlist" id="wishlist">

                            </form>
                        </div>
                    </div>

    </div>

    <script>

    (function() {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });

    })();
</script>
<script src="../component/js/updateImage.js"></script>





    