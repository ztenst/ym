<div class="npagePage " id="npagePage">
<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/travelStudy.css">
<style>
    .pdt{
        padding-top: 20px
    }
</style>
<div class="american-line-wrap">
<h4 style="width: 1200px;padding-top: 20px;
    margin: 0 auto;"><a href="list" style=" color: #868686!important">返回服务列表</a></h4>
<?php if($res = YxExt::model()->findAll()) foreach ($res as $key => $value) {?>
    <div class="american-line <?=$key==0?'pdt':''?>">
        <div class="american-line-l fl">
            <div class="american-line-l-tit">
                <span class="american-line-l-tit-single fl"><?=$value->name?>  <i style="font-style:normal; color:#dedede;">|</i></span>
                <!-- <a href="http://www.wenduguoji.com/youxue/usa/" target="_blank" class="american-line-l-tit-all fl">美国全部路线</a> -->
            </div>
            <div class="american-line-l-content">
                <a href="<?=$this->createUrl('yxinfo',['id'=>$value->id])?>" class="american-line-l-content-a1 fl">
                    <script language="javascript" src="http://www.wenduguoji.com/index.php?m=poster&amp;c=index&amp;a=show_poster&amp;id=50"></script><img title="" src="<?=ImageTools::fixImage($value->fm_image,245,340)?>" width="245" height="340" style="border:0px;">
                    <span class="american-line-l-content-span1"><?=$value->fm_title?></span> <span class="american-line-l-content-span2"><?=$value->fm_desc?></span> </a>
                    <?php  foreach (range(1, 4) as $f) {?>
                    <div class="american-line-l-content-div fl">
                    <a target="_blank" href="<?=$this->createUrl('yxinfo',['id'=>$value->id])?>">
                    <?php $tmp = 'ts_image'.$f ?>
                    <?php $tmp1 = 'ts_title'.$f ?>
                        <img src="<?=ImageTools::fixImage($value->$tmp,230,227)?>" height="227" width="230" alt="">
                        </a>
                    <div class="american-line-l-content-div-b"><a target="_blank" href="<?=$this->createUrl('yxinfo',['id'=>$value->id])?>">
                            <span><?=$value->$tmp1?></span>
                            </a><a target="_blank" href="<?=$this->createUrl('yxinfo',['id'=>$value->id])?>">了解详情</a>
                    </div>
                </div>
                    <?php } ?>
                
            </div>
        </div>
    </div>
<?php } ?>
</div>
</div>