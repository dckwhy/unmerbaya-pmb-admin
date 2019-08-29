<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Calon Mahasiswa</h5>
                                </div>
                                <ul class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Calon Mahasiswa</a></li>
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
                                        <h5>Detail Calon Mahasiswa</h5> 
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('unmer_calon_mahasiswa.personal_data')->row();
                                    ?>
                                    <form  id="input_data">
                                        <div class="card-block">
                                            <h5>Personal Data</h5>
                                            <br> 
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control" name="name" value="<?php echo @$row->name ?>" placeholder="Nama" required disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <select disabled class="form-control" name="gender" required>
                                                            <option <?php if(@$row->gender == 1){ echo 'selected'; } ?> value="1">Laki - laki</option> 
                                                            <option <?php if(@$row->gender == 0){ echo 'selected'; } ?> value="0">Perempuan</option> 
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tempat Lahir</label>
                                                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo @$row->tempat_lahir ?>" placeholder="Tempat Lahir" required disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo @$row->tgl_lahir ?>" placeholder="Tempat Lahir" required disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Agama</label>
                                                        <input type="text" class="form-control" name="agama" value="<?php echo @$row->agama ?>" placeholder="Agama" required disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No. Telp</label>
                                                        <input type="tel" class="form-control" name="phone" value="<?php echo @$row->phone ?>" placeholder="Phone" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="text" class="form-control" name="address" value="<?php echo @$row->address ?>" placeholder="Alamat" required disabled>
                                                        <br>
                                                        <input type="text" class="form-control" name="address" placeholder="Kecamatan" required disabled>
                                                        <br>
                                                        <input type="text" class="form-control" name="address" placeholder="Kota" required disabled>
                                                        <br>
                                                        <input type="text" class="form-control" name="address" placeholder="Provinsi" required disabled>
                                                        <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIK</label>
                                                        <input type="text" class="form-control" name="nik" value="<?php echo @$row->nik ?>" placeholder="NIK" required disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NISN</label>
                                                        <input type="text" class="form-control" name="nisn" value="<?php echo @$row->nisn ?>" placeholder="NISN" required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <?php 
                                            $id = $this->uri->segment(4);
                                            $this->db->where('id', $id);
                                            $data = $this->db->get('unmer_calon_mahasiswa.personal_data_details')->row();
                                            ?>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <br>
                                                    <h5>Riwayat Pendidikan</h5>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Asal SMU/SMK/Sederajat</label>
                                                        <input type="text" class="form-control" name="sekolah_asal" value="<?php echo @$data->sekolah_asal ?>" required disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat SMU/SMK/Sederajat</label>
                                                        <textarea type="text" class="form-control" name="alamat_sekolah_asal" required disabled><?= @$data->alamat_sekolah_asal ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <br>
                                                    <h5>Riwayat Pekerjaan</h5>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Nama Kantor</label>
                                                        <input type="text" class="form-control" name="nama_kantor" value="<?php echo @$data->nama_kantor ?>" required disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Kantor</label>
                                                        <textarea type="text" class="form-control" name="alamat_kantor" required disabled><?= @$data->alamat_kantor ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <h5>Point Of Interest</h5>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Program Studi yang dipilih</label>
                                                        <select disabled class="form-control" name="Jenis Kelamin" value="<?php echo @$data->jenis_kelamin?>" required>
                                                            <option value="1">Manajemen</option> 
                                                            <option value="0">Akuntansi</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Pilihan Waktu Studi</label>
                                                        <select disabled class="form-control" name="waktu" required>
                                                            <option <?php if(@$data->waktu == "Pagi"){ echo 'selected'; } ?> value="Pagi">Pagi</option> 
                                                            <option <?php if(@$data->waktu == "Siang"){ echo 'selected'; } ?>value="Siang">Siang</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Gelombang ke</label>
                                                        <select disabled class="form-control" name="gelombang" required>
                                                            <option <?php if(@$data->gelombang == "Pertama"){ echo 'selected'; } ?> value="Pertama">Pertama</option> 
                                                            <option <?php if(@$data->gelombang == "Kedua"){ echo 'selected'; } ?> value="Kedua">Kedua</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <h5>Data Pendukung</h5>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Anda tahu UNMERbaya dari</label>
                                                        <select disabled class="form-control" name="sumber_informasi" required>
                                                            <option <?php if(@$data->sumber_informasi == "Social Media"){ echo 'selected'; } ?> value="Social Media">Social Media</option> 
                                                            <option <?php if(@$data->sumber_informasi == "Brosur"){ echo 'selected'; } ?> value="Brosur">Brosur</option> 
                                                            <option <?php if(@$data->sumber_informasi == "Teman"){ echo 'selected'; } ?> value="Teman">Teman</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>File Terlampir</label>
                                                        <br>
                                                        <label>Kartu Tanda Penduduk</label>
                                                        <br>
                                                        <img src="<?php echo base_url('prabotan/image/ktp/'.@$data->img_ktp) ?>" alt="" id="preview" style="width:20%; margin:20px auto;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Kartu Keluarga</label>
                                                        <br>
                                                        <img src="<?php echo base_url('prabotan/image/kk/'.@$data->img_kk) ?>" alt="" id="preview" style="width:20%; margin:20px auto;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>No Induk Siswa Nasional</label>
                                                        <br>
                                                        <img src="<?php echo base_url('prabotan/image/nisn/'.@$data->img_nisn) ?>" alt="" id="preview" style="width:20%; margin:20px auto;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Ijazah SMA/Sederajat</label>
                                                        <br>
                                                        <img src="<?php echo base_url('prabotan/image/ijazah/'.@$data->img_ijazah) ?>" alt="" id="preview" style="width:20%; margin:20px auto;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Foto</label>
                                                        <br>
                                                        <img src="<?php echo base_url('prabotan/image/photo/'.@$data->photo) ?>" alt="" id="preview" style="width:20%; margin:20px auto;">
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