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
</style>
<div id="indexPage">
            <div id="mslider" class="module">
                <script type="text/javascript">
                $(function() { $("#mslider li video").each(function(index, element) { element.play(); }); })
                </script>
                <ul class="slider" data-options-height="640" data-options-auto="0" data-options-mode="1" data-options-pause="5" data-options-ease="ease-out">
                    <?php if($imgs = SiteExt::getAttr('qjpz','pcIndexImages')) foreach ($imgs as $key => $value) {?>
                        <li style="background-image:url(<?=ImageTools::fixImage($value)?>)" class="active">
                            <div id="tempImage_<?=$key?>"></div><img style="display:none" src="<?=ImageTools::fixImage($value)?>" alt="" />
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
            <div id="mindex" data-options-ease="Expo.easeInOut" data-options-speed="1" data-options-sscreen="0"></div>
            <div id="mservice" class="module bgShow" style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcServiceImage'))?>);">
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
            </div>
            <div class="mlist team_tabs module bgShow  ff_noSlider" style="background-position: center center; background-size: initial; background-repeat: no-repeat;background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcProgressImage'))?>);">
    <div class="bgmask"></div>
    <div class="module_container">
        <div class="container_content">
            <div class="content_wrapper">
                <div class="tab_content">
                <div class="header wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" style="padding-top: 40px">
                                        <center><p class="title" style="color: #444;font-size: 26px;">服务流程</p>
                                        <p class="subtitle" style="    font-size: 12px;    color: #A5A5A5;line-height: 30px">Serve Progress</p></center>
                                    </div>
                    <div class="bx-wrapper" style="max-width: 240px; margin: 0px auto;">
                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 251px;">
                            <ul class="content_list" style="width: 615%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                <li id="item_block_0" class="item_block wow" style="animation-delay: 0s; float: left; list-style: none; position: relative; width: 240px; visibility: visible; animation-name: fadeInUp;">
                                    <div class="wrapper">
                                        <a href="javascript::void(0);" target="_blank">
                                            
                                        </a>
                                        <div class="item_wrapper"><a href="javascript::void(0);" target="_blank">
                            </a>
                                            <div class="item_info">
                                                <a href="javascript::void(0);" target="_blank">
                                                    <p class="title ellipsis">Step 1</p>
                                                    <p class="subtitle">Corporate culture</p>
                                                    <div class="description">
                                                        <div class="cScrollbar mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                                                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <p>客服经理咨询</p>
                                                                </div>
                                                                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a><a href="" class="details"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_1" class="item_block wow" style="animation-delay: 0.1s; float: left; list-style: none; position: relative; width: 240px; visibility: visible; animation-name: fadeInUp;">
                                    <div class="wrapper">
                                        <a href="javascript::void(0);" target="_blank">
                                            
                                        </a>
                                        <div class="item_wrapper"><a href="javascript::void(0);" target="_blank">
                            </a>
                                            <div class="item_info">
                                                <a href="javascript::void(0);" target="_blank">
                                                    <p class="title ellipsis">Step 2</p>
                                                    <p class="subtitle">Sense of worth</p>
                                                    <div class="description">
                                                        <div class="cScrollbar mCustomScrollbar _mCS_2 mCS_no_scrollbar">
                                                            <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;">
                                                                <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <p>确定需求</p>
                                                                </div>
                                                                <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a><a href="" class="details"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_2" class="item_block wow" style="animation-delay: 0.2s; float: left; list-style: none; position: relative; width: 240px; visibility: visible; animation-name: fadeInUp;">
                                    <div class="wrapper">
                                        <a href="javascript::void(0);" target="_blank">
                                            
                                        </a>
                                        <div class="item_wrapper"><a href="javascript::void(0);" target="_blank">
                            </a>
                                            <div class="item_info">
                                                <a href="javascript::void(0);" target="_blank">
                                                    <p class="title ellipsis">Step 3</p>
                                                    <p class="subtitle">Corporate Event</p>
                                                    <div class="description">
                                                        <div class="cScrollbar mCustomScrollbar _mCS_3 mCS_no_scrollbar">
                                                            <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;">
                                                                <div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <p>签订协议
                                                                    </p>
                                                                </div>
                                                                <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a><a href="" class="details"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_3" class="item_block wow" style="animation-delay: 0s; float: left; list-style: none; position: relative; width: 240px; visibility: visible; animation-name: fadeInUp;">
                                    <div class="wrapper">
                                        <a href="javascript::void(0);" target="_blank">
                                            
                                        </a>
                                        <div class="item_wrapper"><a href="javascript::void(0);" target="_blank">
                            </a>
                                            <div class="item_info">
                                                <a href="javascript::void(0);" target="_blank">
                                                    <p class="title ellipsis">Step 4</p>
                                                    <p class="subtitle">Social Responsibility</p>
                                                    <div class="description">
                                                        <div class="cScrollbar mCustomScrollbar _mCS_4 mCS_no_scrollbar">
                                                            <div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;">
                                                                <div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <p>提供服务</p>
                                                                </div>
                                                                <div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a><a href="" class="details"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_4" class="item_block wow" style="animation-delay: 0s; float: left; list-style: none; position: relative; width: 240px; visibility: visible; animation-name: fadeInUp;">
                                    <div class="wrapper">
                                        <a href="javascript::void(0);" target="_blank">
                                            
                                        </a>
                                        <div class="item_wrapper"><a href="javascript::void(0);" target="_blank">
                            </a>
                                            <div class="item_info">
                                                <a href="javascript::void(0);" target="_blank">
                                                    <p class="title ellipsis">Step 5</p>
                                                    <p class="subtitle">Social Responsibility</p>
                                                    <div class="description">
                                                        <div class="cScrollbar mCustomScrollbar _mCS_4 mCS_no_scrollbar">
                                                            <div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;">
                                                                <div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <p>售后服务</p>
                                                                </div>
                                                                <div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a><a href="" class="details"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="bx-controls bx-has-controls-direction">
                            <div class="bx-controls-direction"><a class="bx-prev" href=""><i class="fa fa-angle-left"></i></a><a class="bx-next" href=""><i class="fa fa-angle-right"></i></a></div>
                        </div> -->
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tab_button" data-tab-num="5" style="margin-right: 0px;">
                    <div class="bx-wrapper" style="max-width: 100px; margin: 0px auto;">
                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 0px;">
                            <ul class="content_list" style="width: 615%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                <li id="item_block_0" class="item_block active  wow" data-tab-index="0" style="animation-delay: 0s; width: 25px; margin-right: 0px; float: left; list-style: none; position: relative; visibility: hidden; animation-name: none;" data-wow-delay=".0s">
                                    <div class="wrapper">
                                        
                                        <div class="item_wrapper">
                                            <div class="item_info">
                                                <p class="title ellipsis">2006</p>
                                                <p class="subtitle">Corporate culture</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_1" class="item_block  wow" data-tab-index="1" style="animation-delay: 0.1s; width: 25px; margin-right: 0px; float: left; list-style: none; position: relative; visibility: hidden; animation-name: none;" data-wow-delay=".1s">
                                    <div class="wrapper">
                                        
                                        <div class="item_wrapper">
                                            <div class="item_info">
                                                <p class="title ellipsis">2008</p>
                                                <p class="subtitle">Sense of worth</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_2" class="item_block  wow" data-tab-index="2" style="animation-delay: 0.2s; width: 25px; margin-right: 0px; float: left; list-style: none; position: relative; visibility: hidden; animation-name: none;" data-wow-delay=".2s">
                                    <div class="wrapper">
                                        
                                        <div class="item_wrapper">
                                            <div class="item_info">
                                                <p class="title ellipsis">2016</p>
                                                <p class="subtitle">Corporate Event</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_3" class="item_block  wow" data-tab-index="3" style="animation-delay: 0s; width: 25px; margin-right: 0px; float: left; list-style: none; position: relative; visibility: hidden; animation-name: none;" data-wow-delay=".3s">
                                    <div class="wrapper">
                                        
                                        <div class="item_wrapper">
                                            <div class="item_info">
                                                <p class="title ellipsis">2017</p>
                                                <p class="subtitle">Social Responsibility</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="item_block_4" class="item_block  wow" data-tab-index="4" style="animation-delay: 0s; width: 25px; margin-right: 0px; float: left; list-style: none; position: relative; visibility: hidden; animation-name: none;" data-wow-delay=".3s">
                                    <div class="wrapper">
                                        
                                        <div class="item_wrapper">
                                            <div class="item_info">
                                                <p class="title ellipsis">2017</p>
                                                <p class="subtitle">Social Responsibility</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="icon" style="left: 12.5px;"></p>
                    <div class="clear"></div>
                </div>
                <script type="text/javascript">
                $(document).ready(function(e) {
                    var idcnStartX = $(".tab_button li.active").position().left + ($(".tab_button li.active").width() - $(".tab_button .icon").width) / 2;
                    $(".tab_button .icon").css("left", idcnStartX);

                    $(".tab_button li").click(function(e) {
                        var left = $(this).position().left;
                        var iconLeft = left + ($(this).width() - $(".tab_button .icon").width) / 2;
                        $(".tab_button .icon").stop().animate({ left: iconLeft }, 500);
                    });
                });
                </script>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
            <!--project-->
            <div id="mpage" class="module">
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
            </div>
            
            <div id="mnews" class="module bgShow" style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcNewsImage'))?>);">
                <div class="bgmask"></div>
                <div class="content layoutnone">
                    <div class="header wow">
                        <p class="title">新闻中心</p>
                        <p class="subtitle">News</p>
                    </div>
                    <div class="module-content" id="newslist">
                        <div class="wrapper">
                            <ul class="content_list" data-options-sliders="3" data-options-margin="20" data-options-ease="u65e0" data-options-speed="0" data-options-mode="horizontal" data-options-wheel="0">
                            <?php $news = ArticleExt::model()->normal()->findAll(['condition'=>"mid=3",'limit'=>3,'order'=>'updated desc']); foreach ($news as $key => $value) {?>
                                <li id="newsitem_<?=$key?>" class="wow newstitem left">
                                    <a class="newscontent" target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>">
                                        <div class="news_wrapper">
                                            <div class="newsbody">
                                                <p class="date"><span class="md"><?=date('Y',$value->updated)?><span>-</span></span><span class="year"><?=date('m-d',$value->updated)?></span></p>
                                                <p class="title"><?=$value->title?></p>
                                                <div class="separator"></div>
                                                <p class="description"><?=Tools::u8_title_substr($value->desc,40)?></p>
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
                    <a href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" class="more wow">MORE<i class="fa fa-angle-right"></i></a>
                    <div style="height:0">&nbsp;</div>
                </div>
            </div>
            <!-- <div id="mpartner" class="module">
                <div class="bgmask"></div>
                <div class="content layoutslider">
                    <div class="header wow fw" data-wow-delay=".1s">
                        <p class="title">合作伙伴</p>
                        <p class="subtitle">partner</p>
                    </div>
                    <div class="module-content fw">
                        <div class="wrapper">
                            <ul class="content_list" data-options-ease="u65e0" data-options-speed="1">
                                <li id="partneritem_0" class="wow">
                                    <a href="https://www.baidu.com/" title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/401/201607/1469524488299.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                    <a href="https://www.baidu.com/" title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/110/201603/1456903258323.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                    <a href="https://www.baidu.com/" title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/110/201603/1456902742463.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                    <a href="https://www.baidu.com/" title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/2/201508/1439189029655.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                    <a href="https://www.baidu.com/" title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/9/201509/1443093624332.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                    <a title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/9/201509/1443093245808.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                    <a title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/9/201509/1443093214481.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                    <a title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/9/201509/1443093178566.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                </li>
                                <li id="partneritem_8" class="wow">
                                    <a href="https://www.baidu.com/" title="logo name" target="_blank">
                                        <p class="par_img"><img src="http://resources.jsmo.xin/templates/upload/2/201508/1439190821599.png" width="160" height="80" alt="logo name" /></p>
                                        <p class="par_title">logo name</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <div id="mcontact" class="module">
                <div class="bgmask"></div>
                <div class="content">
                    <div class="header wow fadeInUp fw" data-wow-delay=".1s">
                        <p class="title">联系</p>
                        <p class="subtitle">Contact</p>
                    </div>
                    <div id="contactlist" class="fw">
                        <div id="contactinfo" class="fl wow" data-wow-delay=".2s">
                            <h3 class="ellipsis name">杭州英曼人力资源服务有限公司</h3>
                            <p class="ellipsis add"><span>地点：</span><?=SiteExt::getAttr('qjpz','addr')?></p>
                            <p class="ellipsis zip"><span>邮编：</span><?=SiteExt::getAttr('qjpz','yb')?></p>
                            <p class="ellipsis mobile"><span>手机：</span><?=SiteExt::getAttr('qjpz','sitePhone')?></p>
                            <p class="ellipsis email"><span>邮箱：</span><?=SiteExt::getAttr('qjpz','mail')?></p>
                            <div><a class="fl" target="_blank" href="http://weibo.com/web"><i class="fa fa-weibo"></i></a><a class="fl" target="_blank" href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?>&Site=uemo&Menu=yes"><i class="fa fa-qq"></i></a> <a id="mpbtn" class="fl" href=""><i class="fa fa-weixin"></i></a></div>
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