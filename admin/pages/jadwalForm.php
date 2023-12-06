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
                        <h1 class="h3 mb-0 text-gray-800 ">Schedule Data</h1>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-primary yellow black" style="border:none"><i class="fas fa-edit"></i>  Edit</a>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <?php
                            if($editMode) {
                                ?>
                                <input type='hidden' name='edit' value='1'>
                                <?php
                            }
                        ?>
                            <div class="data-general">
                            <h4 class="text-center">Invitation</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="bride_groom_image" class="d-block">Bride & Groom image</label>
                                    <img id="bridegroomImagePreview" class="my-2 mr-5" style="width: 150px; height: 150px; border-radius: 150px" src="../../images/<?= $data['image'] ?>">
                                    <?php if($readonly == '') { ?>
                                        <input  name="bride_groom_image"  type="file" id="bride_groom_image" onchange="previewImage(event, 'bridegroomImagePreview')">
                                    <?php } ?>  
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inv_date">Invitation Date</label>
                                    <input required  name="inv_date" type="datetime-local" class="form-control" id="inv_date"   <?php echo $readonly; ?> value="<?php echo isset($data['date']) ? $data['date'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter invitation date
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inv_location">Invitation Location</label>
                                    <input required  name="inv_location" type="text" class="form-control" id="inv_location"   <?php echo $readonly; ?> value="<?php echo isset($data['location']) ? $data['location'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter invitation location
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="ty">Thank You Message</label>
                                    <!-- <input required  name="inv_title" type="text" class="form-control" id="inv_title"   <?php echo $readonly; ?>> -->
                                    <textarea name="ty" class="form-control" id="ty" rows="4"  <?php echo $readonly; ?>><?= isset($data['thankyou']) ? $data['thankyou'] : ''; ?></textarea>
                                    <div class="invalid-feedback">
                                        Please enter thank you message
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-center mt-5">Holy Matrimony</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="holymatrimony_address">Holy Matrimony Address</label>
                                    <input required <?php echo $readonly; ?>   name="holymatrimony_address" type="text" class="form-control" id="holymatrimony_address" value="<?php echo isset($data['holymatrimony_address']) ? $data['holymatrimony_address'] : ''; ?>" >
                                    <div class="invalid-feedback">
                                        Please enter holy martimony address
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="holymatrimony_map">Holy Matrimony Google Map Link</label>
                                    <input required <?php echo $readonly; ?>   name="holymatrimony_map" type="text" class="form-control" id="holymatrimony_map" value="<?php echo isset($data['holymatrimony_map']) ? $data['holymatrimony_map'] : ''; ?>" >
                                    <div class="invalid-feedback">
                                        Please enter holy matrimony google map link
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="holymatrimony_date">Holy Matrimony Date</label>
                                <input required <?php echo $readonly; ?>   name="holymatrimony_date" type="datetime-local" class="form-control" id="holymatrimony_date" value="<?php echo isset($data['holymatrimony_date']) ? $data['holymatrimony_date'] : ''; ?>"  >
                                <div class="invalid-feedback">
                                        Please enter holy matrimony date
                                    </div>
                            </div>
                            </div>
                            
                            <h4 class="text-center mt-5">Reception</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="reception_address">Reception Address</label>
                                    <input required <?php echo $readonly; ?>   name="reception_address" type="text" class="form-control" id="reception_address"   value="<?php echo isset($data['reception_address']) ? $data['reception_address'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter reception address
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="reception_map">Reception Google Map Link</label>
                                    <input required <?php echo $readonly; ?>   name="reception_map" type="text" class="form-control" id="reception_map"   value="<?php echo isset($data['reception_map']) ? $data['reception_map'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter reception google map link
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="reception_date">Reception Date</label>
                                <input required <?php echo $readonly; ?>   name="reception_date" type="datetime-local" class="form-control" id="reception_date"   value="<?php echo isset($data['reception_date']) ? $data['reception_date'] : ''; ?>">
                                <div class="invalid-feedback">
                                        Please enter reception date
                                    </div>
                            </div>
                            </div>


                            <h4 class="text-center mt-5">Address</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="couple_address">Address</label>
                                    <input required <?php echo $readonly; ?>   name="couple_address" type="text" class="form-control" id="couple_address"   value="<?php echo isset($data['couple_address']) ? $data['couple_address'] : ''; ?>">
                                    <div class="invalid-feedback">
                                        Please enter couple address
                                    </div>
                                </div>
                            </div>
                            
                            <input <?php echo !$editMode ? 'disabled' : ''; ?> type="submit" class="btn btn-primary yellow black mt-5" style="border:none" value="Save" name="jadwal">
                            </form>
                        </div>
                    </div>

</div>

<script src="../component/js/formValidation.js"></script>
<script src="../component/js/updateImage.js"></script>



