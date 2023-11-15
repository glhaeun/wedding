<div class="row justify-content-center">
        <div class="card shadow mb-4 w-75">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-0 text-gray-800 ">Data Pengantin</h1>
                        <a href="addemail.php" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Edit</a>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="data-groom">
                            <h4 class="text-center">Data Groom</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom">Nama Groom</label>
                                    <input   name="groom" type="text" class="form-control" id="groom" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom_dad">Nama Bapak Kandung</label>
                                    <input   name="groom_dad" type="text" class="form-control" id="groom_dad" placeholder="" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="groom_mom">Nama Ibu Kandung</label>
                                <input   name="groom_mom" type="text" class="form-control" id="groom_mom" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="groom_bank">Nama Bank</label>
                                    <select id="groom_bank" class="form-control" name="groom_bank">
                                        <option selected>--Pilih--</option>
                                        <?php 
                                            $query ="SELECT bank_name FROM bank";
                                            $show_bank = $connect->prepare($query);
                                            $show_bank -> execute();
                                            if ($show_bank->rowCount()>0) {
                                                while($fetch_bank = $show_bank->fetch(PDO::FETCH_ASSOC)){

                                                ?>
                                                <option value="<?=$fetch_bank['bank_name']?>"><?=$fetch_bank['bank_name']?></option>
                                                <?php
                                            } 
                                            } 
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="groom_rek">Nomor Rekening</label>
                                <input   name="groom_rek" type="number" class="form-control" id="groom_rek" placeholder="" required>
                                </div>
                            </div>
                            </div>

                            <div class="data-bride mt-5">
                            <h4 class="text-center">Data Bride</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride">Nama Bride</label>
                                    <input   name="bride" type="text" class="form-control" id="bride" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride_dad">Nama Bapak Kandung</label>
                                    <input   name="bride_dad" type="text" class="form-control" id="bride_dad" placeholder="" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="bride_mom">Nama Ibu Kandung</label>
                                <input   name="bride_mom" type="text" class="form-control" id="bride_mom" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bride_bank">Nama Bank</label>
                                    <select id="bride_bank" class="form-control" name="bride_bank">
                                        <option selected>--Pilih--</option>
                                        <?php 
                                            $query ="SELECT bank_name FROM bank";
                                            $show_bank = $connect->prepare($query);
                                            $show_bank -> execute();
                                            if ($show_bank->rowCount()>0) {
                                                while($fetch_bank = $show_bank->fetch(PDO::FETCH_ASSOC)){

                                                ?>
                                                <option value="<?=$fetch_bank['bank_name']?>"><?=$fetch_bank['bank_name']?></option>
                                                <?php
                                            } 
                                            } 
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="bride_rek">Nomor Rekening</label>
                                <input   name="bride_rek" type="number" class="form-control" id="bride_rek" placeholder="" required>
                                </div>
                            </div>
                            </div>
                            
                            <input type="submit" class="btn btn-primary" value="Tambah" name="submit">
                            </form>
                        </div>
                    </div>

    </div>
        