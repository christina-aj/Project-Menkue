<section class="content-header">
	<hi>Item
		<small>Data Barang</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Items</li>
	</ol>
</section>

<section class="content">
    <?php $this->view('messages')?>
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> item</h3>
            <div class= "pull-right">
                <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
                <div class="">
                    <div class="col-md-4 col-md-offset-4">
                        <?php echo form_open_multipart('item/process') ?>
                            <div class="form-group">
                                <label>Item Code *</label>
                                <!-- <input type="hidden" name="id" value="<?=$row->barcode?>"> -->
                                <input type="hidden" name="id" value="<?=$row->item_id?>">
                                <input type="text" name="barcode" value="<?=$row->barcode?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Produk *</label>
                                <input type="text" name="nama_produk" value="<?=$row->name?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Harga *</label>
                                <input type="text" name="harga" value="<?=$row->harga?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori *</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <?php foreach($kategori->result() as $key => $data) {  ?>                            
                                        <option value="<?= $data->kategori_id?>" <?=$data->kategori_id == $row->kategori_id ? "selected" : null?>><?=$data->name?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Unit *</label>
                                <?php echo form_dropdown('unit', $unit , $selectedunit,
                                ['class' => 'form-control', 'required' => 'required']) ?> 
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <?php if($page == 'edit'){
                                    if($row->image != null) { ?>
                                    <div style="margin-bottom:5px">
                                        <img src="<?=base_url('uploads/product/'.$row->image)?>" style="width:80%">
                                    </div>
                                    <?php
                                    }
                                } ?>
                                <input type="file" name="image" class="form-control">
                                <small>(Biarkan kosong jika tidak <?=$page == 'edit' ? 'diganti' : "ada"?>)</small>
                            </div>
                            <div class="form-group">
                                <button type = "submit" name="<?=$page?>"class="btn btn-succes btn-flat">
                                    <i class="fa fa-paper-plane"></i>Save
                                </button>
                                <button type = "Reset"class="btn btn-flat">Reset</button>  
                            </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
        </div>
</section>