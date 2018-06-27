<?php
class IndexController extends HomeController
{
    public function actionIndex()
    {
        $this->banner = '';
    	$this->layout = '/layouts/base';
        $this->pageTitle = '杭州英曼人力资源管理有限公司';
        $this->keywords = '人力资源管理，杭州英曼，出国游学，暑期夏令营';
        $this->description = '  
杭州英曼人力资源有限公司，坐落于杭州市。公司立足于教育观念全球化的趋势，主要针对中国各大学校以及教育机构收集信息，提供外教招聘服务，并面向广大学子，开展各项国际文教项目，包括暑期夏令营项目、海外志愿项目以及海外实习项目等等。';
        if(Yii::app()->request->getIsPostRequest()) {

            $data['name'] = Yii::app()->request->getPost('name');
            $data['mail'] = Yii::app()->request->getPost('email');
            $data['phone'] = Yii::app()->request->getPost('tel');
            $data['msg'] = Yii::app()->request->getPost('content');
            $guest = new GuestExt;
            $guest->attributes = $data;
            $guest->save();
            echo json_encode(['code'=>0,'data'=>'']);
            Yii::app()->end();
        }
        $this->render('index');
    }

    public function actionAbout()
    {
        $info = ArticleExt::model()->getJs()->normal()->find();
        // var_dump($info->attributes);exit;
        $this->render('about',['info'=>$info]);
    }

    public function actionContact()
    {
        $info = ArticleExt::model()->getLx()->normal()->find();
        // var_dump($info->attributes);exit;
        $this->render('contact',['info'=>$info]);
    }
}
