<?php 
    $editMode = isset($_GET['edit']); 
    $readonly = $editMode ? '' : 'readonly';

    $check_database = $connect->prepare("SELECT * FROM general");
    $check_database -> execute();

    $data = array();
    if ($check_database->rowCount() > 0) {
        $data = $check_database->fetch(PDO::FETCH_ASSOC);
    } 

    include 'insertData.php';
    
?>


<div class="row justify-content-center">
        <div class="card shadow mb-4 w-75">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-0 text-gray-800 ">Data Pengantin</h1>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Edit</a>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="data-general">
                            <h4 class="text-center">Invitation</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inv_title">Invitation Title</label>
                                    <input  name="inv_title" type="text" class="form-control" id="inv_title"  required <?php echo $readonly; ?> value="<?php echo isset($data['invitation']) ? $data['invitation'] : ''; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inv_date">Invitation Date</label>
                                    <input  name="inv_date" type="datetime-local" class="form-control" id="inv_date"  required <?php echo $readonly; ?> value="<?php echo isset($data['date']) ? $data['date'] : ''; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="ty">Thank You Message</label>
                                    <!-- <input  name="inv_title" type="text" class="form-control" id="inv_title"  required <?php echo $readonly; ?>> -->
                                    <textarea name="ty" class="form-control" id="ty" rows="4" required <?php echo $readonly; ?>><?= isset($data['thankyou']) ? $data['thankyou'] : ''; ?></textarea>
                                </div>
                            </div>

                            <h4 class="text-center mt-5">Holy Matrimony</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="holymatrimony_address">Holy Matrimony Address</label>
                                    <input <?php echo $readonly; ?>   name="holymatrimony_address" type="text" class="form-control" id="holymatrimony_address" value="<?php echo isset($data['holymatrimony_address']) ? $data['holymatrimony_address'] : ''; ?>" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="holymatrimony_map">Holy Matrimony Google Map Link</label>
                                    <input <?php echo $readonly; ?>   name="holymatrimony_map" type="text" class="form-control" id="holymatrimony_map" value="<?php echo isset($data['holymatrimony_map']) ? $data['holymatrimony_map'] : ''; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="holymatrimony_date">Holy Matrimony Date</label>
                                <input <?php echo $readonly; ?>   name="holymatrimony_date" type="datetime-local" class="form-control" id="holymatrimony_date" value="<?php echo isset($data['holymatrimony_date']) ? $data['holymatrimony_date'] : ''; ?>"  required>
                                </div>
                            </div>
                            
                            <h4 class="text-center mt-5">Reception</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="reception_address">Reception Address</label>
                                    <input <?php echo $readonly; ?>   name="reception_address" type="text" class="form-control" id="reception_address"  required value="<?php echo isset($data['reception_address']) ? $data['reception_address'] : ''; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="reception_map">Reception Google Map Link</label>
                                    <input <?php echo $readonly; ?>   name="reception_map" type="text" class="form-control" id="reception_map"  required value="<?php echo isset($data['reception_map']) ? $data['reception_map'] : ''; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="reception_date">Reception Date</label>
                                <input <?php echo $readonly; ?>   name="reception_date" type="datetime-local" class="form-control" id="reception_date"  required value="<?php echo isset($data['reception_date']) ? $data['reception_date'] : ''; ?>">
                                </div>
                            </div>


                            <h4 class="text-center mt-5">Address</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="couple_address">Couple's Address</label>
                                    <input <?php echo $readonly; ?>   name="couple_address" type="text" class="form-control" id="couple_address"  required value="<?php echo isset($data['couple_address']) ? $data['couple_address'] : ''; ?>">
                                </div>
                            </div>
                            
                            <input <?php echo !$editMode ? 'disabled' : ''; ?> type="submit" class="btn btn-primary mt-5" value="Save" name="jadwal">
                            </form>
                        </div>
                    </div>

    </div>


    