 <!DOCTYPE html>
 <html lang="en"> 
 <head>
 	<title>Administrator - Signin</title> 
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
 	<link rel="icon" href="<?php echo base_url() ?>prabotan/admin/images/favicon.ico" type="image/x-icon"> 
 	<link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/fonts/fontawesome/css/fontawesome-all.min.css"> 
 	<link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/plugins/animation/css/animate.min.css"> 
 	<link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/css/style.css"> 
 	<link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/css/pages/pnotify.css">  
    <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/plugins/pnotify/css/pnotify.custom.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/css/pages/pnotify.css">
 	 
 </head> 
 <body>
 	<div class="auth-wrapper">
 		<div class="auth-content">
 			<div class="auth-bg">
 				<span class="r"></span>
 				<span class="r s"></span>
 				<span class="r s"></span>
 				<span class="r"></span>
 			</div>
 			<div class="card">
 				<div class="card-body text-center">
 					<div class="mb-4">
 						<i class="feather icon-unlock auth-icon"></i>
 					</div>
 					<h3 class="mb-4">Login</h3>
 					<form  id="form_auth">
 						<div class="input-group mb-3">
 							<input type="email" id="username" name="login-email" tabindex="-1"  class="form-control" placeholder="Email" required>
 						</div>
 						<div class="input-group mb-4">
 							<input type="password" id="password" name="login-password" tabindex="-1"  class="form-control" placeholder="password" required>
 						</div> 
 						<button type="submit" id="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
 						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html">Reset</a></p> 
 					</form>
 				</div>
 			</div>
 		</div> 
 		<button type="button" style="display:none" class="btn btn-success btn-sm notifsukses" id="pnotify-success"></button>
 		<button type="button" style="display:none" class="btn btn-success btn-sm notifgagal" id="pnotify-danger"></button>
 	</div>  
 	<script src="<?php echo base_url() ?>prabotan/admin/js/vendor-all.min.js"></script>
 	<script src="<?php echo base_url() ?>prabotan/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
 	<script src="<?php echo base_url() ?>prabotan/admin/js/pcoded.min.js"></script> 
 	<script src="<?php echo base_url() ?>prabotan/admin/plugins/pnotify/js/pnotify.custom.min.js"></script> 
 </body>
 </html>  
 <script type="text/javascript">
 $('#form_auth').submit(function(){
 	$('.tunggu').show();
 	$.ajax( {  
 		type :"post",  
 		url : "<?php echo base_url('authenticate/login') ?>",  
 		cache :false,
 		data: $(this).serialize(),
 		dataType: 'json',
 		success : function(data) {
 			if(data.auth_message == 'success'){
 				$('#notification-fail').hide(); 
 				$('.notifsukses').click();
 				setTimeout(function(){
 					window.location = '<?php echo base_url('admin') ?>';
 				},2000)
 			} else{
 				$('.tunggu').hide();
 				$('.notifgagal').click(); 
 			}
 		},  
 		error : function() {  
 			$('.tunggu').hide();
 			alert('error!');
 		}
 	});
 	return false;
 });
 </script> 
 <script>
 $(function() {  

 	$('#pnotify-success').on('click', function () {
 		new PNotify({
 			title: 'Success notice',
 			text: 'Sign in success, wellcome to Administrator Control.',
 			type: 'success'
 		});
 	});
 	$('#pnotify-danger').on('click', function () {
 		new PNotify({
 			title: 'Warning notice',
 			text: 'Your username or password is incorrect, please try again !',
 			type: 'danger'
 		});
 	});
 })
 </script>