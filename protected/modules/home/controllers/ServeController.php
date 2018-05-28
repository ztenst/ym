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
        $criteria->order = 'sort desc';
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
        $arr = ['53'=>1,'54'=>2,'55'=>3,'57'=>4];
        if($info->title=='名校微留学') {
            $this->render('yxlist');
        } else {
            if(in_array($id, array_keys($arr))) {
                $this->render('info'.$arr[$id],['info'=>$info]);
            } else
                $this->render('info',['info'=>$info]);
        }
            
    }
    public function actionYxlist()
    {
        $this->banner = 'nobanner';
        $this->cssmain = 'baseMain';
        $this->render('yxlist');
    }

    public function actionYxinfo($id='')
    {
        $this->banner = 'nobanner';
        $this->cssmain = 'baseMain';
        $info = YxExt::model()->findByPk($id);
        $this->render('yxinfo',['info'=>$info]);
    }
}
