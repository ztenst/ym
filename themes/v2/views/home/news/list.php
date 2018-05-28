<div id="newsPage" class="npagePage Pagenews">
            <div id="banner">
                <div style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcNewsTopImage'))?>);"></div>
            </div>
            <div class="content">
                <div class="header">
                    <p class="title">新闻中心</p>
                    <p class="subtitle">News</p>
                </div>
                <div id="category" style="font-size: 16px">
                <a href="<?=$this->createUrl('list')?>" class="<?=!$cid?'active':''?>">全部</a>
                <?php $tags = TagExt::model()->normal()->findAll("cate='xw'"); if($tags) {
                    foreach ($tags as $key => $value) {?>
                        <a href="<?=$this->createUrl('list',['cid'=>$value->id])?>" class="<?=$cid==$value->id?'active':''?>"><?=$value->name?></a>
                     <?php }
                   } ?>
                </div>
                <div id="newslist">
               <?php if($infos) foreach ($infos as $key => $value) {?>
                    <div class="wrapper">
                        <div id="newsitem_<?=$key?>" class="wow newstitem left">
                            <a class="newscontent" target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>">
                                <div class="news_wrapper">
                                    <div class="newsbody">
                                        <p class="date"><span class="md"><?=date('Y',$value->updated)?><span>-</span></span><span class="year"><?=date('m-d',$value->updated)?></span></p>
                                        <p class="title"><?=$value->title?></p>
                                        <div class="separator"></div>
                                        <p class="description"><?=$value->desc?></p>
                                    </div>
                                </div>
                                <div class="newsimg" style="background-image:url(<?=ImageTools::fixImage($value->image)?>)"></div>
                            </a>
                            <a href="<?=$this->createUrl('info',['id'=>$value->id])?>" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>