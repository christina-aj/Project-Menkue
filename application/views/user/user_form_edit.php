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
            <h3 class="box-title">Edit Users</h3>
            <div class= "pull-right">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
                <div class="">
                <div class="col-md-4 col-md-offset-4">
    <form action="" method="post">
        <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
            <label>Name *</label>
            <input type="hidden" name="user_id" value="<?=$row->user_id?>">
            <input type="text" name="fullname" value="<?=$this->input->post('fullname') ? $this->input->post('fullname') :  $row->name ?>" class="form-control" width="50%">
            <?=form_error('fullname')?>
        </div>
        <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
            <label>Username *</label>
            <input type="text" name="username" value="<?=$this->input->post('username') ? $this->input->post('username') :  $row->username ?>" class="form-control" width="50%">
            <?=form_error('username')?>
        </div>
        <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
            <label>Password</label>
            <input type="password" name="password" value="<?=$this->input->post('password') ?>" class="form-control" width="50%">
            <?=form_error('password')?>
        </div>
        <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
            <label>Password Confirmation</label>
            <input type="password" name="passconf" value="<?=$this->input->post('passconf') ?>" class="form-control" width="50%">
            <?=form_error('passconf')?>
        </div>
        <div class="form-group">
            <label>Alamat *</label>
            <textarea name="alamat" class="form-control" width="50%"><?=$this->input->post('alamat') ? $this->input->post('alamat') :  $row->alamat ?></textarea>
            <?=form_error('alamat')?>
        </div>
        <div class="form-group <?=form_error('level')? 'has-error' : null?>">
            <label>Level </label>
            <select name="level" class="form-control" width="50%">
                <?php $level = $this->input->post('level') ? $this->input->post('level') :  $row->level ?>
                <option value="1" >Admin</option>
                <option value="2" <?=$level == 2 ? 'selected' : null?> >Karyawan</option>
            </select>
            <?=form_error('level')?>
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