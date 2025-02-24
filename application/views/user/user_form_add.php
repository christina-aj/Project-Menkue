<section class="content-header">
	<hi>Users
		<small>Pengguna</small>
	</hi>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Users</li>
	</ol>
</section>

<!--- Main -->

<section class="content">
	<?php $this->view('messages')?>
    <div class ="box">
        <div class="box-header">
            <h3 class="box-title">Add Users</h3>
            <div class= "pull-right">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
                <div class="">
                    <div class="col-md-4 col-md-offset-4">
                        <?php // echo validation_errors(); ?>
                        <form action="" method="post">
                            <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                                <label>Name *</label>
                                <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control">
                                <?=form_error('fullname')?>
                            </div>
                            <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                                <label>Username *</label>
                                <input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
                                <?=form_error('username')?>
                            </div>
                            <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                                <label>Password *</label>
                                <input type="password" name="password" value="<?=set_value('password')?>" class="form-control">
                                <?=form_error('password')?>
                            </div>
                            <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                                <label>Password Confirmation *</label>
                                <input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control">
                                <?=form_error('passconf')?>
                            </div>
                                <label>Alamat *</label>
                                <textarea name="alamat" class="form-control"><?=set_value('alamat')?></textarea>
                                <?=form_error('alamat')?>
                            <div class="form-group <?=form_error('level')? 'has-error' : null?>">
                                <label>Level *</label>
                                <select name="level" class="form-control" width="50%">
                                    <option value="">Pilih</option>
                                    <option value="1" <?=set_value('level') == 1 ? "selected": null ?>>Admin</option>
                                    <option value="2" <?=set_value('level') == 2 ? "selected": null ?>>Karyawan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type = "submit"class="btn btn-succes btn-flat">
                                    <i class="fa fa-paper-plane"></i>Save
                                </button>
                                <button type = "Reset"class="btn btn-flat">Reset</button>  
                            </div>
                        </form>
                    </div>
                </div>
        </div>
</section>