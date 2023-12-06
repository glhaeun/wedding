<?php 

    $editMode = false;
    if(isset($_GET['edit']) && !empty($_GET['edit'])) {
        $editId = $_GET['edit'];
        $editMode = true;

        $check_database = $connect->prepare("SELECT * FROM prize where id=$editId");
        $check_database -> execute();
    
        $data = array();
        if ($check_database->rowCount() > 0) {
            $data = $check_database->fetch(PDO::FETCH_ASSOC);
        } 
    }
    
    include 'prizeAddEdit.php';

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
                                echo "<input type='hidden' name='edit_id' value='$editId'>";
                            }
                        ?>
                        <div class="data-timeline" id="additionalTimelines">
                            <div class="form-row">
                                <div class="form-group col-md-12 row">
                                    <label for="name" class='col-md-2'>Prize Name</label>
                                    <input  name="name" class='col-md-10' type="text" class="form-control" id="name"  required  value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter prize name
                                    </div>
                                </div>
                                <div class="row col-md-12">
                                    <label class='col-md-2' for="image">Prize Image</label>     
                                    <div class="col-md-10">
                                    <?php if(isset($data['image']) && $data['image'] != "") { ?>                            
                                        <img id="prizePreview" class='my-2' style="width: 150px; height: 150px; border-radius: 10px" src="../../images/<?= $data['image'] ?>">
                                    <?php } ?>
                                    </div>
                                </div>
                                    
                                <div class="form-group row col-md-12">
                                    <div class="col-md-2 "></div>

                                    <input  name="prizeImage" class='col-md-10'  type="file" id="prizeImage">
                                    <div class="invalid-feedback">
                                        Please enter prize image
                                    </div>
                                </div>

                                <div class="row col-md-12">
                                    
                                    <label for="cardImage" class='col-md-2'>Card Image</label>
                                    <div class="col-md-10">
                                    <?php if(isset($data['cardImage']) && $data['cardImage'] != "") { ?>                            
                                        <img id="cardImagePreview" class='my-2' style="width: 150px; height: 150px; border-radius: 10px" src="../../images/<?= $data['cardImage'] ?>">
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row col-md-12">
                                    
                                <div class="col-md-2 "></div>
                                    <input name="cardImage" class='col-md-10' type="file"  id="cardImage">
                                    <div class="invalid-feedback">
                                        Please enter timeline cardImage
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                            <input type="submit" class="btn btn-primary yellow black mt-5" style="border:none" value="<?php echo !$editMode ? 'Save' : 'Edit'; ?>" name="prize">

                            </form>
                        </div>
                    </div>

    </div>

    <script>
    function previewImage(event, imageId) {
        const input = event.target;
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const imagePreview = document.getElementById(imageId);
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById('prizeImage').addEventListener('change', function(event) {
        previewImage(event, 'prizePreview');
    });

    document.getElementById('cardImage').addEventListener('change', function(event) {
        previewImage(event, 'cardImagePreview');
    });

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





    