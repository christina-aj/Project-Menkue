<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Supplier</title>
</head>

<body>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <h2 class="text-center">DATA ITEM MENKUE</h2>
            <thead>
            <tr>
                <th>No.</th>
                <th>Item Code</th>
                <th>Name</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Unit</th>
                <th>Stock</th>
            </tr>
            </thead>
            <tbody>
                <?php  $no = 1;
                foreach($row->result() as $key => $data){ ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->barcode?></td>
                    <td><?=$data->name?></td>
                    <td><?=indo_currency($data->harga)?></td>
                    <td><?=$data->kategori_name?></td>
                    <td><?=$data->unit_name?></td>
                    <td><?=$data->stock?></td>
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