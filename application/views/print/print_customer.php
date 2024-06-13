<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Customer</title>
</head>

<body>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <h2 class="text-center">DATA CUSTOMER MENKUE</h2>
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Alamat</th>
            </tr>
            </thead>
            <tbody>
                <?php  $no = 1;
                foreach($row->result() as $key => $data){ ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->name?></td>
                    <td><?=$data->gender?></td>
                    <td><?=$data->phone?></td>
                    <td><?=$data->alamat?></td>
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