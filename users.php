<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/conn.php'); 
include('modules/users.php'); 
//include('includes/content.php');
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Users</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Bordered Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">LIST OF USERS</strong>
                    </div>

                    <div class="card-body">
                        <div style="height: 400px; width: 100%; overflow: auto;">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>DATA COLLECTOR ID</th>
                                        <th>DATA COLLECTOR NAME</th>
                                        <th>DATA COLLECTOR PHONE 1</th>
                                        <th>DATA COLLECTOR PHONE 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $data = fetchUsers();
                                    foreach ($data as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['data_collector_id']; ?> </td>
                                        <td><?php echo $row['data_collector_name']; ?> </td>
                                        <td><?php echo $row['data_collector_phone1']; ?> </td>
                                        <td><?php echo $row['data_collector_phone2']; ?> </td>
                                     </tr>
                                    <?php 
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
