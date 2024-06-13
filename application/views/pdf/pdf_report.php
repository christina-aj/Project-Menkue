<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDF Report</title>
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
        <h2 style="text-align:center;">REPORT MENKUE</h2>
        <table class="table table-bordered table-striped">
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
                    <td style="text-align:center;"><?=$data->qty?></td>
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