<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Information</h5>
                                </div>
                                <ul class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Information</a></li>
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
                                        <h5>Add Information</h5> 
                                        <a href="<?php echo base_url('admin/information/add') ?>" class="btn shadow-2 btn-success pull-right">Add</a> 
                                        <a href="<?php echo base_url('admin/information/data') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <form  id="input_data">
                                        <div class="card-block"> 
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label>Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="img" class="custom-file-input"
                                                        id="imgInp">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                    </div>
                                                    <?php
                                                    if(@$row->img){
                                                        $src = base_url('prabotan/image/information/'.@$row->img);
                                                    } else {
                                                        $src = '#';
                                                    }
                                                    ?>
                                                    <img src="<?php echo base_url('prabotan/image/information/'.@$row->img) ?>" alt="" id="preview_" style="width:60%; margin:20px auto;">
                                                    <br><br>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <textarea type="text" class="form-control" required name="content"></textarea>
                                                    </div>
                                                </div>
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
<script>
    $(function() {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("input[name='img']").change(function() {
            readURL(this);
        });

        $('#input_data').on('submit', function (e) {
            e.preventDefault(); 
            // $('#content_event').val($('#event').summernote('code'));

            $('.loading').show(); 
            $.ajax({
                type :"post",  
                url : "<?php echo base_url('admin/information/insert_information') ?>",  
                cache :false,
                enctype: 'multipart/form-data',
                data: new FormData($('#input_data')[0]),
                processData: false,
                contentType: false,
                dataType: 'json',
                success : function(data) {
                    if (data.act_msg == 'sukses') {
                        $('.sukses_menyimpan').click();
                        setTimeout(function(){
                            window.location = "<?php echo base_url('admin/information/data') ?>";
                        },2000)
                    }else if(data.act_msg == 'gagal'){
                        // $('.pesan_error').text('File rejected, extension files can only be jpg, png, jpeg');
                        $('.gagal_menyimpan').click();
                    }else{
                        $('.tersedia').click();  
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
    });
</script>