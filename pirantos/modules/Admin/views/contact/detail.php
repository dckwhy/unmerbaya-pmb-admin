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
<link href="<?= base_url() ?>prabotan/admin/css/chat.css" rel="stylesheet" type="text/css" />

<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Inbox</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">
                                            <i class="feather icon-slack"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Inbox</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Detail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" style="overflow-y:auto;">
                                    <div class="card-header">
                                        <h5>Inbox Detail</h5>
                                    </div>
                                    <?php 
                                        $id = $this->uri->segment(4);
                                        $this->db->where('mahasiswa_id', $id);
                                        $data_message = $this->db->get('data_message')->result();
                                        foreach ($data_message as $value) { 
                                            $this->db->where('id', $id);
                                            $data_mahasiswa = $this->db->get('data_user')->row();
                                            if ($value->sender == 'mahasiswa') { ?>
                                                <small class="ml-4"><?= $data_mahasiswa->name ?></small>
                                                <div class="row w-100 ml-auto mr-auto mb-3">
                                                    <div class="img_cont_msg ml-4">
                                                        <img src="<?= base_url('prabotan/image/photo/'.$data_mahasiswa->img) ?>" class="rounded-circle user_img_msg">
                                                    </div>
                                                    <div class="content-message ml-4">
                                                        <p class="mb-0"><?= $value->message ?></p>
                                                    </div>
                                                    <!--<small><?= $value->date_send ?></small>-->
                                                </div>
                                    <?php   }
                                            elseif ($value->sender == 'admin') { ?>
                                                <div class="row w-100 ml-auto mr-auto mb-3">
                                                    <div class="content-message-reply ml-auto mr-4 mt-1">
                                                        <p class="mb-0"><?= $value->message ?></p>
                                                    </div>
                                                    <!--<small><?= $value->date_send ?></small>-->
                                                    <div class="img_cont_msg mr-4">
                                                        <img src="<?= base_url('prabotan/image/unmerbaya.png') ?>" class="rounded-circle user_img_msg">
                                                    </div>
                                                </div>
                                    <?php   }
                                        }
                                    ?>          
                                </div>
                                <form id="send-message">
                                    <input type="hidden" name="sender" value="admin">
                                    <input type="hidden" id="mahasiswa_id" name="mahasiswa_id" value="<?= $id ?>">
                                    <div class="input-group">
                                    <!--<div class="input-group-append">
                                        <span class="input-group-text attach_btn"><i class="fa fa-paperclip"></i></span>
                                    </div>-->
                                        <textarea rows="1" id="message" name="message" class="form-control type_msg mt-0"
                                            placeholder="Type your message..."></textarea>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-success send_btn">
                                                <span><i class="fa fa-location-arrow"></i></span>
                                            </button>
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
</section>
<script type="text/javascript">
    $('#send-message').on('submit', function (){
        $.ajax({
          type: "post",
          url: "<?php echo base_url('admin/contact/reply_message') ?>",
          cache: false,
          data: new FormData($('#send-message')[0]),
          processData: false,
          contentType: false,
          dataType: "json",
          success: function (data) {
            if (data.msg == 'success') {
              alert('Message sent succes');
              location.reload();
            } else {
              alert('Message sent Failed');
            }
          },
          error: function () {
            alert('Network Error');
          }
        });
        return false;
    });

</script>
