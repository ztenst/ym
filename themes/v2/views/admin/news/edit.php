<?php
$this->pageTitle = '资讯新建/编辑';
$this->breadcrumbs = array('资讯管理', $this->pageTitle);
?>
<?php $this->widget('ext.ueditor.UeditorWidget',array('id'=>'ArticleExt_content','options'=>"toolbars:[['fullscreen','source','undo','redo','|','customstyle','paragraph','fontfamily','fontsize'],
        ['bold','italic','underline','fontborder','strikethrough','superscript','subscript','removeformat',
        'formatmatch', 'autotypeset', 'blockquote', 'pasteplain','|',
        'forecolor','backcolor','insertorderedlist','insertunorderedlist','|',
        'rowspacingtop','rowspacingbottom', 'lineheight','|',
        'directionalityltr','directionalityrtl','indent','|'],
        ['justifyleft','justifycenter','justifyright','justifyjustify','|','link','unlink','|',
        'insertimage','emotion','scrawl','insertvideo','music','attachment','map',
        'insertcode','|',
        'horizontal','inserttable','|',
        'print','preview','searchreplace']]")); ?>
<?php $form = $this->beginWidget('HouseForm', array('htmlOptions' => array('class' => 'form-horizontal'))) ?>
<div class="form-group">
    <label class="col-md-2 control-label">标题<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'title', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'title') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">副标题/职位<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'sub_title', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'sub_title') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">分类</label>
    <div class="col-md-4">
        <?php echo $form->dropDownList($article, 'cid', $cates, array('class' => 'form-control', 'encode' => false)); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'cid') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">案例类别</label>
    <div class="col-md-4">
        <?php echo $form->dropDownList($article, 'mid', $cates1, array('class' => 'form-control', 'encode' => false)); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'mid') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">作者<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'author', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'author') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">文章摘要</label>
    <div class="col-md-8">
        <?php echo $form->textArea($article, 'desc', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'desc') ?></div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">文章内容</label>
    <div class="col-md-8">
        <?php echo $form->textArea($article, 'content', array('id'=>'ArticleExt_content')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'content')  ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label text-nowrap">封面图</label>
    <div class="col-md-8">
        <?php $this->widget('FileUpload',array('model'=>$article,'attribute'=>'image','inputName'=>'img','width'=>400,'height'=>300)); ?>
        <span class="help-block">建议尺寸：430*230</span> 
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">文章来源</label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'source', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'source') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">状态</label>
    <div class="col-md-4">
        <?php echo $form->radioButtonList($article, 'status', ArticleExt::$status, array('separator' => '')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'status') ?></div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <button type="submit" class="btn green">保存</button>
            <?php echo CHtml::link('返回',$this->createUrl('list'), array('class' => 'btn default')) ?>
        </div>
    </div>
</div>

<?php $this->endWidget() ?>

<?php
$js = "

    var getHousesAjax =
     {
        url: '".$this->createUrl('/admin/plot/AjaxGetHouse')."',"."
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                kw:params
            };
        },
        results:function(data){
            var items = [];

             $.each(data.results,function(){
                var tmp = {
                    id : this.id,
                    text : this.name
                }
                items.push(tmp);
            });

            return {
                results: items
            };
        },
        processResults: function (data, page) {
            var items = [];
             $.each(data.msg,function(){
                var tmp = {
                    id : this.id,
                    text : this.title
                }
                items.push(tmp);
            });
            return {
                results: items
            };
        }
    }
        $(function(){

           $('.select2').select2({
              placeholder: '请选择',
              allowClear: true
           });

				var houses_edit = $('#plot');
				var data = {};
				if( houses_edit.length && houses_edit.data('houses') ){
					data = eval(houses_edit.data('houses'));
				}

				$('#plot').select2({
					multiple:true,
					ajax: getHousesAjax,
					language: 'zh-CN',
					initSelection: function(element, callback){
						callback(data);
					}
				});

             $('.form_datetime').datetimepicker({
                 autoclose: true,
                 isRTL: Metronic.isRTL(),
                 format: 'yyyy-mm-dd hh:ii',
                 // minView: 'm',
                 language: 'zh-CN',
                 pickerPosition: (Metronic.isRTL() ? 'bottom-right' : 'bottom-left'),
             });

             $('.form_datetime1').datetimepicker({
                 autoclose: true,
                 isRTL: Metronic.isRTL(),
                 format: 'yyyy-mm-dd',
                 minView: 'month',
                 language: 'zh-CN',
                 pickerPosition: (Metronic.isRTL() ? 'bottom-right' : 'bottom-left'),
             });
        });
        ";


Yii::app()->clientScript->registerScript('add',$js,CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/select2/select2.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/select2/select2_locale_zh-CN.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile('/static/global/plugins/select2/select2.css');
Yii::app()->clientScript->registerCssFile('/static/admin/pages/css/select2_custom.css');

Yii::app()->clientScript->registerScriptFile('/static/admin/pages/scripts/addCustomizeDialog.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile('/static/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css');
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js', CClientScript::POS_END, array('charset'=> 'utf-8'));
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/bootbox/bootbox.min.js', CClientScript::POS_END);
?>
