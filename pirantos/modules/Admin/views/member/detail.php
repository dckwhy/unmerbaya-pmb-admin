<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Members</h5>
                                </div>
                                <ul class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Members</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Detail</a></li>
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
                                        <h5>Detail Members</h5> 
                                        <a href="<?php echo base_url('admin/Members/data') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('data_user')->row();
                                    ?>
                                    <form  id="input_data">
                                        <div class="card-block"> 
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-12"> 
                                                    <label>Foto Profile</label>
                                                    <br>
                                                    <img src="<?php echo base_url('prabotan/image/photo/'.@$row->img) ?>" alt="" id="preview" style="width:20%; margin:20px auto;">
                                                    <br><br>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value="<?php echo @$row->name ?>" placeholder="Name" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="tel" class="form-control" name="phone" value="<?php echo @$row->phone ?>" placeholder="Phone" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12" required disabled>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" value="<?php echo @$row->email ?>" placeholder="Email" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Password</label> 
                                                        <input type="text" class="form-control" name="password" value="<?php echo @$row->pass ?>" placeholder="Password" required disabled>
                                                    </div>
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
    <script type="text/javascript"> 
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        }); 

        $(function() {
            $('.summernote').summernote('disable'); 

        });

        function uploadFile(file) {
            data = new FormData();
            data.append("file", file);

            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo base_url('admin/event/upload_img_summernote') ?>",  
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $('.summernote').summernote("insertImage", url);
                }
            });

        }

        $('#input_data').on('submit', function (e) {
            $('.loading').hide(); 
            $.ajax({
                type :"post",  
                url : "<?php echo base_url('admin/Users/detail') ?>",  
                cache :false,
                data: $(this).serialize(),
                dataType: 'json',
                success : function(data) {
                    if (data.msg == 'success') {
                        $('.sukses_menyimpan').click();
                        setTimeout(function(){
                            window.location = "<?php echo base_url('admin/users/detail') ?>";
                        },2000)
                    }else{
                        $('.gagal_menyimpan').click();  
                    }
                    $('.loading').hide(); 
                },  
                error : function() {  
                    $('.gagal_menyimpan').click();   
                    $('.loading').hide(); 
                }
            }); 
            return false;
        });
    </script>



