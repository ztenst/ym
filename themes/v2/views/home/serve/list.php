<div class="npagePage Pageanli" id="mproject">
            <div id="banner">
                <div style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcServiceTopImage'))?>);"></div>
            </div>
            <div class="content">
                <div class="header" id="plheader">
                    <p class="title">我们的服务</p>
                    <p class="subtitle">Our Serves</p>
                </div>
                <ul id="category">
                <li><a href="<?=$this->createUrl('list')?>" class="<?=!$cid?'active':''?>">全部</a></li>
                <?php $tags = TagExt::model()->normal()->findAll("cate='fw'"); if($tags) {
                    foreach ($tags as $key => $value) {?>
                        <li><a href="<?=$this->createUrl('list',['cid'=>$value->id])?>" class="<?=$cid==$value->id?'active':''?>"><?=$value->name?></a></li>
                     <?php }
                   } ?>
                </ul>
                <div id="projectlist" class="module-content">
                    <div class="wrapper">
                        <ul class="content_list">
                        <?php if($infos) foreach ($infos as $key => $value) {?>
                            <li class="projectitem">
                                <a href="<?=$this->createUrl('info',['id'=>$value->id])?>" target="_blank">
                                    <div class="project_img"><img src="<?=ImageTools::fixImage($value->image,360,230)?>" width="500" height="320" /></div>
                                    <div class="project_info">
                                        <div>
                                            <p class="title"><?=$value->title?></p>
                                            <p class="subtitle"><?=$value->sub_title?></p>
                                            <p class="description hide"><?=$value->desc?></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?=$this->createUrl('info',['id'=>$value->id])?>" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                            </li>
                        <?php } ?>
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- <div id="pages"><a href="http://mo004_1497.mo4.line1.uemo.net/project/page/1/" class="active">1</a></div> -->
            </div>
        </div>