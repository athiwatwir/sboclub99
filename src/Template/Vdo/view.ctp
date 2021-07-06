<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center mx-auto g-max-width-600 g-mb-50 g-pt-15">
                <h2 class="g-color-primary f-promppt-500 mb-4"><?=$vdo->name?></h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>

<section class="container clearfix g-mb-50">

<div class="row no-gutters">
	<div class="col-12 col-md-8 offset-md-2">

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?=SITE_URL.$vdo->path?>#t=0.1" type="video/mp4"></iframe>
        </div>
        
    </div>
	
</div>
</section>