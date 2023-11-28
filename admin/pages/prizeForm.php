<?php 

    $editMode = false;
    if(isset($_GET['edit']) && !empty($_GET['edit'])) {
        $editId = $_GET['edit'];
        $editMode = true;

        $check_database = $connect->prepare("SELECT * FROM prize");
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

                        <div class="data-timeline" id="additionalTimelines">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Prize Name</label>
                                    <input  name="name" type="text" class="form-control" id="name"  required  value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter prize name
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Prize Image</label>
                                    <input  name="image" type="text" class="form-control" id="image"  required  value="<?php echo isset($data['image']) ? $data['image'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter prize image
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="cardImage">Card Image</label>
                                    <textarea name="cardImage" class="form-control" id="cardImage" rows="3" required ><?= isset($data['cardImage']) ? $data['cardImage'] : ''; ?></textarea>
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





    