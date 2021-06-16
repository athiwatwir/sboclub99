
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?= $this->Html->link(BT_BACK, ['action' => 'index'], ['escape' => false]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="embed-responsive embed-responsive-21by9">
                <video class="img-responsive" controls>
                    <source src="<?=SITE_URL.$adminVdo->path?>" type="video/mp4">
                    
                    Your browser does not support the video tag.
                </video>
                </div>
            </div>
        </div>
        <div class="hpanel">

            <div class="panel-body">
                <?= $this->Form->create($adminVdo, ['enctype' => 'multipart/form-data']) ?>
                <?= $this->Form->hidden('article_type_id', ['id' => 'type']) ?>
                <div class="form-group">
                    <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">VDO</h4>

                    <div class="input-group u-file-attach-v1 g-brd-gray-light-v2">
                        <input class="form-control form-control-md rounded-0" placeholder="เลือกวิดีโอ" readonly="" type="text" >

                        <div class="input-group-btn">
                            <button class="btn btn-md h-100 u-btn-primary rounded-0" type="submit">Browse</button>
                            <input type="file" name="upload_file" accept="video/mp4,video/x-m4v,video/*" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">ชื่อ/title :</label>
                    <?= $this->Form->control('name', ['id' => 'name', 'class' => 'form-control', 'label' => false]) ?>
                </div>
                
                <div class="form-group">

                    <?= $this->Form->button('บันทึก', ['class' => 'btn btn-primary', 'id' => 'ck']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>



<script>

    

    $(function () {


        $("#frm").validate({
            rules: {
                name: {
                    required: true
                },
                url: {
                    required: true
                }
            },
            messages: {
                seq: {
                    required: ""
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });

    $(document).on('ready', function () {


        // initialization of forms
        $.HSCore.helpers.HSFileAttachments.init();
        $.HSCore.components.HSFileAttachment.init('.js-file-attachment');
        //$.HSCore.helpers.HSFocusState.init();


    });

</script>