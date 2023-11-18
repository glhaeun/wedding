<?php 
    $editMode = isset($_GET['edit']); 
    $readonly = $editMode ? '' : 'readonly';

    $check_database = $connect->prepare("SELECT * FROM timeline");
    $check_database -> execute();

    $data = array();
    if ($check_database->rowCount() > 0) {
        $data = $check_database->fetch(PDO::FETCH_ASSOC);
    } 

?>


<?php
    if (isset($_POST['timeline'])) {

        if ($check_database->rowCount() > 0)  {
            $titles = $_POST['titles'];
            $years = $_POST['years'];
            $contents = $_POST['contents'];
    
        
            for ($i = 0; $i < count($titles); $i++) {
                $title = $titles[$i];
                $year = $years[$i];
                $content = $contents[$i];

                if ($i < $count) {
                    $query = "UPDATE timeline SET title = ?, year = ?, content = ? WHERE id = ?";
                    $update = $connect->prepare($query);
                    $update->execute([$title, $year, $content, $i + 1]);
                } else {
                    $query = "INSERT INTO timeline (`id`, `title`, `year`, `content`) VALUES (?,?,?,?)";
                    $update = $connect->prepare($query);
                    $update->execute([$i, $title, $year, $content]);
                }
        
            }
        } else {
            $titles = $_POST['titles'];
            $years = $_POST['years'];
            $contents = $_POST['contents'];
    
        
            for ($i = 0; $i < count($titles); $i++) {
                $title = $titles[$i];
                $year = $years[$i];
                $content = $contents[$i];

                $query = "INSERT INTO timeline (`id`,`title`, `year`, `content`) VALUES (?,?,?,?)";
                $update = $connect -> prepare($query);
                $update -> execute ([$i,$title, $year, $content]);
        
            }

            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Data has been inserted successfully!',
                }).then(function(){
                    window.location = "timeline.php";
                });
            </script>
            <?php
        }
        
    }
    
?>


<div class="row justify-content-center">
        <div class="card shadow mb-4 w-75">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-0 text-gray-800 ">Timeline Lovestory</h1>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Edit</a>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        <button id="addTimeline" class="btn btn-secondary mt-3" <?php echo !$editMode ? 'disabled' : ''; ?>  >Add Timeline</button>

                            <div class="data-timeline" id="additionalTimelines">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Timeline Title</label>
                                    <input  name="title" type="text" class="form-control" id="title"  required <?php echo $readonly; ?> value="<?php echo isset($data['invitation']) ? $data['invitation'] : ''; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="year">Timeline Year</label>
                                    <input  name="year" type="number" class="form-control" id="year"  required <?php echo $readonly; ?> value="<?php echo isset($data['date']) ? $data['date'] : ''; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="content">Timeline Content</label>
                                    <textarea name="content" class="form-control" id="content" rows="3" required <?php echo $readonly; ?>><?= isset($data['thankyou']) ? $data['thankyou'] : ''; ?></textarea>
                                </div>
                            </div>
                            </div>
                            <input <?php echo !$editMode ? 'disabled' : ''; ?> type="submit" class="btn btn-primary mt-5" value="Save" name="timeline">

                            
                            </form>
                        </div>
                    </div>

    </div>





    