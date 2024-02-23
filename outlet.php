<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/conn.php'); 
include('modules/outlet.php'); 
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
                    <li><a href="#">Table</a></li>
                    <li class="active">outlets</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">LIST OF OUTLETS</strong>
                    </div>
                    <div class="card-body">
                        <div style="height: 400px; width: 100%; overflow: auto;">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>OUTLET CODE</th>
                                        <th>TYPE</th>
                                        <th>CATEGORY</th>
                                        <th>PROVINCE CODE</th>
                                        <th>OUTLET NAME</th>
                                        <th>PHONE NUMBER</th>
                                        <th>Location</th>
                                        <th>Urban Rural Code</th>       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $data = fetchAndMapOutlets();
                                    foreach ($data as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['outlet_code']; ?> </td>
                                        <td><?php echo $row['type_']; ?> </td>
                                        <td><?php echo $row['category_']; ?> </td>
                                        <td><?php echo $row['province_code']; ?> </td>
                                        <td><?php echo $row['name_']; ?></td>
                                        <td><?php echo $row['phone_']; ?></td>
                                        <td><?php echo $row['location_']; ?></td>
                                        <td><?php echo $row['urban_rural_code']; ?></td>

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
