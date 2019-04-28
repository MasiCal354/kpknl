<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Pusat Data
		<small>Ubah Profil Pengguna</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-database"></i> Pusat Data</a></li>
		<li class="active">Ubah Profil Pengguna</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Ubah Profil Pengguna</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form action="<?php echo site_url('form/edit_profile'); ?>" method="post">
						<div class="form-group">
							<label>NIP</label>
							<input class="form-control" type="text" name="nip" value="<?php echo $user_detail['nip']; ?>" required>
						</div>
						<div class="form-group">
							<label>User Group</label>
							<input class="form-control" type="text" name="user_group" value="<?php echo $user_detail['user_group']; ?>" required>
						</div>
						<div class="form-group">
							<label>Nomor HP</label>
							<input class="form-control" type="text" name="phone" value="<?php echo $user_detail['phone']; ?>" required>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input class="form-control" type="text" name="full_name" value="<?php echo $user_detail['full_name']; ?>" required>
						</div>
						<div class="form-group">
							<label>Korwil</label>
							<input class="form-control" type="text" name="korwil" value="<?php echo $user_detail['korwil']; ?>" required>
						</div>
						<div class="form-group">
							<label>Eselon</label>
							<input class="form-control" type="text" name="eselon" value="<?php echo $user_detail['eselon']; ?>" required>
						</div>
						<div class="form-group">
							<label>K/L</label>
							<input class="form-control" type="text" name="kl" value="<?php echo $user_detail['kl']; ?>" required>
						</div>
						<div class="form-group">
							<label>KPKNL</label>
							<input class="form-control" type="text" name="kpknl" value="<?php echo $user_detail['kpknl']; ?>" required>
						</div>
						<div class="form-group">
							<label>Kanwil</label>
							<input class="form-control" type="text" name="kanwil" value="<?php echo $user_detail['kanwil']; ?>" required>
						</div>
						<button class="btn btn-info"><i class="fa fa-pencil"></i> Ubah Profil</button>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>