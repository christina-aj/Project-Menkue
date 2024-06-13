<section class="content-header">
	<hi>Item
		<small>Data Barang</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Items</li>
	</ol>
</section>

<!--- Main -->

<section class="content">
    <?php $this->view('messages')?>
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Data Produk</h3>
            <div class= "pull-right">
                <a href="<?=site_url('item/print_item')?>" class="btn btn-info btn-flat">
                    <i class="fa fa-print"></i> Print
                </a>
                <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Buat Data Produk
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item Code</th>
                        <th>Name</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Unit</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Action</th>
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
                        <td>
                            <?php if($data->image != null){ ?>
                                <img src="<?=base_url('uploads/product/'.$data->image)?>" style="width:100px">
                            <?php } ?>
                        </td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('item/edit/'.$data->item_id)?>"  class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>Edit
                            </a>
                            <!-- <a href="<?=site_url('item/del/'.$data->item_id)?>" onclick = "return confirm ('Apakah data ingin di hapus?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                            </a> -->
                            <a href="#modalDeleteItem" data-toggle="modal" onclick = "$('#modalDeleteItem #formDeleteItem').attr('action', '<?=site_url('item/del/'.$data->item_id)?>')" class="btn btn-danger btn-xs">
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

<div class="modal fade" id="modalDeleteItem">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h6 class="modal-title">Yakin Akan Menghapus Item Ini?</h6>
            </div>
            <div class="modal-footer">
                <form id="formDeleteItem" action="" method="post">
                    <button class="btn btn-default" data-dismiss="modal" style="font-size: 12px;">Tidak</button>
                    <button class="btn btn-danger" type="submit" style="font-size: 12px;">Ya. Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>