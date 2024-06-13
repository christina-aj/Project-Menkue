<section class="content-header">
    <hi>Stock Out
		<small>Barang Rusak</small>
	  </hi>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li>Transaction</li>
      <li class="active">Stock Out</li>
    </ol>
  </section>
  <!-- Main content -->
<section class="content">  
<?php $this->view('messages') ?>  
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Data Stock Out</h3>
        <div class="pull-right">
          <a href="<?=site_url('stock/print_stock_out')?>" class="btn btn-info btn-flat">
              <i class="fa fa-print"></i> Print
          </a>
          <a href="<?= site_url('stock/out/add') ?>" class="btn btn-primary btn-flat">
            <i class="fa fa-plus"></i> Add Stock Out
          </a> 
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
          <thead>  
          <tr>
            <th>#</th>
            <th>Item Code</th>
            <th>Product Item</th>
            <th>Qty</th>
            <th>Info</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php $no = 1;
          foreach ($row as $key => $data){ ?>
          <tr>
            <td style="width:5%;"><?= $no++ ?></td>
            <td><?= $data->barcode ?></td>
            <td><?= $data->name ?></td>
            <td><?= $data->qty ?></td>
            <td><?= $data->detail ?></td>
            <td><?=indo_date($data->date) ?></td>
            <td class="text-center" width="160px">
              <!-- <a href="<?= site_url('stock/out/del/'.$data->stock_id.'/'.$data->item_id) ?> " onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                <i class="fa fa-trash"></i> Delete
              </a> -->
              <a href="#modalDeleteStockOut" data-toggle="modal" onclick = "$('#modalDeleteStockOut #formDeleteStockOut').attr('action', '<?= site_url('stock/out/del/'.$data->stock_id.'/'.$data->item_id) ?>')" class="btn btn-danger btn-xs">
                <i class="fa fa-trash"></i>Delete
              </a>
            </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
      </div> 
    </div>
</section>

<div class="modal fade" id="modalDeleteStockOut">
  <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h6 class="modal-title">Yakin Akan Menghapus Data Stock Out Ini?</h6>
          </div>
          <div class="modal-footer">
              <form id="formDeleteStockOut" action="" method="post">
                  <button class="btn btn-default" data-dismiss="modal" style="font-size: 12px;">Tidak</button>
                  <button class="btn btn-danger" type="submit" style="font-size: 12px;">Ya. Hapus</button>
              </form>
          </div>
      </div>
  </div>
</div>