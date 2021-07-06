<section class="container">
    <div class="row">
        <div class="col-md-10">
            <h2 class="g-color-primary f-promppt-500 mb-4">VDO</h2>
        </div>
        <div class="col-md-2 text-right">
            <?= $this->Html->link('เพิ่ม',['controller'=>'admin-vdo','action'=>'add'],['class'=>'btn btn-primary'])?>
        </div>
    </div>
</section>
<section class="container g-line-height-2 g-mb-30">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>วิดีโอ</th>
                        <th>วันที่เพิ่ม</th>
                        <th class="text-center">สถานะ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($adminVdo as $item) : ?>
                        <tr>
                            <td class="d-flex">
                                <div class="embed-responsive embed-responsive-21by9 mr-2" data-toggle="modal" data-target="#videoModal" 
                                    onClick="setVideoModal('<?=SITE_URL.$item->path?>', '<?=$item->name?>')" 
                                    style="height: 50px; width: 120px; cursor: pointer;">
                                    <video class="img-responsive cls_vdo" id="is_vdo_<?= $key ?>" preload="metadata">
                                        <source src="<?=SITE_URL.$item->path?>#t=0.5" type="video/mp4">
                                    </video>
                                </div>
                                <?=$item->name?>
                            </td>
                            <td><?=$item->created?></td>
                            <td class="text-center">
                                <?php if($item->isactive == 'Y') {
                                        echo "<span class='text-success'>เปิดใช้งาน</span>";
                                    }else{
                                        echo "<span class='text-danger'>ปิดใช้งาน</span>";
                                    }
                                ?>
                            </td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <?= $this->Html->link(BT_EDIT, ['action' => 'edit', $item->id], ['escape' => false]) ?> 
                                    <?= $this->Form->postLink(BT_DELETE, ['action' => 'delete', $item->id], ['confirm' => __('คุณต้องการลบ {0}?', $item->name), 'escape' => false]) ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video class="img-responsive cls_vdo" id="is_vdo" src="" type="video/mp4" controls controlsList="nodownload" preload="metadata"></video>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setVideoModal(vdo_url, title) {
            document.querySelector('#videoModalLabel').textContent = title
            document.querySelector('#is_vdo').src = vdo_url
        }
    </script>

</section>