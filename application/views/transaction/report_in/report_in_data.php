<section class="content-header">
	<hi>Reports
		<small>Laporan Keuangan</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li>Transaction</li>
		<li class="active">Report</li>
	</ol>
</section>

<!--- Main -->

<section class="content">
    <?php $this->view('messages')?>
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Data Report</h3>
            <div class= "pull-right">
                <a href="<?=site_url('report/print_report')?>" class="btn btn-info btn-flat">
                    <i class="fa fa-print"></i> Print
                </a>
                <a href="<?=site_url('report/in/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Total Harga</th>
                        <th>QTY</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
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
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('report/in/edit/'.$data->report_id)?>"  class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>Edit
                            </a>
                            <a href="#modalDeleteReport" data-toggle="modal" onclick = "$('#modalDeleteReport #formDeleteReport').attr('action', '<?=site_url('report/in/del/'.$data->report_id)?>')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="modalDeleteReport">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Yakin Akan Menghapus Data report Ini?</h5>
            </div>
            <div class="modal-footer">
                <form id="formDeleteReport" action="" method="post">
                    <button class="btn btn-default" data-dismiss="modal" style="font-size: 12px;">Tidak</button>
                    <button class="btn btn-danger" type="submit" style="font-size: 12px;">Ya. Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>