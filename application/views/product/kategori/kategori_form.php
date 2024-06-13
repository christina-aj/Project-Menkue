<section class="content-header">
	<hi>Kategori
		<small>Kategori Barang</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Kategori</li>
	</ol>
</section>

<section class="content">
	
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> kategori</h3>
            <div class= "pull-right">
                <a href="<?=site_url('kategori')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
                <div class="">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('kategori/process')?>" method="post">
                            <div class="form-group">
                                <label>kategori Name *</label>
                                <input type="hidden" name="id" value="<?=$row->kategori_id?>">
                                <input type="text" name="kategori_name" value="<?=$row->name?>" class="form-control" required>
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