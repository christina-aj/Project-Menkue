<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Stock-Out</title>
</head>

<body>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <h1 class="text-center">DATA STOCK-OUT MENKUE</h1>
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
                    <td><?= $data->qty ?></td>
                    <td><?= $data->detail ?></td>
                    <td><?=indo_date($data->date) ?></td>
                </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>