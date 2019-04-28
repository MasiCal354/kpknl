<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Database
		<small>Satuan Kerja</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-database"></i> Pusat Data</a></li>
		<li><a href="#">Satuan Kerja</a></li>
		<li class="active">Ubah</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><i class="fa fa-pencil"></i> Ubah Satuan Kerja</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form action="<?php echo site_url('form/update_satker/').$satker['satker_id']; ?>" method="post">
						<div class="form-group">
							<label>Nama Satuan Kerja</label>
							<input class="form-control" type="text" name="nama_satker" value="<?php echo $satker['nama_satker']; ?>" required>
						</div>
						<div class="form-group">
							<label>Alamat Satuan Kerja</label>
							<input class="form-control" type="text" name="alamat_satker" value="<?php echo $satker['alamat_satker']; ?>" required>
						</div>
						<button class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>