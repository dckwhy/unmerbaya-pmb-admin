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
                                    <li class="breadcrumb-item"><a href="javascript:">Inbox</a></li>
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
                                        <h5>Mail Box</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table id="zero-configuration" class="display table nowrap table-striped table-hover datatables" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Nama</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php
                                                 $this->db->where('sender', 'mahasiswa');
                                                 $this->db->order_by('id', 'desc');
                                                 $this->db->group_by('mahasiswa_id');
                                                 $get_message = $this->db->get('data_message')->result();

                                                 $this->db->where('sender', 'mahasiswa');
                                                 $this->db->where('status', 1);
                                                 $get_status = $this->db->get('data_message')->result();

                                                 foreach ($get_message as $value) {
                                                    $this->db->where('id', $value->mahasiswa_id);
                                                    $data_mahasiswa = $this->db->get('data_user')->row();
                                                    ?>
                                                    <tr>
                                                        <td>
                                                        <?php
                                                        if (count($get_status) > 0) { ?>
                                                            <div style="height:15px; width:15px; background-color:red; border-radius:50%"><span class="ml-4">New Message</span></div>
                                                        <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                        $d = new DateTime($value->date_send);
                                                        echo $d->format('Y-m-d')
                                                        ?></td>
                                                        <td><?php echo $data_mahasiswa->name?></td>
                                                        <td>
                                                            <?= 
                                                            get_detail_delete_js($data_mahasiswa->id) ?>
                                                        </td>
                                                    </tr> 
                                                    <?php 
                                                }
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
<script>
    function get_detail (id) { 
        $.ajax({
            type: "post",
            url: "<?= base_url('admin/contact/update_status_message/') ?>",
            cache: false,
            data:{
                id: id
            },
            dataType: "json",
            success : function (data) {
                if (data.msg == 'success') {
                    window.location = ('<?= base_url() ?>admin/Contact/detail/'+id)
                }
            },
            error :function(){
                alert('Network Error');
            }
        });
        return false;
    }
</script>
<script>
    function get_delete(id){
        var notice = new PNotify({
            title: 'Confirmation',
            text: '<p>Are you sure you want to Delete this data?</p>',
            hide: false,
            type: 'warning',
            confirm: {
                confirm: true,
                buttons: [
                {
                    text: 'Yes',
                    addClass: 'btn btn-sm btn-primary'
                },
                {
                    addClass: 'btn btn-sm btn-link'
                }
                ]
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }
        })

        notice.get().on('pnotify.confirm', function() {
            act_delete(id);
        })

    }

    function act_delete(id){
        where_value = id;
        where_field = 'id';
        table_name  = 'mail_box';
        $('.loading').show();
        $.ajax({
            type :"post",  
            url : "<?php echo base_url('admin/Contact/delete_data') ?>",  
            cache :false,
            data: {where_value:where_value, where_field: where_field, table_name, table_name},
            dataType: 'json',
            success : function(data) { 
                if(data.msg == 'success'){
                    $('.sukses_menghapus').click();  
                    setTimeout(function(){
                        location.reload();
                    },1500)
                } else{
                    $('.gagal_menghapus').click();  
                } 
                $('.loading').hide();
            },  
            error : function() {  
                $('.loading').hide();
                $('.error_menyimpan').click();  
            }
        });
    }
</script>
<button type="button" style="display:none" class="sukses_menghapus" id="sukses_menghapus"></button>
<button type="button" style="display:none" class="gagal_menghapus" id="gagal_menghapus"></button>
<button type="button" style="display:none" class="error_menyimpan" id="error_menyimpan"></button>