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
                                    <li class="breadcrumb-item"><a href="javascript:">Update</a></li>
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
                                        <h5>Update Users</h5> 
                                        <a href="<?php echo base_url('admin/users/add') ?>" class="btn shadow-2 btn-success pull-right">Add</a> 
                                        <a href="<?php echo base_url('admin/users/data') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('data_admin')->row();
                                    ?>
                                    <form  id="input_data">
                                        <div class="card-block"> 
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" required name="name" value="<?php echo @$row->name ?>" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" required name="email" value="<?php echo @$row->email ?>" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="uname" value="<?php echo @$row->uname ?>" placeholder="Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Password</label> 
                                                        <input type="text" class="form-control" required name="upass" value="<?php echo @$row->upass ?>" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control" name="status" value="<?php echo @$row->status ?>" required>
                                                            <option <?php if(@$row->status == '1'){ echo 'selected'; } ?> value="1">Active</option> 
                                                            <option <?php if(@$row->status == '0'){ echo 'selected'; } ?>value="0">Non Active</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Privilege</label>
                                                        <input type="text" class="form-control" name="previlege" value="<?php echo @$row->previlege ?>" placeholder="Privilege">
                                                    </div>
                                                </div>  
                                                <input type="hidden" name="id" value="<?= @$row->id ?>">
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
   $(document).ready(function () {
       function readURL(input) {

           if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                   $('#preview').attr('src', e.target.result);
               }

               reader.readAsDataURL(input.files[0]);
           }
       }

       $("#imgInp").change(function () {
           readURL(this);
       });

       $(function () {
           $('.summernote').summernote({
               height: 200,
               callbacks: {
                   onImageUpload: function (files) {
                       uploadFile(files[0]);
                   }
               }
           });

       });

       function uploadFile(file) {
           data = new FormData();
           data.append("file", file);

           $.ajax({
               data: data,
               type: "POST",
               url: "<?php echo base_url('admin/Users/upload_img_summernote') ?>",
               cache: false,
               contentType: false,
               processData: false,
               success: function (url) {
                   $('.summernote').summernote("insertImage", url);
               }
           });

       }

       $('#input_data').on('submit', function (e) {
        e.preventDefault();
                    // $('#content_berita').val($('#berita').summernote('code'));

                    $('.loading').show();
                    $.ajax({
                       type: "post",
                       url: "<?php echo base_url('admin/Users/update_data') ?>",
                       cache: false,
                       enctype: 'multipart/form-data',
                       data: new FormData($('#input_data')[0]),
                       processData: false,
                       contentType: false,
                       dataType: 'json',
                       success: function (data) {
                           if (data.msg == 'success') {
                               $('.sukses_menyimpan').click();
                               setTimeout(function () {
                                   window.location =
                                   "<?php echo base_url('admin/users') ?>";
                               }, 2000)
                           } else {
                               $('.gagal_menyimpan').click();
                           }
                           $('.loading').hide();
                       },
                       error: function () {
                           $('.gagal_menyimpan').click();
                           $('.loading').hide();
                       }
                   });
                    return false;
                });
   });

</script>


