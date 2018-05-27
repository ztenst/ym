<?php
class ServeController extends HomeController
{
    public function actionList($cid='')
    {
        $this->banner = '';
        $this->cssmain = 'baseMain';
        $criteria = new CDbCriteria;
        $criteria->addCondition("mid=2");
        if($cid) {
            $criteria->addCondition("cid=$cid");
        }
        $infos = ArticleExt::model()->normal()->findAll($criteria);
    	// $this->layout = '/layouts/base';
        $this->pageTitle = '服务列表';
        
        $this->render('list',['infos'=>$infos,'cid'=>$cid]);
    }
    public function actionInfo($id='')
    {
        $this->banner = 'nobanner';
        $this->cssmain = 'baseMain';
        $info = ArticleExt::model()->findByPk($id);

        // $this->layout = '/layouts/base';
        $this->pageTitle = $info->title;
        if(in_array($id, [53])) {
            $this->render('info1',['info'=>$info]);
        } else
            $this->render('info',['info'=>$info]);
    }
}
