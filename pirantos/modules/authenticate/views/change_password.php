<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Password</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
  <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
  <meta name="author" content="Codedthemes" /> 
  <link rel="icon" href="<?php echo base_url() ?>prabotan/admin/images/favicon.ico" type="image/x-icon"> 
  <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/plugins/animation/css/animate.min.css"> 
  <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/fonts/fontawesome/css/fontawesome-all.min.css"> 
  <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/css/style.css">
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
        <form id="input_data">
          <div class="card-body text-center">
            <?php 
            $admin_auth = $this->session->userdata('admin_auth');
            ?>
            <h5 class="mb-4">Password</h5>
            <input type="hidden" value="<?php echo $admin_auth->id ?>" name="id">
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="pass_lama" placeholder="Current Password">
            </div>                  
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="pass_baru" id="pass_baru" placeholder="New Password">
            </div>
            <div class="input-group mb-4">
              <input type="password" class="form-control" name="retype_pass_baru" id="retype_pass_baru"  placeholder="Re-Type New Password">
            </div>
            <button type="submit" class="btn btn-primary shadow-2 mb-4">Change Password</button>
            <p class="mb-0 text-muted">Cancel change password ? <a href="<?php echo base_url('admin/dashboard') ?>"> Back</a></p>
          </div>
        </form>
      </div>
    </div>
  </div> 

  <script src="<?php echo base_url() ?>prabotan/admin/js/vendor-all.min.js"></script>
  <script src="<?php echo base_url() ?>prabotan/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>prabotan/admin/js/pcoded.min.js"></script>
  <script src="<?php echo base_url() ?>prabotan/admin/plugins/pnotify/js/pnotify.custom.min.js"></script> 

</body>
</html>
<script type="text/javascript"> 
$('#input_data').submit(function(){ 
  pass_baru = $('#pass_baru').val();
  retype_pass_baru = $('#retype_pass_baru').val();
  if(pass_baru == retype_pass_baru){

    $('.loading').show();
    $.ajax({
      type :"post",  
      url : "<?php echo base_url('authenticate/update_password') ?>",  
      cache :false,
      data: $(this).serialize(),
      dataType: 'json', 
      success : function(data) {
        if (data.msg == 'success') {
          notif_success()
          setTimeout(function(){
            window.location = "<?php echo base_url('admin/dashboard') ?>";
          },2000)
        }else if(data.msg == 'salah'){   
          curent_wrong()
        }else{   
          notif_fail()
        }
        $('.loading').hide(); 
      },  
      error : function() {    
        $('.loading').hide(); 
        notif_fail() 
      }
    });
    return false;
  }else{
    retype_salah()
  }
});
</script>
<script>
function retype_salah(){
  new PNotify({
    title: 'Warning notice',
    text: 'Retype password wrong, please try again !',
    type: 'danger'
  });
} 
function notif_success(){
  new PNotify({
    title: 'Success notice',
    text: 'Change password succesfull.',
    type: 'success'
  });
} 
function notif_fail(){
  new PNotify({
    title: 'Warning notice',
    text: 'Change password Fail, please try again !',
    type: 'danger'
  });
} 
function curent_wrong(){
  new PNotify({
    title: 'Warning notice',
    text: 'Your Current password Fail, please try again !',
    type: 'danger'
  });
} 
</script>
