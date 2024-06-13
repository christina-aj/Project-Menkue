<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDF Item</title>
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
        <h2 style="text-align:center;">DATA ITEM MENKUE</h2>
        <table class="table table-bordered table-striped">
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