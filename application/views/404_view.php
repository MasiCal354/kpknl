<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>404 Error Page</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-warning"></i> Error</a></li>
		<li class="active">404 error</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="error-page">
		<h2 class="headline text-yellow"> 404</h2>
		<div class="error-content">
			<h3><i class="fa fa-warning text-yellow"></i> Halaman yang anda buka tidak ditemukan!</h3>
			<p>Halaman ini tidak ada dalam sistem. silahkan <a href="<?php echo base_url('index.php/page'); ?>">kembali ke dashboard</a> atau cari halaman lain.</p>
			<form class="search-form">
				<div class="input-group">
					<input type="text" name="search" class="form-control" placeholder="Search">
					<div class="input-group-btn">
						<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i></button>
					</div>
				</div>
				<!-- /.input-group -->
			</form>
		</div>
		<!-- /.error-content -->
	</div>
	<!-- /.error-page -->
</section>
<!-- /.content -->