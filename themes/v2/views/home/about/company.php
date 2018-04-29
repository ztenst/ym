<div class="npagePage Pageyemian page_23591 " id="page_none">
            <div id="banner" class="">
            <?php $info = ArticleExt::model()->normal()->find("cid=78"); ?>
                <div style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcAboutTopImage'))?>);"></div>
            </div>
            <div class="content ">
                <div class="header">
                    <p class="title">公司简介</p>
                    <p class="subtitle">About us</p>
                </div>
                <div class="fw postbody" id="postbody">
                    <p>
                        <br />
                    </p>
                    <table>
                        <tbody>
                            <tr class="firstRow">
                                <td valign="top" width="569"><img src="<?=ImageTools::fixImage($info->image)?>"  /></td>
                                <td style="word-break: break-all;" valign="top" width="569">
                                    <?=$info->content?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <br />
                    </p>
                    <p>
                        <br />
                    </p>
                    <p>
                        <br />
                    </p>
                    <p>
                        <br />
                    </p>
                    <p>
                        <br />
                    </p>
                    
                </div>
            </div>
        </div>