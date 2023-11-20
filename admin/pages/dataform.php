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


<div class="row justify-content-center">
        <div class="card shadow mb-4 w-75">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-0 text-gray-800 ">Data Pengantin</h1>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?edit" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Edit</a>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <div class="data-groom">
                            <h4 class="text-center">Data Groom</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom">Nama Groom</label>
                                    <input  name="groom" type="text" class="form-control" id="groom" value="<?php echo isset($groom_data['groom']) ? $groom_data['groom'] : ''; ?>" required <?php echo $readonly; ?>>
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom_dad">Nama Bapak Kandung</label>
                                    <input <?php echo $readonly; ?>   name="groom_dad" type="text" class="form-control" id="groom_dad" value="<?php echo isset($groom_data['dad']) ? $groom_data['dad'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="groom_mom">Nama Ibu Kandung</label>
                                <input <?php echo $readonly; ?>   name="groom_mom" type="text" class="form-control" id="groom_mom" value="<?php echo isset($groom_data['mom']) ? $groom_data['mom'] : ''; ?>" required>
                                <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom_bank">Nama Bank</label>
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
                                        Please enter invitation title
                                </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="groom_rek">Nomor Rekening</label>
                                <input <?php echo $readonly; ?>   name="groom_rek" type="number" class="form-control" id="groom_rek" value="<?php echo isset($groom_data['rekening']) ? $groom_data['rekening'] : ''; ?>" required>
                                <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                            </div>
                            </div>
                            </div>

                            <div class="data-bride mt-5">
                            <h4 class="text-center">Data Bride</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride">Nama Bride</label>
                                    <input <?php echo $readonly; ?> name="bride" type="text" class="form-control" id="bride" value="<?php echo isset($bride_data['bride']) ? $bride_data['bride'] : ''; ?>" required>
                                </div>
                                <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride_dad">Nama Bapak Kandung</label>
                                    <input <?php echo $readonly; ?>   name="bride_dad" type="text" class="form-control" id="bride_dad" value="<?php echo isset($bride_data['dad']) ? $bride_data['dad'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="bride_mom">Nama Ibu Kandung</label>
                                <input <?php echo $readonly; ?>   name="bride_mom" type="text" class="form-control" id="bride_mom" value="<?php echo isset($bride_data['mom']) ? $bride_data['mom'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride_bank">Nama Bank</label>
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
                                        Please enter invitation title
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="bride_rek">Nomor Rekening</label>
                                <input <?php echo $readonly; ?>   name="bride_rek" type="number" class="form-control" id="bride_rek" value="<?php echo isset($bride_data['rekening']) ? $bride_data['rekening'] : ''; ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter invitation title
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <input <?php echo !$editMode ? 'disabled' : ''; ?> type="submit" class="btn btn-primary" value="Save" name="save">
                            </form>
                        </div>
                    </div>


    </div>

<script src="../component/js/formValidation.js"></script>



    