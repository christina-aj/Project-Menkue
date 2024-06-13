<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDF Supplier</title>
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
        <h2 style="text-align:center;">DATA SUPPLIER MENKUE</h2>
        <table class="" style="margin-top:20px;">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
            </tr>
            </thead>
            <tbody>
                <?php  $no = 1;
                foreach($row->result() as $key => $data){ ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->name?></td>
                    <td><?=$data->phone?></td>
                    <td><?=$data->alamat?></td>
                    <td><?=$data->deskripsi?></td>
                </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>