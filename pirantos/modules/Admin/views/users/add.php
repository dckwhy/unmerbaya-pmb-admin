<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Users</h5>
                                </div>
                                <ul class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Users</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Add</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="main-body">
                    <div class="page-wrapper"> 
                        <div class="row"> 
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add User</h5> 
                                        <a href="<?php echo base_url('admin/users/add') ?>" class="btn shadow-2 btn-success pull-right">Add</a> 
                                        <a href="<?php echo base_url('admin/users/data') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <form  id="input_data">
                                        <div class="card-block"> 
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" required name="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" required name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" required name="uname" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <?php 
                                                        function randomPassword() {
                                                            $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                                                            $pass = array(); 
                                                            $alphaLength = strlen($alphabet) - 1; 
                                                            for ($i = 0; $i < 10; $i++) {
                                                                $n = rand(0, $alphaLength);
                                                                $pass[] = $alphabet[$n];
                                                            }
                                                            return implode($pass);  
                                                        }
                                                        ?>
                                                        <input type="text" class="form-control" required value="<?= randomPassword() ?>" name="upass" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control" name="status" required>
                                                            <option selected value="1">Active</option> 
                                                            <option value="0">Non Active</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Previllage</label>
                                                        <select class="form-control" name="previlege" required>
                                                            <option value="">Choose --</option>
                                                            <option value="Super Admin">Super Admin</option> 
                                                            <option value="Admin">Admin</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Blocked Account</label> 
                                                        <select class="form-control" name="display_data" required>
                                                            <option selected value="none">None</option> 
                                                            <option value="block">Block</option> 
                                                        </select>
                                                    </div>
                                                </div> --> 
                                                <input type="hidden" name="table_name" value="data_admin">
                                                <input type="hidden" name="checker[]" value="uname">
                                                <input type="hidden" name="checker[]" value="email">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <button type="submit" class="btn btn-primary pull-right"><i class="feather icon-send"></i>Save </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="button" style="display:none" class="btn btn-success btn-sm sukses_menyimpan" id="sukses_menyimpan"></button>
<button type="button" style="display:none" class="btn btn-success btn-sm gagal_menyimpan" id="gagal_menyimpan"></button>
<button type="button" style="display:none" class="btn btn-success btn-sm error_menyimpan" id="error_menyimpan"></button>
<button type="button" style="display:none" class="btn btn-success btn-sm tersedia" id="tersedia"></button>
</div>  
<script type="text/javascript"> 
$('#input_data').submit(function(){ 
    $('.loading').show();
    $.ajax({
        type :"post",  
        url : "<?php echo base_url('admin/users/insert_data_checker') ?>",  
        cache :false,
        data: $(this).serialize(),
        dataType: 'json', 
        success : function(data) {
            if (data.msg == 'success') {
                $('.sukses_menyimpan').click();
                setTimeout(function(){
                    window.location = "<?php echo base_url('admin/users') ?>";
                },2000)
            }else if(data.msg == 'fail'){
                $('.gagal_menyimpan').click(); 
            }else{
                $('.tersedia').click();  
            }
            $('.loading').hide(); 
        },  
        error : function() {    
            $('.loading').hide(); 
            $('.error_menyimpan').click();  
        }
    });
    return false;
});
</script>
