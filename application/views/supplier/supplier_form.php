<section class="content-header">
	<hi>Suppliers
		<small>Barang Masuk</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Users</li>
	</ol>
</section>

<section class="content">
	
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
            <div class= "pull-right">
                <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
                <div class="">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('supplier/process')?>" method="post">
                            <div class="form-group">
                                <label>Supplier Name *</label>
                                <input type="hidden" name="id" value="<?=$row->supplier_id?>">
                                <input type="text" name="supplier_name" value="<?=$row->name?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="number" name="phone" value="<?=$row->phone?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat *</label>
                                <input name = "almt" type="text" value="<?=$row->alamat?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi *</label>
                                <input name = "desc" type="text" value="<?=$row->deskripsi?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type = "submit" name="<?=$page?>"class="btn btn-succes btn-flat">
                                    <i class="fa fa-paper-plane"></i>Save
                                </button>
                                <button type = "Reset"class="btn btn-flat">Reset</button>  
                            </div>
                        </form>
                    </div>
                </div>
        </div>
</section>