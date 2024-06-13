<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDF Stock Out</title>
    <style>

        table{
            width:100%;
        }

        table, th, td {
            border: 1px solid;
            border-collapse:collapse;
        }

        th, td{
            padding:5px 20px;
        }

    </style>
</head>

<body>
    <div class="box-body table-responsive">
        <h2 style="text-align:center;">DATA STOCK-OUT MENKUE</h2>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No.</th>
                <th>Item Code</th>
                <th>Product Item</th>
                <th>Qty</th>
                <th>Info</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
                <?php  $no = 1;
                foreach($row as $key => $data){ ?>
                <tr>
                    <td style="width:5%;"><?= $no++ ?></td>
                    <td><?= $data->barcode ?></td>
                    <td><?= $data->name ?></td>
                    <td style="text-align:center;"><?= $data->qty ?></td>
                    <td><?= $data->detail ?></td>
                    <td><?=indo_date($data->date) ?></td>
                </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>