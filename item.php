<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/conn.php'); 
include('modules/item.php'); 
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
                    <li class="active">Items</li>
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
                        <strong class="card-title">LIST OF ITEMS</strong>
                    </div>
                    <div class="card-body">
                        <div style="height: 400px; width: 100%; overflow: auto;">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ITEM CODE</th>
                                        <th>DESC FRENCH</th>
                                        <th>DESC ENGLISH</th>
                                        <th>DESC KINYARWANDA</th>
                                        <th>PRIMARY CLASS CODE</th>
                                        <th>OUTLET CODE</th>
                                        <th>AMOUNT</th>
                                        <th>UNIT CODE</th>
                                        <th>START PERIOD</th>
                                        <th>DISCONTINUED PERIOD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $data = fetchAndMapItems();
                                    foreach ($data as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['item_code']; ?> </td>
                                        <td><?php echo $row['description_french']; ?> </td>
                                        <td><?php echo $row['description_english']; ?> </td>
                                        <td><?php echo $row['description_kinyarwanda']; ?> </td>
                                        <td><?php echo $row['primary_classification_code']; ?></td>
                                        <td><?php echo $row['outlet_code']; ?></td>
                                        <td><?php echo $row['amount_']; ?></td>
                                        <td><?php echo $row['unit_code']; ?></td>
                                        <td><?php echo $row['start_period']; ?> </td>
                                        <td><?php echo $row['discontinued_period']; ?> </td>
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
