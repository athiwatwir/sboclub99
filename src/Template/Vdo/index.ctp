<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center mx-auto g-max-width-600 g-mb-50 g-pt-15">
                <h2 class="g-color-primary f-promppt-500 mb-4">วิดีโอ</h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>

<section class="container clearfix g-mb-50">

<div class="row no-gutters">
	<?php foreach ($vdos as $key => $item): ?>
		<div class="col-md-4 col-12 px-2 mb-4 text-center">
			<div class="embed-responsive embed-responsive-21by9" style="height: 200px; cursor: pointer;">
                <a href="<?=SITE_URL.$item->path?>" target="_blank">
                    <video class="img-responsive cls_vdo" id="is_vdo_<?= $key ?>" preload="metadata">
                        <source src="<?=SITE_URL.$item->path?>#t=0.1" type="video/mp4">
                        
                        Your browser does not support the video tag.
                    </video>
                </a>
        	</div>
            <small><?= $item->name ?></small>
		</div>

	<?php endforeach; ?>
	
</div>
</section>