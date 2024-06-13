<section class="content-header">
	<hi>Unit
		<small>Unit Barang</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Unit</li>
	</ol>
</section>

<!--- Main -->

<section class="content">
    <?php $this->view('messages')?>
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Data Unit</h3>
            <div class= "pull-right">
                <a href="<?=site_url('unit/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i>Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $no = 1;
                    foreach($row->result() as $key => $data){ ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->name?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('unit/edit/'.$data->unit_id)?>"  class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>Edit
                            </a>
                            <!-- <a href="<?=site_url('unit/del/'.$data->unit_id)?>" onclick = "return confirm ('Apakah data ingin di hapus?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                            </a> -->
                            <a href="#modalDeleteUnit" data-toggle="modal" onclick = "$('#modalDeleteUnit #formDeleteUnit').attr('action', '<?=site_url('unit/del/'.$data->unit_id)?>')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
</section>

<div class="modal fade" id="modalDeleteUnit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Yakin Akan Menghapus Unit Ini?</h5>
            </div>
            <div class="modal-footer">
                <form id="formDeleteUnit" action="" method="post">
                    <button class="btn btn-default" data-dismiss="modal" style="font-size: 12px;">Tidak</button>
                    <button class="btn btn-danger" type="submit" style="font-size: 12px;">Ya. Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>