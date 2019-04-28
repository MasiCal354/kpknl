<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Pusat Data
		<small>Profil Pengguna</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-database"></i> Pusat Data</a></li>
		<li class="active">Profil Pengguna</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Profil Pengguna</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<?php
					if($user_detail == False){
						echo "<p>Profil anda tidak ditemukan, silahkan tambahkan dengan mengisi borang dalam link di bawah ini:</p>";
						echo '<a class="btn btn-success" href="'.site_url("page/add_profile").'"><i class="fa fa-plus"></i> Tambah Profil</a>';
					}else{
						echo '
						<table class="table table-striped table-hover">
							<tbody>
								<tr>
									<td>NIP</td>
									<td>'.$user_detail["nip"].'</td>
								</tr>
								<tr>
									<td>User Group</td>
									<td>'.$user_detail["user_group"].'</td>
								</tr>
								<tr>
									<td>Nomor HP</td>
									<td>'.$user_detail["phone"].'</td>
								</tr>
								<tr>
									<td>Nama Lengkap</td>
									<td>'.$user_detail["full_name"].'</td>
								</tr>
								<tr>
									<td>Korwil</td>
									<td>'.$user_detail["korwil"].'</td>
								</tr>
								<tr>
									<td>Eselon</td>
									<td>'.$user_detail["eselon"].'</td>
								</tr>
								<tr>
									<td>K/L</td>
									<td>'.$user_detail["kl"].'</td>
								</tr>
								<tr>
									<td>KPKNL</td>
									<td>'.$user_detail["kpknl"].'</td>
								</tr>
								<tr>
									<td>Kanwil</td>
									<td>'.$user_detail["kanwil"].'</td>
								</tr>
							</tbody>
						</table>
						<a class="btn btn-info" href="'.site_url("page/edit_profile").'"><i class="fa fa-pencil"></i> Ubah Profil</a>
						';
					}
					?>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>