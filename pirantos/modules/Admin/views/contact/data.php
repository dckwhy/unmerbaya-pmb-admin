<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
<link href="<?php echo base_url() ?>prabotan/admin/plugins/summernote/summernote.css" rel="stylesheet"> 
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Contact Us</h5>
                                </div>
                                <ul class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Contact Us</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Data</a></li>
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
                                        <h5>Contact Us</h5>
                                        <a href="<?php echo base_url('admin/contact/inbox') ?>"
                                           class="btn shadow-2 btn-success pull-right">Inbox</a>
                                       </div>
                                       <?php 
                                       $row = $this->db->get('setting_web')->row();
                                       ?>
                                       <form id="input_data">
                                         <div class="card-block">
                                             <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Whatsapp</label>
                                                        <input type="text" class="form-control" value="<?= @$row->phone ?>" name="phone" placeholder="Whatsapp 1">
                                                        <br>
                                                        <input type="text" class="form-control" value="<?= @$row->phone ?>" name="phone" placeholder="Whatsapp 2">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea type="text" class="form-control" value="<?= @$row->instagram ?>" name="instagram" placeholder="Address"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" value="<?= @$row->line ?>" name="line" placeholder="Phone">
                                                    </div>
                                                </div>
                                    
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Office Phone</label>
                                                        <input type="text" class="form-control" value="<?= @$row->instagram ?>" name="instagram" placeholder="Office Phone">
                                                    </div>
                                                </div>


                                                <br><br>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                 <button type="submit" class="btn btn-primary pull-right"><i
                                                     class="feather icon-send"></i>Save </button>
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
 </section>
 <button type="button" style="display:none" class="btn btn-success btn-sm sukses_menyimpan" id="sukses_menyimpan"></button>
 <button type="button" style="display:none" class="btn btn-success btn-sm gagal_menyimpan" id="gagal_menyimpan"></button>
 <button type="button" style="display:none" class="btn btn-success btn-sm error_menyimpan" id="error_menyimpan"></button>
 <button type="button" style="display:none" class="btn btn-success btn-sm tersedia" id="tersedia"></button>
 <script src="<?php echo base_url() ?>prabotan/admin/plugins/summernote/summernote.js"></script>
 <script>
    function get_detail (id) {  
        window.location = ('<?= base_url() ?>admin/Contact/inbox/')
    }

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

        $("input[name='foto_file']").change(function() {
            readURL(this);
        });

        $('.summernote').summernote({
            height: 750,
            callbacks: {
                onImageUpload: function(files) { 
                    uploadFile(files[0]);
                }
            }
        }); 

        function uploadFile(file) {
            data = new FormData();
            data.append("file", file); 
            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo base_url('admin/Contact/upload_img_summernote') ?>",  
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $('.summernote').summernote("insertImage", url);
                }
            });

        }

        $('#input_data').on('submit', function (e) {
            e.preventDefault();
            $('#body').val($('.summernote').summernote('code'));
            $('.loading').show();
            $.ajax({
                type :"post",  
                url : "<?php echo base_url('admin/Contact/update_content') ?>",  
                cache :false,
                enctype: 'multipart/form-data',
                data: new FormData($('#input_data')[0]),
                processData: false,
                contentType: false,
                dataType: 'json',
                success : function(data) {
                    if (data.msg == 'success') {
                        $('.sukses_menyimpan').click();
                        setTimeout(function(){
                            window.location = "<?php echo base_url('admin/contact/data') ?>";
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
    });
</script>