<section class="content-header">
	<hi>Stock In
		<small>Barang Masuk / Pembelian</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
		<li class="active">Stock In</li>
	</ol>
</section>

<!--- Main -->

<section class="content">
    <?php $this->view('messages')?>
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Data Stock In</h3>
            <div class= "pull-right">
                <a href="<?=site_url('stock/print_stock_in')?>" class="btn btn-info btn-flat">
                    <i class="fa fa-print"></i> Print
                </a>
                <a href="<?=site_url('stock/in/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Add Stock In
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item Code</th>
                        <th>Product Item</th>
                        <th>Qty</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $no = 1;
                    foreach($row as $key => $data){ ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?></td>
                        <td><?=$data->barcode?></td>
                        <td><?=$data->item_name?></td>
                        <td class="text-right"><?=$data->qty?></td>
                        <td class="text-center"><?=indo_date($data->date)?></td>
                        <td class="text-center" width="160px">
                            <a id="set_dtl" class="btn btn-default btn-xs"
                                data-toggle="modal" data-target="#modal-detail"
                                data-barcode="<?=$data->barcode?>" 
                                data-itemname="<?=$data->item_name?>" 
                                data-detail="<?=$data->detail?>"
                                data-suppliername="<?=$data->supplier_name?>"
                                data-qty="<?=$data->qty?>"
                                data-date="<?=indo_date($data->date)?>">
                                <i class="fa fa-eye"></i> Details
                            </a>
                            <!-- <a href="<?=site_url('stock/in/del/'.$data->stock_id."/".$data->item_id)?>" onclick = "return confirm ('Apakah data ingin di hapus?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                            </a> -->
                            <a href="#modalDeleteStockIn" data-toggle="modal" onclick = "$('#modalDeleteStockIn #formDeleteStockIn').attr('action', '<?=site_url('stock/in/del/'.$data->stock_id."/".$data->item_id)?>')" class="btn btn-danger btn-xs">
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

<div class="modal fade" id="modalDeleteStockIn">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h6 class="modal-title">Yakin Akan Menghapus Data Stock In Ini?</h6>
            </div>
            <div class="modal-footer">
                <form id="formDeleteStockIn" action="" method="post">
                    <button class="btn btn-default" data-dismiss="modal" style="font-size: 12px;">Tidak</button>
                    <button class="btn btn-danger" type="submit" style="font-size: 12px;">Ya. Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" >&times;</span>
                </button>
                <h4 class="modal-title">Stock In Detail</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="width: 35%">Barcode</th>
                            <td><span id="barcode"></span></td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><span id="detail"></span></td>
                        </tr>
                        <tr>
                            <th>Supplier Name</th>
                            <td><span id="supplier_name"></span></td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td><span id="qty"></span></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><span id="date"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click', '#set_dtl', function() {
        var barcode = $(this).data('barcode');
        var itemname = $(this).data('itemname');
        var detail = $(this).data('detail');
        var suppliername = $(this).data('suppliername');
        var qty = $(this).data('qty');
        var date = $(this).data('date');
        $('#barcode').text(barcode);
        $('#item_name').text(itemname);
        $('#detail').text(detail);
        $('#supplier_name').text(suppliername);
        $('#qty').text(qty);
        $('#date').text(date);
        $('#detail').text(detail);
    })
})
</script>

