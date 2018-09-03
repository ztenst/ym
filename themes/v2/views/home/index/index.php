<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/3089.css">
<style type="text/css">
    #online_open{
        bottom: 186px;
    background: #3490DC;
    width: 42px;
    height: 42px;
        cursor: pointer;
    position: fixed;
    z-index: 99999;
    font-size: 18px;
    color: #fff;
    text-align: center;
    line-height: 30px;
    right: 3px!important;
    }
    .cname{
            font-family: 微软雅黑;
            color: #00b7ee;
            font-size: 18px;
            margin-left: -56px;
            position: absolute;
            width: 260px;
            top: 14px;
            font-style: oblique;
        }
    .mlist.service .content_list .item_block .item_wrapper {
        padding: 38px 38px 46px 38px;
        text-align: center;
        transition: all linear .2s;
        transform: translate(0,0);
    }
    #indexPage .service .item_block .item_img, .npagePage:not(.post) .service .item_block .item_img {
        transition: all .36s ease;
        overflow: hidden;
        margin: 10px;
    }
    #indexPage #mindex a.more {
    margin: 80px auto;
    display: block;
}
    .mlist .content_list .item_block .title {
    font-size: 20px;
}
.mlist .content_list .item_block .subtitle {
    font-size: 13px;
    color: #939393;
    margin-top: 3px;
}
.mlist.service .content_list .item_block .item_wrapper .description {
    font-size: 13px;
    margin: 20px 0 30px;
    color: #939393;
    height: 48px;
    overflow: hidden;
    line-height: 24px;
}

    .ellipsis {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
#indexPage #topSlider ul li .wrapper .description .title {
    font-size: 36px;
    line-height: 1.1;
}
    #indexPage .service .item_block .item_img img, .npagePage:not(.post) .service .item_block .item_img img {
    transition: all .36s ease;
    width: 100%;
}
    #indexPage .team_tabs .tab_content .item_block .item_wrapper .item_info .description{
        font-size: 18px !important;
    }
</style>
<div id="indexPage">
            <div id="mslider" class="module">
                <script type="text/javascript">
                $(function() { $("#mslider li video").each(function(index, element) { element.play(); }); })
                </script>
                <ul class="slider" data-options-height="640" data-options-auto="0" data-options-mode="1" data-options-pause="5" data-options-ease="ease-out">
                    <?php if($imgs = SiteExt::getAttr('qjpz','pcIndexImages')) foreach ($imgs as $key => $value) {?>
                        <li style="background-image:url(<?=ImageTools::fixImage($value,1915,640)?>)" class="active">
                            <div id="tempImage_<?=$key?>"></div><img style="display:none" src="<?=ImageTools::fixImage($value,1915,640)?>" alt="" />
                            <div class="mask"></div>
                            <a target="_blank">
                                <div>
                                    <p class="title ellipsis"></p>
                                </div>
                                <div class="sliderArrow fa fa-angle-down"></div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div id="mindex" style="" data-options-ease="Expo.easeInOut" data-options-speed="1" data-options-sscreen="0"></div>
            <div class="mlist service module" style="padding-bottom: 0"> 
         <div class="bgmask"></div>
         <div class="module_container">
                    <div class="container_header wow animated" style="visibility: visible;width: 100%"><a href="<?=$this->createUrl('/home/serve/list')?>">
                <p class="title" style="text-align: center">优质的服务</p>
                <p class="subtitle" style="text-align: center">Business Services</p>      </a> </div>
                    
                                  <div class="container_content">
                  <div class="content_wrapper">
                                          <ul class="content_list row gutter">
                                          <?php $tagdes = ['一站式便捷服务','探索世界 从此开始','海外资源 你我共享'] ?>
                                          <?php $desdes = ['杭州英曼人力资源管理有限公司拥有来自世界各国的国际认证母语外教资源库，范围遍布全国...','只有自己走向世界，用自己的眼睛观察世界，才能发现哪里才是最适合自己的...','以更高的平台挖掘自身的潜力，致力于提供量身定做的海外实习项目，感受不一样的实习氛围...'] ?>
                                          <?php if($tags = TagExt::model()->findAll("cate='fw'")) foreach ($tags as $key => $value) {?>
                                              <li id="item_block_<?=$key?>" class="item_block col-33 wow" style="animation-delay: 0s; visibility: visible; animation-name: fadeInUp;">
            <div class="content">
                <a href="<?=$this->createUrl('/home/serve/list',['cid'=>$value->id])?>" class="item_img" target="_blank" style="background-image:url(<?=ImageTools::fixImage($value->image,300,200)?>)">
                   <img src="<?=ImageTools::fixImage($value->image,300,200)?>">
                   <div class="item_img_mask"></div>
                </a>
                <div class="item_wrapper">
                   <p class="title ellipsis"><?=$value->name?></p>
                   <p class="subtitle ellipsis"><?=$tagdes[$key]?></p>
                   <div class="description">
                      <p><?=$desdes[$key]?></p>
                   </div>
                   <a href="<?=$this->createUrl('/home/serve/list',['cid'=>$value->id])?>" class="more" target="_blank">more</a>
                </div> 
            </div>
        </li>
                                          <?php } ?>
        </ul>
      <a href="<?=$this->createUrl('/home/serve/list')?>" class="more hide wow animated" style="animation-delay: 0.5s; visibility: visible;display: block;"></a>
                                          </div><!--wrapper-->
                  <div class="clear"></div>
                    
                                           
             </div>
             <div class="clear"></div>
         </div>
      </div>
            <!-- <div id="mservice" class="module bgShow" style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcServiceImage'))?>);">
                <div class="bgmask"></div>
                <div class="content layoutnone">
                    <div class="header wow fw" data-wow-delay=".1s">
                        <p class="title">业务服务</p>
                        <p class="subtitle">Business Services</p>
                    </div>
                    <div class="module-content fw" id="servicelist">
                        <div class="wrapper">
                            <ul class="content_list" data-options-sliders="3" data-options-margin="50" data-options-ease="u65e0" data-options-speed="0">
                            <?php $tagdes = ['一站式便捷服务','探索世界 从此开始','海外资源 你我共享'] ?>
                            <?php if($tags = TagExt::model()->normal()->findAll("cate='fw'")) {
                                foreach ($tags as $key => $value) {?>
                                    <li id="serviceitem_<?=$key?>" class="serviceitem wow">
                                        <a href="<?=$this->createUrl('/home/serve/list',['cid'=>$value->id])?>" target="_blank">
                                            <p class="service_img"><img src="<?=ImageTools::fixImage($value->image)?>" width="320" height="120" alt="<?=$value->name?>" /></p>
                                            <div class="service_info">
                                                <p class="title"><?=$value->name?></p>
                                                <p class="description"><?=$tagdes[$key]?></p>
                                            </div>
                                        </a>
                                        <a href="<?=$this->createUrl('/home/serve/list',['cid'=>$value->id])?>" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                                    </li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <a href="<?=$this->createUrl('/home/serve/list')?>" class="more wow">MORE<i class="fa fa-angle-right"></i></a></div>
            </div> -->
            <!--project-->
            <!-- <div id="mpage" class="module">
                <div class="bgmask"></div>
                <div class="content">
                    <div class="module-content">
                        <div class="wrapper">
                            <ul class="slider one">
                                <li>
                                    <div class="header wow" data-wow-delay=".2s">
                                        <p class="title">公司简介</p>
                                        <p class="subtitle">About us</p>
                                    </div>
                                    <div class="des-wrap">
                                        <p class="description wow" data-wow-delay=".3s">
                                            <?php $res = ArticleExt::model()->normal()->find("cid=78");echo $res?$res->desc:'';?>
                                        </p>
                                    </div>
                                    <a href="<?=$this->createUrl('/home/about/company')?>" class="more wow" data-wow-delay=".5s">MORE<i class="fa fa-angle-right"></i></a>
                                    <div class="fimg wow" style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcCompanyImage'))?>)"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <div id="mnews" class="module bgShow" style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcNewsImage'))?>);">
                <div class="bgmask"></div>
                <div class="content layoutnone">
                    <div class="header wow">
                    <a href="<?=$this->createUrl('/home/news/list')?>">
                        <p class="title">新闻中心</p>
                        <p class="subtitle">News</p>
                        </a>
                    </div>
                    <div class="module-content" id="newslist">
                        <div class="wrapper">
                            <ul class="content_list" data-options-sliders="3" data-options-margin="20" data-options-ease="u65e0" data-options-speed="0" data-options-mode="horizontal" data-options-wheel="0">
                            <?php $news = ArticleExt::model()->normal()->findAll(['condition'=>"mid=3",'limit'=>3,'order'=>'updated desc']); foreach ($news as $key => $value) {?>
                                <li id="newsitem_<?=$key?>" class="wow newstitem left">
                                    <a class="newscontent" target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>">
                                        <div class="news_wrapper">
                                            <div class="newsbody">
                                                <p class="date"><span class="md"><?=date('Y',$value->time)?><span>-</span></span><span class="year"><?=date('m-d',$value->time)?></span></p>
                                                <p class="title"><?=$value->title?></p>
                                                <div class="separator"></div>
                                                <p class="description"><?=Tools::u8_title_substr($value->desc,80)?></p>
                                            </div>
                                        </div>
                                        <div class="newsimg" style="background-image:url(<?=ImageTools::fixImage($value->image)?>)"></div>
                                    </a>
                                    <a href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <a href="<?=$this->createUrl('/home/news/list')?>" class="more wow">MORE<i class="fa fa-angle-right"></i></a>
                    <div style="height:0">&nbsp;</div>
                </div>
            </div>

            <div id="mcontact" class="module">
                <div class="bgmask"></div>
                <div class="content">
                    <div class="header wow fadeInUp fw" data-wow-delay=".1s">
                        <p class="title">联系</p>
                        <p class="subtitle">Contact</p>
                    </div>
                    <div id="contactlist" class="fw">
                        <div id="contactinfo" class="fl wow" data-wow-delay=".2s">
                            <h3 class="ellipsis name">杭州英曼人力资源管理有限公司</h3>
                            <p class="ellipsis add"><span>地点：</span><?=SiteExt::getAttr('qjpz','addr')?></p>
                            <p class="ellipsis zip"><span>邮编：</span><?=SiteExt::getAttr('qjpz','yb')?></p>
                            <!-- <p class="ellipsis mobile"><span>手机：</span><?=SiteExt::getAttr('qjpz','sitePhone')?></p> -->
                            <p class="ellipsis email"><span>邮箱：</span><?=SiteExt::getAttr('qjpz','mail')?></p>
                            <div><a class="fl" target="_blank" href="http://weibo.com/web"><i class="fa fa-weibo"></i></a><a class="fl" target="_blank" href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?>&Site=uemo&Menu=yes"><i class="fa fa-qq"></i></a> <a id="mpbtn" class="fl" href=""><i class="fa fa-weixin"></i></a>                            <img src="http://oofuaem2b.bkt.clouddn.com/2018/0903/1535982287718383914.jpg?imageView2/2/w/400/h/300/interlace/1/q/100" style="width: 150px;height: 150px;float: right;margin-top: -90px" alt="">
</div>
                        </div>
                        <div id="contactform" class="fr wow" data-wow-delay=".2s">
                            <form action="http://mo004_1497.mo4.line1.uemo.net/message/" method="post">
                                <p>
                                    <input type="text" class="inputtxt name" name="name" placeholder="姓名" autocomplete="off" />
                                </p>
                                <p>
                                    <input type="text" class="inputtxt email" name="email" placeholder="邮箱" autocomplete="off" />
                                </p>
                                <p>
                                    <input type="text" class="inputtxt tel" name="tel" placeholder="电话" autocomplete="off" />
                                </p>
                                <p>
                                    <textarea class="inputtxt cont" name="content" placeholder="内容" autocomplete="off"></textarea>
                                </p>
                                <p>
                                    <input class="inputsub" type="submit" value="提交" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>