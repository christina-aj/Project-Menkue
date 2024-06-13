<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Report</title>
</head>

<body>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <h1 class="text-center">REPORT MENKUE</h1>
            <thead>
            <tr>
                <th>No.</th>
                <th>Customer Name</th>
                <th>Total Harga</th>
                <th>QTY</th>
                <th>Deskripsi</th>
            </tr>
            </thead>
            <tbody>
                <?php  $no = 1;
                foreach($row as $key => $data){ ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->customer_name?></td>
                    <td><?=indo_currency($data->totalharga)?></td>
                    <td><?=$data->qty?></td>
                    <td><?=$data->deskripsi?></td>
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