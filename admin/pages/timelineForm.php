<?php 

    $editMode = false;
    if(isset($_GET['edit']) && !empty($_GET['edit'])) {
        $editId = $_GET['edit'];
        $editMode = true;

        $check_database = $connect->prepare("SELECT * FROM timeline WHERE id=?");
        $check_database -> execute([$editId]);
    
        $data = array();
        if ($check_database->rowCount() > 0) {
            $data = $check_database->fetch(PDO::FETCH_ASSOC);
        } 
    }
    
    include 'timelineAddEdit.php';

?>

<div class="row justify-content-center">
        <div class="card shadow mb-4 w-75">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-0 text-gray-800 ">Timeline Lovestory</h1>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                            <div class="data-timeline" id="additionalTimelines">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Timeline Title</label>
                                    <input  name="title" type="text" class="form-control" id="title"  required  value="<?php echo isset($data['title']) ? $data['title'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="year">Timeline Year</label>
                                    <input  name="year" type="text" pattern="\d{4}" class="form-control" id="year"  required  value="<?php echo isset($data['year']) ? $data['year'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="content">Timeline Content</label>
                                    <textarea name="content" class="form-control" id="content" rows="3" required ><?= isset($data['content']) ? $data['content'] : ''; ?></textarea>
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                                </div>
                            </div>
                            </div>
                            <input type="submit" class="btn btn-primary mt-5" value="<?php echo !$editMode ? 'Save' : 'Edit'; ?>" name="timeline">

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
                if (!form.checkValidity() || !isYearValid()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });

        function isYearValid() {
            var yearInput = document.getElementById('year');
            var yearValue = yearInput.value;

            // Check if the input value is a 4-digit number
            return /^\d{4}$/.test(yearValue);
        }
    })();
</script>





    