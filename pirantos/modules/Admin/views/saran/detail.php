<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
</script>

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
                                    <h5 class="m-b-10">Saran dan Masukan</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">
                                            <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Saran dan Masukan</a></li>
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
                                        <h5>Detail Saran dan Masukan</h5>
                                        <a href="<?php echo base_url('admin/saran/add') ?>"
                                            class="btn shadow-2 btn-success pull-right">Add</a>
                                        <a href="<?php echo base_url('admin/saran/data') ?>"
                                            class="btn shadow-2 btn-primary pull-right">Data</a>
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('data_saran_pmb')->row();
                                    ?>
                                    <form id="input_data">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control" name="nama" value="<?php echo @$row->nama ?>" placeholder="Nama" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email" value="<?php echo @$row->email ?>" placeholder="Email" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>No Telepon</label>
                                                        <input type="text" class="form-control" name="no_telp" value="<?php echo @$row->no_telp ?>" placeholder="No Telp" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label for="">Pesan</label><br>
                                                    <textarea class="form-control" required disabled><?php echo $row->pesan ?></textarea>
                                                    
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
</section>
<script src="<?php echo base_url() ?>prabotan/admin/plugins/summernote/summernote.js"></script>
<script type="text/javascript">
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
            success: function (url) {
                $('.summernote').summernote("insertImage", url);
            }
        });

    }

    $('#input_data').on('submit', function (e) {
        $('.loading').hide();
        $.ajax({
            type: "post",
            url: "<?php echo base_url('admin/Users/detail') ?>",
            cache: false,
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.msg == 'success') {
                    $('.sukses_menyimpan').click();
                    setTimeout(function () {
                        window.location = "<?php echo base_url('admin/users/detail') ?>";
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

</script>
