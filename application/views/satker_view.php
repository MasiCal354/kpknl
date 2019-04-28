<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Pusat Data
		<small>Satuan Kerja</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-database"></i> Pusat Data</a></li>
		<li class="active">Satuan Kerja</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Pusat Data Satuan Kerja</h3>
					<div align="right">
						<a class="btn btn-success" href="<?php echo base_url('index.php/page/add_satker'); ?>"><i class="fa fa-plus"></i> Tambah Satuan Kerja</a>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="satker" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nama Satuan Kerja</th>
								<th>Alamat Satuan Kerja</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($satker as $row) {
								echo "
								<tr>
									<td>".$row['satker_id']."</td>
									<td>".$row['nama_satker']."</td>
									<td>".$row['alamat_satker']."</td>
									<td>
										<a href='".base_url('index.php/page/edit_satker/').$row['satker_id']."' class='btn btn-primary'><i class='fa fa-pencil'></i> Ubah</a>
										<a href='#' class='btn btn-danger' onclick='confirm_delete(".$row['satker_id'].")'><i class='fa fa-trash'></i> Hapus</a>
									</td>
								</tr>
								";
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Nama Satuan Kerja</th>
								<th>Alamat Satuan Kerja</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>

<script type="text/javascript">
	function confirm_delete(id){
		var x = confirm("Apakah anda yakin ingin menghapus satuan kerja ini?");
		if(x){
			window.location.replace("<?php echo base_url('index.php/page/delete_satker/'); ?>"+id);
		}
	}
</script>