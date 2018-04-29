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
                            <?php if($tags = TagExt::model()->normal()->findAll("cate='fw'")) {
                                foreach ($tags as $key => $value) {?>
                                    <li id="serviceitem_<?=$key?>" class="serviceitem wow">
                                        <a href="<?=$this->createUrl('/home/serve/list',['cid'=>$value->id])?>" target="_blank">
                                            <p class="service_img"><img src="<?=ImageTools::fixImage($value->image)?>" width="320" height="120" alt="<?=$value->name?>" /></p>
                                            <div class="service_info">
                                                <p class="title"><?=$value->name?></p>
                                                <p class="description"><?='说点什么吧...'?></p>
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
            <div id="mteam" class="module" style="height: 466px">
                <div class="bgmask"></div>
                <div class="content layoutslider">
                    <div class="header wow">
                        <!-- <p class="title">精英团队</p> -->
                        <!-- <p class="subtitle">承担起社会赋予企业的重视安全 职业健康责任</p> -->
                    </div>
                    <img src="<?=Yii::app()->theme->baseUrl?>/static/home/imgs/fwlc.jpg" alt="" width="">
                    <div class="clear"></div>
                    <a href="http://mo004_1497.mo4.line1.uemo.net/team/" class="more wow">MORE<i class="fa fa-angle-right"></i></a>
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