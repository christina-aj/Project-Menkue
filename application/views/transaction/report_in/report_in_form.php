<section class="content-header">
    <h1>Report
        <small>Laporan Transaksi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
        <li class="active">Report</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Report</h3>
            <div class="pull-right">
                <a href="<?= site_url('report/in') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('report/process') ?>
                    <!-- <form action="<?= site_url('report/process') ?>" method="post"> -->
                        <div class="form-group">
                                <label>Customer *</label>
                                <?php echo form_dropdown('customer', $customer , $selectedcustomer,
                                ['class' => 'form-control', 'required' => 'required']) ?> 
                        </div>
                        <div class="form-group">
                            <label>Total Harga *</label>
                            <input type="text" name="total_harga" value="<?= $row->totalharga ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>QTY *</label>
                            <input name="qty" type="number" value="<?= $row->qty ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi *</label>
                            <input name="descc" type="text" value="<?= $row->deskripsi ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <?php if ($page == 'add') { ?>
                                <button type="submit" name="add" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save
                                </button>
                            <?php } else { ?>
                                <input name="report_id" type="hidden" value="<?= $row->report_id ?>">
                                <button type="submit" name="edit" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save
                                </button>
                            <?php } ?>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</section>
