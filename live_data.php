<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/conn.php');
include('modules/outlet.php'); 
include('modules/live-data.php');
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
                    <li class="active">Data table</li>
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
                        <strong class="card-title">Data Table:</strong>
                    </div>
                    <div class="card-body">
                        <div style="height: 400px; width: 100%; overflow: auto;">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>REC_ID</th>
                                        <th>L1_ID</th>
                                        <th>SN</th>
                                        <th>ITEM AVAIL</th>
                                        <th>CLASSIFICATION CODE</th>
                                        <th>DESC ITEM</th>
                                        <th>DESC IN ENGLISH</th>
                                        <th>DESC IN KINYARWANDA</th>
                                        <th>COLLECTED UNIT</th>
                                        <th>COLLECTED PRICE</th>
                                        <th>NET PRICE</th>
                                        <th>VENDOR</th>
                                        <th>CHANGE</th>
                                        <th>COMMENTS</th>
                                        <th>DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $data = fetchAndMapData();
                                    foreach ($data as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['price_main_data_rec-id']; ?> </td>
                                        <td><?php echo $row['level-1-id']; ?> </td>
                                        <td><?php echo $row['mainp_serial_number']; ?> </td>
                                        <td><?php echo $row['mainp_item_available']; ?> </td>
                                        <td><?php echo $row['mainp_primary_classification_code']; ?></td>
                                        <td><?php echo $row['mainp_item_description']; ?></td>
                                        <td><?php echo $row['mainp_description_english']; ?></td>
                                        <td><?php echo $row['mainp_description_kinyarwanda']; ?></td>
                                        <td><?php echo $row['mainp_collected_unit']; ?></td>
                                        <td><?php echo $row['mainp_collected_price']; ?></td>
                                        <td><?php echo $row['mainp_net_price']; ?></td>
                                        <td><?php echo $row['mainp_vendor']; ?></td>
                                        <td><?php echo $row['mainp_change']; ?></td>
                                        <td><?php echo $row['mainp_comments']; ?></td>
                                        <td><?php echo $row['mainp_collected_date']; ?></td>
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
