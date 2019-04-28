<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration Page</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css'); ?>">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<link rel="shortcut icon" href="<?php echo base_url('assets/dist/img/favicon.ico'); ?>">
</head>
<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="#"><img src="<?php echo base_url('assets/dist/img/logo.png'); ?>"></a>
		</div>
		<div class="register-box-body">
			<p class="login-box-msg">Daftar</p>
			<form action="<?php echo site_url('register/regis');?>" method="post">
				<?php echo $this->session->flashdata('msg');?>
				<div class="form-group has-feedback">
					<input type="text" name="nip" class="form-control" placeholder="NIP" required>
					<span class="glyphicon glyphicon-card form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<select type="text" name="satker" class="form-control" required>
						<option value="" selected>Satker</option>
						<?php
						foreach ($satker as $value) {
							echo '<option value="'.$value["satker_id"].'">'.$value["nama_satker"].'</option>';
						}
						?>
					</select>
				</div>
				<div class="form-group has-feedback">
					<input type="email" name="email" class="form-control" placeholder="Email" required>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input id="confirm_confirm" type="password" class="form-control" placeholder="Ketik ulang password" required>
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<select name="level" class="form-control" required>
						<option value="" selected>Level</option>
						<option value="1">Admin</option>
						<option value="2">User</option>
					</select>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<label>
								<input type="checkbox"> Setuju dengan <a href="#">persetujuan</a>
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<a href="login" class="text-center">Sudah Terdaftar</a>
		</div>
		<!-- /.form-box -->
	</div>
	<!-- /.register-box -->
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});
</script>
<script type="text/javascript">
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");
	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}
	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>