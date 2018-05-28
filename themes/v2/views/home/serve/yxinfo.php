<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/common.css">
<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/product.css">
<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/swiper.min.css">
<script src="<?=Yii::app()->theme->baseUrl?>/static/home/js/swiper.js"></script>
<div class="npagePage " id="npagePage">
<div class="main position-relative">
    <div class="subject-line-banner" style="background-image:url(<?=ImageTools::fixImage($info->image,1900,500)?>)">
    </div>
    <div class="studyTour-mian information-wl">
        <h2 class="studyTour-title"><?=$info->descp?></h2>
        <div class="studyTour-centent" id="swiperfalsh">
            <div class="swiper-container swiper-container-horizontal">
                <div class="swiper-wrapper">
                <?php  foreach (range(1, 4) as $f) {?>
                    <?php $tmp = 'ts_image'.$f ?>
                    <?php $tmp1 = 'ts_title'.$f ?>
                     <div class="swiper-slide swiper-slide-active" style="width: 280px; margin-right: 8px;">
                        <div class="swiper-img">
                            <img src="<?=ImageTools::fixImage($info->$tmp,230,227)?>">
                            <p></p>
                            <span><?=$info->$tmp1?></span>
                            <div class="swiper-bg"></div>
                        </div>
                    </div>
                <?php } ?>
                   
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev swiper-button-disabled"></div>
        </div>
    </div>
    <div class="information-wl" style="font-size: 14px">
        <?=$info->content?>
        <center><a href="yxlist">返回列表</a></center>
    </div>
    
<script>
            $(function(){
                 var swiper = new Swiper('#swiperfalsh .swiper-container', {
                    nextButton: '#swiperfalsh .swiper-button-next',
                    prevButton: '#swiperfalsh .swiper-button-prev',
                    slidesPerView: 3.5,
                    paginationClickable: true,
                    spaceBetween: 8,
                    simulateTouch : false,
                });


            })
        </script>
