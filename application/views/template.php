<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menkue - Kelompok1</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini <?=$this->uri->segment(1) == 'sale' ? 'sidebar-collapse' : null?>">

	<div class="wrapper">
		<header class="main-header">
			<a href="<?=base_url('dashboard')?>" class="logo">
				<span class="logo-mini">m<b>P</b></span>
				<span class="logo-lg">Men<b>Kue</b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown tasks-menu">
						</li>
						<!-- User Account -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image">
								<span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
									<p><?=$this->fungsi->user_login()->name?>
										<small><?=$this->fungsi->user_login()->alamat?></small>
									</p>
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- Left side column -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
					</div>
					<div class="pull-left info">
						<p><?=ucfirst($this->fungsi->user_login()->username)?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- sidebar menu -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
						<a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
					</li>
					<li <?=$this->uri->segment(1) == 'supplier' ? 'class="active"' : '' ?>>
						<a href="<?=site_url('supplier')?>" data-toggle="tooltip" title="Untuk mengelola supplier barang anda."><i class="fa fa-truck"></i> <span>Suppliers</span></a>
					</li>
					<li <?=$this->uri->segment(1) == 'customer' ? 'class="active"' : '' ?>>
						<a href="<?=site_url('customer')?>" data-toggle="tooltip" title="Untuk mengelola customer barang anda."><i class="fa fa-users"></i> <span>Customers</span>
						</a>
					</li>
					<li class="treeview <?=$this->uri->segment(1) == 'kategori' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
						<a href="#">
							<i class="fa fa-archive"></i>
							<span>Products</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?=$this->uri->segment(1) == 'kategori' ? 'class="active"' : '' ?>>
								<a href="<?=site_url('kategori')?>" data-toggle="tooltip" title="Untuk mengecek apa saja kategori barang anda."><i class="fa fa-circle-o"></i> Categories</a></li>
							<li <?=$this->uri->segment(1) == 'unit' ? 'class="active"' : '' ?>>
								<a href="<?=site_url('unit')?>" data-toggle="tooltip" title="Untuk mengecek apa saja unit barang anda."><i class="fa fa-circle-o"></i> Units</a></li>
							<li <?=$this->uri->segment(1) == 'item' ? 'class="active"' : '' ?>>
								<a href="<?=site_url('item')?>" data-toggle="tooltip" title="Untuk mengecek apa saja item barang yang anda miliki."><i class="fa fa-circle-o"></i> Items</a></li>
						</ul>
					</li>
					<li class="treeview <?=$this->uri->segment(1) == 'stock' || $this->uri->segment(1) == 'report' || $this->uri->segment(1) == 'sale' || $this->uri->segment(1) == 'sale' ? 'active' : '' ?>">
						<a href="#">
							<i class="fa fa-shopping-cart"></i>
							<span>Transaction</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?=$this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ? 'class="active"' : '' ?>>
								<a href="<?= base_url('stock/in') ?>" data-toggle="tooltip" title="Untuk mengecek stok masuk barang anda."><i class="fa fa-circle-o"></i> Stock In</a>
							</li>
							<li <?=$this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'out' ? 'class="active"' : '' ?>>
								<a href="<?= base_url('stock/out') ?>" data-toggle="tooltip" title="Untuk mengecek stok keluar barang anda."><i class="fa fa-circle-o"></i> Stock Out</a>
							</li>
							<li <?=$this->uri->segment(1) == 'report' && $this->uri->segment(2) == 'in' ? 'class="active"' : '' ?>>
								<a href="<?= base_url('report/in') ?>" data-toggle="tooltip" title="Untuk mengecek report barang anda."><i class="fa fa-circle-o"></i> Report</a>
							</li>
						</ul>
        			</li>
					<?php if($this->fungsi->user_login()->level == 1){?>
					<li class="header">SETTINGS</li>
					<li><a href="<?=site_url('user')?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
					<?php } ?>
				</ul>
			</section>
		</aside>

		<!-- Content Wrapper -->
		<div class="content-wrapper">
		<?php echo $contents ?>
        </div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2023 <a href="Kelompok 1 ASD UWIKA">Kelompok 1</a>.</strong> All rights reserved.
		</footer>

	</div>

	<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	<script>
	$(document).ready(function(){
		$('#table1').DataTable()
	})
	</script>

	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		$('#table1').DataTable();
	});
	</script>

</body>
</html>