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

<section class="content">
	
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Add Stock In </h3>
            <div class= "pull-right">
                <a href="<?=site_url('stock/in')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
                <div class="">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('Stock/process')?>" method="post">
                            <div class="form-group">
                                <label>Date *</label>
                                <input type="date" name="date" value="<?=date('Y-m-d')?>" class="form-control" required>
                            </div>
                            <div>
                                <label for="barcode">Item Code *</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="hidden" name="item_id" id="item_id">
                                <input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="item_name">Item Name *</label>
                                <input type="text" name="item_name" id="item_name" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="unit_name">Item Unit</label>
                                        <input type="text" name="unit_name" id="unit_name" value="-" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="stock">Initial Stock</label>
                                        <input type="text" name="stock" id="stock" value="-" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Detail *</label>
                                <input type="text" name="detail" class="form-control" placeholder="Kulakan / Tambahan / dsb" required>
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <select name="supplier" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <?php foreach($supplier as $i => $data) {
                                        echo '<option value="'.$data->supplier_id.'">'.$data->name.'</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Quantity *</label>
                                <input type="number" name="qty" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type = "submit" name="in_add"class="btn btn-succes btn-flat">
                                    <i class="fa fa-paper-plane"></i>Save
                                </button>
                                <button type = "Reset"class="btn btn-flat">Reset</button>  
                            </div>
                        </form>
                    </div>
                </div>
        </div>
</section>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Select Product Item</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Item Code</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($item as $i => $data) { ?>
                            <tr>
                                <td><?=$data->barcode?></td>
                                <td><?=$data->name?></td>
                                <td><?=$data->unit_name?></td>
                                <td class="text-right"><?=indo_currency($data->harga)?></td>
                                <td class="text-right"><?=$data->stock?></td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-info" id="select"
                                        data-id="<?=$data->item_id?>"|
                                        data-barcode="<?=$data->barcode?>"
                                        data-name="<?=$data->name?>"
                                        data-unit="<?=$data->unit_name?>"
                                        data-stock="<?=$data->stock?>">
                                        <i class="fa fa-check"></i> Select
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(document).on('click', '#select', function() {
        var item_id = $(this).data('id');
        var barcode = $(this).data('barcode');
        var name = $(this).data('name');
        var unit_name = $(this).data('unit');
        var stock = $(this).data('stock');
        $('#item_id').val(item_id);
        $('#barcode').val(barcode);
        $('#item_name').val(name);
        $('#unit_name').val(unit_name);
        $('#stock').val(stock);
        $('#modal-item').modal('hide');
    })
})
</script>