<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Try Out</h5>
                                </div>
                                <ul class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Try Out</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Form IPC</a></li>
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
                                        <h5>Data IPC</h5> 
                                        <a href="<?php echo base_url('admin/Try_out/add_ipc') ?>" class="btn shadow-2 btn-success pull-right">Add</a> 
                                        <a href="<?php echo base_url('admin/Try_out/data_ipc') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table id="zero-configuration" class="display table nowrap table-striped table-hover" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Soal</th>
                                                        <th>Soal</th>
                                                        <th>Jawaban</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $this->db->order_by('id', 'desc');
                                                    // $this->db->where('jabatan !=', 'Super user');
                                                    $get_user = $this->db->get('data_admin')->result();
                                                    foreach ($get_user as $value) { ?>
                                                        <tr>
                                                            <td><?= $value->name ?></td>
                                                            <td><?= $value->phone ?></td>
                                                            <td><?= get_status_code($value->status) ?></td>
                                                            <td>
                                                                <?= get_detail_edit_delete_js($value->id) ?>
                                                            </td>
                                                        </tr> 
                                                    <?php }
                                                    ?>
                                                </tbody> 
                                            </table>
                                        </div>
                                    </div>
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
