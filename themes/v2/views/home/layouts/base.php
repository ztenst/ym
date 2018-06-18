<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="<?=$this->keywords?>">
    <meta name="description" content="<?=$this->description?>">
    <meta name="author" content="YY-MO">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/lib.css">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/style.css">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/1497.css">

    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/home/js/jquery-1.11.3.min.js"></script>
    <script>
    $(function() { if (!$("#mindex").length) { $('body').addClass('sscreen') } })
    </script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/home/js/org.min.js" data-main="<?=$this->cssmain?>"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/home/js/form.min.js"></script>
    <title><?=$this->pageTitle?></title>
    <style type="text/css">
        a[href="http://www.uemo.net"]{display:none}
        .cname{
            font-family: 微软雅黑;
            color: #00b7ee;
            font-size: 18px;
            margin-left: -56px;
            position: absolute;
            width: 240px;
            top: 30px;
            font-style: oblique;
        }
        /*#sitecontent{
            padding-top: 86px
        }*/
    </style>
</head>

<body class="<?=$this->banner?>">
    <div class="bodyMask"> </div>
    <div id="header" class="index_nav">
        <div class="content">
            <a href="<?=$this->createUrl('/home/index/index')?>" id="logo"><img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'),194,40)?>" height="40" />
                <span class="cname">杭州英曼人力资源有限公司</span>
            </a>
            <ul id="nav">
            <?php $pathInfo = Yii::app()->request->getPathInfo();?>
                <li class="navitem"><a class="nav-a  <?=!$pathInfo||$pathInfo=='home/index/index'?'active':''?> " href="<?=$this->createUrl('/home/index/index')?>" target="_self"><span  data-title="首页">首页</span></a></li>
                <li class="navitem"><a class="nav-a <?=strstr($pathInfo,'about')?'active':''?>" href="javascript:;" target=""><span data-title="关于我们">关于我们</span><i class="fa fa-angle-down"></i></a>
                    <ul class="subnav">
                        <li><a href="<?=$this->createUrl('/home/about/company')?>" target="_self"><span data-title="公司介绍">公司介绍</span><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="<?=$this->createUrl('/home/about/contact')?>" target="_self"><span data-title="联系我们">联系我们</span><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </li>
                <li class="navitem"><a href="<?=$this->createUrl('/home/serve/list')?>" class="nav-a <?=strstr($pathInfo,'serve')?'active':''?>" href="javascript:;" target=""><span data-title="我们的服务">我们的服务</span><i class="fa fa-angle-down"></i></a>
                    <ul class="subnav">
                    <?php if($tags = TagExt::model()->normal()->findAll("cate='fw'")){
                        foreach ($tags as $t) {?>
                            <li><a href="<?=$this->createUrl('/home/serve/list',['cid'=>$t->id])?>" target="_self"><span data-title="<?=$t->name?>"><?=$t->name?></span><i class="fa fa-angle-right"></i></a></li>
                        <?php }
                        } ?>
                    </ul>
                </li>
                <li class="navitem"><a class="nav-a <?=strstr($pathInfo,'news')?'active':''?>" href="<?=$this->createUrl('/home/news/list')?>" target="_self"><span data-title="新闻中心">新闻中心</span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <a id="headSHBtn" href="javascript:;"><i class="fa fa-bars"></i></a>
    </div>
    <div id="sitecontent">
        <?=$content?>
    </div>
    <div id="footer" style="padding: 0;height: auto;">
        <p>COPYRIGHT (©) 2018 杭州英曼人力资源管理有限公司版权所有. <a class="beian" href="http://www.miitbeian.gov.cn/" style="display:inline; width:auto; color:#8e8e8e" target="_blank"> </a></p>
    </div>
    <div id="shares"><a id="sshare"><i class="fa fa-share-alt"></i></a><a href="http://service.weibo.com/share/share.php?appkey=3206975293&" target="_blank" id="sweibo"><i class="fa fa-weibo"></i></a><a href="javascript:;" id="sweixin"><i class="fa fa-weixin"></i></a><a href="javascript:;" id="gotop"><i class="fa fa-angle-up"></i></a></div>
    <div class="fixed" id="fixed_weixin">
        <div class="fixed-container">
            <div id="qrcode"></div>
            <p>扫描二维码分享到微信</p>
        </div>
    </div>
    <div id="online_open"><i class="fa fa-comments-o"></i></div>
    <div id="online_lx">
        <div id="olx_head">在线咨询<i class="fa fa-times fr" id="online_close"></i></div>
        <ul id="olx_qq">
            <li><a href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?>&Site=uelike&Menu=yes"><i class="fa fa-qq"></i><?=SiteExt::getAttr('qjpz','qq')?></a></li>
        </ul>
        <div id="olx_tel">
            <div><i class="fa fa-phone"></i>联系电话</div>
            <p><?=SiteExt::getAttr('qjpz','sitePhone')?>
                <br />
            </p>
        </div>
    </div>
    <div class="hide">
    </div>
</body>

</html>