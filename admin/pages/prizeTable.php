<?php include '../component/connect.php';
      include 'prizeDelete.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Wedding Admin</title>

    <link href="../component/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css">
    <link href="../component/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    .yellow {
        background-image: linear-gradient(to right, #FAD983 0%, #FAD983 100%);

    }
    .black {
        color: black;
    }
</style>

</head>

<body id="page-top">

    <div id="wrapper">

        <?php include '../component/sidebar.php' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Prize</h1>
                        <a href="prize.php" class="d-none d-sm-inline-block btn btn-sm btn-primary yellow black" style="border:none"><i class="fas fa-plus"></i> Add Prize</a>
                    </div>

                    <div class="card shadow mb-4 w-100">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Prize Name</th>
                                            <th>Prize Image</th>
                                            <th>Scratch Card Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


<?php 

    $query ="SELECT * FROM prize";
    $select_user =  $connect->prepare($query);
    $select_user -> execute();

    $index = 1;
    if($select_user->rowCount()>0){
        while ($fetch_user = $select_user ->fetch(PDO::FETCH_ASSOC)){
            ?>
                        <tr>
                            <td><?=$index?></td>
                            <td><?=$fetch_user['name']?></td>
                            <td>
                            <?php if($fetch_user['image'] != '') {?>
                                <img style="width: 150px; height: 150px; border-radius: 10px" src="../../images/<?= $fetch_user['image'] ?>">
                            <?php } ?>
                            </td>
                            <td>
                            <?php if($fetch_user['cardImage'] != '') {?>
                                <img style=" border-radius: 10px" src="../../images/<?= $fetch_user['cardImage'] ?>">
                            <?php } ?>
                            </td> 
                            <td><a href="prize.php?edit=<?=$fetch_user['id']?>"><i class="fa-solid fa-pen-to-square" style="color: #fad983;"></i></a>
                            <a href="prizeTable.php?delete=<?=$fetch_user['id']?>"><i class="fa-solid fa-trash" style="color: #fad983;"></i></a></td>       
                    <?php
                        $index++;
        }
    }
                                    
?>

                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include '../component/footer.php' ?>


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>