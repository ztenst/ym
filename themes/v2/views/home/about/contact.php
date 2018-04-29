<div class="npagePage Pageyemian page_23589 " id="page_none">
            <div id="banner" class="">
            <?php $info = ArticleExt::model()->normal()->find("cid=79"); ?>
                <div style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcContactTopImage'))?>);"></div>
            </div>
            <div class="content ">
                <div class="header">
                    <p class="title">联系我们</p>
                    <p class="subtitle">Contact</p>
                </div>
                <div class="fw postbody" id="postbody">
                <hr />
                   <?=$info->content?>
                   <p style="text-align:center">
                        Adress: <?=SiteExt::getAttr('qjpz','addr')?>
                    </p>
                    <p style="text-align:center">
                        &nbsp;
                    </p>
                    <p style="text-align:center">
                        Telephone: &nbsp;<?=SiteExt::getAttr('qjpz','sitePhone')?>
                    </p>
                    <p style="text-align:center">
                        &nbsp;
                    </p>
                    <p style="text-align:center">
                        E-mail: &nbsp;<?=SiteExt::getAttr('qjpz','mail')?>
                    </p>
                    <p style="text-align:center">
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p style="text-align: center;">
                        &nbsp;
                    </p>
                </div>
            </div>

        </div>