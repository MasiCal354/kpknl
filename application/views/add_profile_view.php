<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Pusat Data
		<small>Tambah Profil Pengguna</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-database"></i> Pusat Data</a></li>
		<li class="active">Tambah Profil Pengguna</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Tambah Profil Pengguna</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form action="<?php echo site_url('form/add_profile'); ?>" method="post">
						<div class="form-group">
							<label>NIP</label>
							<input class="form-control" type="text" name="nip" value="<?php echo $username; ?>" required>
						</div>
						<div class="form-group">
							<label>User Group</label>
							<input class="form-control" type="text" name="user_group" required>
						</div>
						<div class="form-group">
							<label>Nomor HP</label>
							<input class="form-control" type="text" name="phone" required>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input class="form-control" type="text" name="full_name" required>
						</div>
						<div class="form-group">
							<label>Korwil</label>
							<input class="form-control" type="text" name="korwil" required>
						</div>
						<div class="form-group">
							<label>Eselon</label>
							<input class="form-control" type="text" name="eselon" required>
						</div>
						<div class="form-group">
							<label>K/L</label>
							<input class="form-control" type="text" name="kl" required>
						</div>
						<div class="form-group">
							<label>KPKNL</label>
							<input class="form-control" type="text" name="kpknl" required>
						</div>
						<div class="form-group">
							<label>Kanwil</label>
							<input class="form-control" type="text" name="kanwil" required>
						</div>
						<button class="btn btn-success"><i class="fa fa-plus"></i> Tambah Profil</button>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>