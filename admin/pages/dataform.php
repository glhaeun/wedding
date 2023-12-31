<?php 
    $editMode = isset($_GET['edit']); 
    $readonly = $editMode ? '' : 'readonly';

    $errors = array();

    $check_database_bride = $connect->prepare("SELECT * FROM bride");
    $check_database_bride -> execute();

    $check_database_groom = $connect->prepare("SELECT * FROM groom");
    $check_database_groom -> execute();

    $bride_data = array();
    if ($check_database_bride->rowCount() > 0) {
        $bride_data = $check_database_bride->fetch(PDO::FETCH_ASSOC);
    }

    $groom_data = array();
    if ($check_database_groom->rowCount() > 0) {
        $groom_data = $check_database_groom->fetch(PDO::FETCH_ASSOC);
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
                        <h1 class="h3 mb-0 text-gray-800 ">Bride & Groom Data</h1>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-primary yellow black" style="border:none"><i class="fas fa-edit"></i>  Edit</a>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <div class="data-groom">
                            <h4 class="text-center">Groom data</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom">Groom name</label>
                                    <input  name="groom" type="text" class="form-control" id="groom" value="<?php echo isset($groom_data['groom']) ? $groom_data['groom'] : ''; ?>" required <?php echo $readonly; ?>>
                                    <div class="invalid-feedback">
                                        Please enter groom name
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="groomNo">Phone number</label>
                                    <input  name="groomNo" type="text" class="form-control" id="groomNo" value="<?php echo isset($groom_data['number']) ? $groom_data['number'] : ''; ?>" required <?php echo $readonly; ?>>
                                    <div class="invalid-feedback">
                                        Please enter groom number
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom_dad">Father's name</label>
                                    <input <?php echo $readonly; ?>   name="groom_dad" type="text" class="form-control" id="groom_dad" value="<?php echo isset($groom_data['dad']) ? $groom_data['dad'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter father's name
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="groom_mom">Mother's name</label>
                                <input <?php echo $readonly; ?>   name="groom_mom" type="text" class="form-control" id="groom_mom" value="<?php echo isset($groom_data['mom']) ? $groom_data['mom'] : ''; ?>" required>
                                <div class="invalid-feedback">
                                        Please enter mother's name
                                    </div>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom_bank">Bank name</label>
                                    <select <?php echo $readonly; ?> id="groom_bank" class="form-control" name="groom_bank">
                                    <option>--Pilih--</option>
                                    <?php 
                                    $query = "SELECT bank_name FROM bank";
                                    $show_bank = $connect->prepare($query);
                                    $show_bank->execute();
                                    if ($show_bank->rowCount() > 0) {
                                        while ($fetch_bank = $show_bank->fetch(PDO::FETCH_ASSOC)) {
                                            $selected = '';
                                            if (isset($groom_data['bank']) && $fetch_bank['bank_name'] === $groom_data['bank']) {
                                                $selected = 'selected'; // Jika data sesuai, tentukan sebagai opsi yang dipilih
                                            }
                                    ?>
                                    <option value="<?=$fetch_bank['bank_name']?>" <?=$selected?>><?=$fetch_bank['bank_name']?></option>
                                    <?php
                                        } 
                                    } 
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                        Please enter bank name
                                </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="groom_rek">Bank number</label>
                                <input <?php echo $readonly; ?>   name="groom_rek" type="number" class="form-control" id="groom_rek" value="<?php echo isset($groom_data['rekening']) ? $groom_data['rekening'] : ''; ?>" required>
                                <div class="invalid-feedback">
                                        Please enter bank number
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="groom" class="d-block">Groom image</label>
                                    <img id="groomImagePreview"  class="my-2" style="width: 150px; height: 150px; border-radius: 10px" src="../../images/<?= $groom_data['image'] ?>?<?php echo time(); ?>">
                                    <?php if($readonly == "") { ?>
                                    <input  name="groom_image"  type="file" id="groom" onchange="previewImage(event, 'groomImagePreview')">
                                    <?php } ?>  
                                </div>

                            </div>
                            </div>

                            <div class="data-bride mt-5">
                            <h4 class="text-center">Bride Data</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride">Bride name</label>
                                    <input <?php echo $readonly; ?> name="bride" type="text" class="form-control" id="bride" value="<?php echo isset($bride_data['bride']) ? $bride_data['bride'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter bride name
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="brideNo">Phone number</label>
                                    <input  name="brideNo" type="text" class="form-control" id="brideNo" value="<?php echo isset($bride_data['number']) ? $bride_data['number'] : ''; ?>" required <?php echo $readonly; ?>>
                                    <div class="invalid-feedback">
                                        Please enter bride number
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride_dad">Father's name</label>
                                    <input <?php echo $readonly; ?>   name="bride_dad" type="text" class="form-control" id="bride_dad" value="<?php echo isset($bride_data['dad']) ? $bride_data['dad'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter father's name
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="bride_mom">Mother's name</label>
                                <input <?php echo $readonly; ?>   name="bride_mom" type="text" class="form-control" id="bride_mom" value="<?php echo isset($bride_data['mom']) ? $bride_data['mom'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter mother's name
                                    </div>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride_bank">Bank name</label>
                                    <select <?php echo $readonly; ?> id="bride_bank" class="form-control" name="bride_bank">
                                    <option>--Pilih--</option>
                                    <?php 
                                    $query = "SELECT bank_name FROM bank";
                                    $show_bank = $connect->prepare($query);
                                    $show_bank->execute();
                                    if ($show_bank->rowCount() > 0) {
                                        while ($fetch_bank = $show_bank->fetch(PDO::FETCH_ASSOC)) {
                                            $selected = '';
                                            if (isset($bride_data['bank']) && $fetch_bank['bank_name'] === $bride_data['bank']) {
                                                $selected = 'selected'; // Jika data sesuai, tentukan sebagai opsi yang dipilih
                                            }
                                    ?>
                                    <option value="<?=$fetch_bank['bank_name']?>" <?=$selected?>><?=$fetch_bank['bank_name']?></option>
                                    <?php
                                        } 
                                    } 
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                        Please enter bank name
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="bride_rek">Bank number</label>
                                <input <?php echo $readonly; ?>   name="bride_rek" type="number" class="form-control" id="bride_rek" value="<?php echo isset($bride_data['rekening']) ? $bride_data['rekening'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter bank number
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="bride_image" class="d-block">Bride image</label>
                                    <img id="brideImagePreview" class="my-2" style="width: 150px; height: 150px; border-radius: 10px" src="../../images/<?= $bride_data['image'] ?>?<?php echo time(); ?>">
                                    <?php if($readonly == "") { ?>
                                    <input  name="bride_image"  type="file" id="bride_image" onchange="previewImage(event, 'brideImagePreview')">
                                    <?php } ?>  
                                </div>
                            </div>
                            </div>
                            
                            <input <?php echo !$editMode ? 'disabled' : ''; ?> type="submit" class="btn btn-primary yellow black" style="border:none" value="Save" name="save">
                            </form>
                        </div>
                    </div>


    </div>

<script src="../component/js/formValidation.js"></script>
<script src="../component/js/updateImage.js"></script>





    