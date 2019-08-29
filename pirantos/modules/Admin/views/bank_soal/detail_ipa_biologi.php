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
                                    <h5 class="m-b-10">Bank Soal</h5>
                                </div>
                                <ul class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Bank Soal</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Detail Soal Matematika</a></li>
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
                                        <h5>Detail Soal Matematika</h5> 
                                        <a href="<?php echo base_url('admin/Bank_soal/add_ipa_mtk') ?>" class="btn shadow-2 btn-success pull-right">Add</a> 
                                        <a href="<?php echo base_url('admin/Bank_soal/ipa_matematika') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <?php 
                                    // $id = $this->uri->segment(4);
                                    // $this->db->where('id', $id);
                                    // $row = $this->db->get('data_admin')->row();
                                    ?>
                                    <form  id="input_data">
                                        <div class="card-block"> 
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Kode Soal</label>
                                                        <input type="text" class="form-control" required name="name" placeholder="Kode Soal" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Soal</label>
                                                        <textarea type="text" class="form-control" required name="Soal" placeholder="Soal" disabled></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jawaban yang benar</label>
                                                        <select class="form-control" name="status" value="<?php echo @$row->status ?>" required disabled>
                                                            <option value="1">1</option> 
                                                            <option value="0">2</option>
                                                            <option value="1">3</option> 
                                                            <option value="0">4</option>
                                                            <option value="0">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Score</label>
                                                        <input type="text" class="form-control" required name="Soal" placeholder="Score" disabled>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Pilihan Jawaban</label>
                                                        <input type="text" class="form-control" required name="Pilihan 1" placeholder="Pilihan 1" disabled>
                                                        <br>
                                                        <input type="text" class="form-control" required name="Pilihan 2" placeholder="Pilihan 2" disabled>
                                                        <br>
                                                        <input type="text" class="form-control" required name="Pilihan 3" placeholder="Pilihan 3" disabled>
                                                        <br>
                                                        <input type="text" class="form-control" required name="Pilihan 4" placeholder="Pilihan 4" disabled>
                                                        <br>
                                                        <input type="text" class="form-control" required name="Pilihan 5" placeholder="Pilihan 5" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <label for="">Pembahasan</label>
                                                    <div class="summernote" disabled><!-- <?php echo @$get_rows->about_us ?> --></div>
                                                    <textarea id="body" name="about_us" class="form-control" style="display: none;"></textarea>
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
</section>
<script src="<?php echo base_url() ?>prabotan/admin/plugins/summernote/summernote.js"></script>   
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