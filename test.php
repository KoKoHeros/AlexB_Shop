<!DOCTYPE html>
<html>
<head>
	<title>Json To Table</title>
</head>
<body>
<?php 
include('data.php'); ?>

<div style="margin-left:3%; margin-right:3%;">
<table id="awaitingList" class="display nowrap dataTable no-footer dtr-inline collapsed" style="width:100%">
        <thead>
            <tr>
            <th></th>
                <th>ORDER ID</th>
                <th>ORDER #</th>
                <th>ORDER KEY</th>
                <th>ORDER DATE</th>
                <th>STATUS</th>
                <th>TOTAL ITEMS</th>
                <th>ITEMS NAME</th>
                <th>ITEMS QUANTITY</th>
                <th>ITEMS OPTIONS</th>
                <th>SHIPPING</th>
                <th>Ship To name</th>
                <th>CUSTOMER Email</th>
            </tr>
        </thead>
        <?php foreach($data['orders'] as $key => $rows) { ?>
            <tr>    
            <td></td>
                <td><?php echo $rows['orderId']; ?></td>
                <td><?php echo $rows['orderNumber']; ?></td>
                <td><?php echo $rows['orderKey']; ?></td>
                <td><?php echo $rows['orderDate']; ?></td>
                <td><?php echo $rows['orderStatus']; ?></td>
                <td><?php echo count($rows['items']); ?></td>
                <td>
                    <?php foreach ($rows['items'] as $key => $value) {
                        echo $value['name'];
                        echo '<br>';
                    ?>
                    <?php } ?>
                </td>
                <td style="text-align: center;">
                <?php foreach ($rows['items'] as $key => $value) {
                        echo $value['name'];
                        echo '<br>';
                    ?>
                    <?php } ?>
                    <!--  -->
                    <?php foreach ($rows['items'] as $key => $qty) {
                            $options[] = $qty['options'];
                            echo $qty['quantity'];
                            echo '<br>';
                    ?>
                    <?php } ?>
                </td>
                <td>
                    <div style="width: 100%">
                        <div style="width: 30%; float: left;">
                            <?php
                                foreach ($options as $key => $optio) {
                                    foreach ($optio as $key => $val) {
                                        echo $val['name'];
                                        echo '<br>';
                                    }
                                }
                            ?>
                        </div>
                        <div style="width: 70%;">
                            <?php  
                                foreach ($options as $key => $optio) {
                                    foreach ($optio as $key => $val) {
                                        echo $val['value'];
                                        echo '<br>';
                                    }
                                }
                            ?>
                        </div>
                    
                    </div>
                </td>
                <td><?php echo 'TBD' ?></td>
                <td><?php echo $rows['shipTo']['name']; ?></td>
                <td><?php echo $rows['customerEmail']; ?></td>
            </tr>
        <?php } ?> 
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" />
</body>
</html>
<script>
$(document).ready(function() {
    $('#awaitingList').DataTable( {
        responsive: {
            details: {
                type: 'column',
                target: 0
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ]
    } );
} );
</script>

<script>
    if ($("section[data-product-id='79']").length) {
        //Hide all GM Options
        $(".form-field.form-field-options.form-field-select .form-label .form-field-title:contains('Model')").parent().parent().hide();
        //add link to request page
        $("#attribute-3493").parent().parent().append('<br><div style="font-size: .700rem; text-align:right;">Don\'t see what you\'re looking for? Click <a href="https://www.vedderholsters.com/gun-model-request/" class="bsilink">HERE</a> to send your request!</div>');
        //Apply listener to Gun Manufacturer select
        $("#attribute-3493").change(function() {
            var mfg_select = $("#attribute-3493 option:selected").text();
            $(".form-field.form-field-options.form-field-select .form-label .form-field-title:contains('" + mfg_select + "')").parent().parent().show();
            $(".form-field.form-field-options.form-field-select .form-label .form-field-title:contains('" + mfg_select + "')").parent().parent().children(".form-label").children(".form-field-control").children(".form-select-wrapper").children(".form-input.form-select").attr("required", "required");
            $(".form-field.form-field-options.form-field-select .form-label .form-field-title:not(:contains('" + mfg_select + "')):contains('Model')").parent().parent().hide();
            $(".form-field.form-field-options.form-field-select .form-label .form-field-title:not(:contains('" + mfg_select + "')):contains('Model')").parent().parent().children(".form-label").children(".form-field-control").children(".form-select-wrapper").children(".form-input.form-select").each(function(index) {
                $(this)[0].selectedIndex = 0;
            });
            $(".form-field.form-field-options.form-field-select .form-label .form-field-title:not(:contains('" + mfg_select + "')):contains('Model')").parent().parent().children(".form-label").children(".form-field-control").children(".form-select-wrapper").children(".form-input.form-select").removeAttr("required");
        });
    }
</script>