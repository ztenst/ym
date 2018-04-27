<?php
  $this->pageTitle = '设备详情';
?>
<div class="npagePage">
    <div class="content">
        <div id="projectpost">
            <div class="header">
                <p class="title"><?=$info->name?></p>
            </div>
            <ul id="projectimages" class="plr5">
                <li><img src="<?=ImageTools::fixImage($info->image)?>" class="imgcw" /></li>
            </ul>
            <div class="clear"></div>
            <div class="postbody plr10">
                <p><center><h3>特色</h3></center></p>
                <br>
                <p><?=$info->td?></p>
                <p><center><h3>参数</h3></center></p>
                <br>
                <p><?=$info->cs?></p>
                <?php if($images = $info->images): ?>
                	<p><center><h3>相册</h3></center></p>
                <br>
                <ul>
                	<?php foreach ($images as $key => $value) {?>
                	<li><img src="<?=ImageTools::fixImage($value->url)?>" class="imgcw" />
                	<hr></li>
                <?php } endif;?></ul>
                <p>
                <br>
                <div id="contactform" class="" data-wow-delay=".2s">
                            <form id="f1" method="post" onsubmit="alert('提交成功')">
                                <p>
                                    <input style="color:grey" id="pname" type="text" class="inputtxt name" name="name" placeholder="姓名" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" type="text" class="inputtxt email" name="email" placeholder="邮箱" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" id="pphone" type="text" class="inputtxt tel" name="tel" placeholder="电话" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" class="cont" name="content" placeholder="备注" autocomplete="off"></input>
                                </p>
                                <hr>
                                <p>
                                    <a onclick="orderIt()">在线预定</a>
                                </p>
                                <input type="hidden" name="pid" value="<?=$info->id?>">
                            </form>
                        </div>
                
                </p>
            </div>
        </div>
        <div id="pages"></div>
    </div>
</div>
<script type="text/javascript">
    <?php Tools::startJs()?>
    function orderIt() {
        if($('#pname').val() == '') {
            alert('请填写姓名');
            return false; 
        }
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
        if(!myreg.test($("#pphone").val())) 
        { 
            alert('请输入有效的手机号码'); 
            return false; 
        } 
        alert('提交成功');
        document.getElementById('f1').submit();
    }
    <?php Tools::endJs('js')?>
</script>