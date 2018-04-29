<?php
class AboutController extends HomeController
{
    public function actionCompany()
    {
        $this->banner = '';
        $this->cssmain = 'baseMain';
    	// $this->layout = '/layouts/base';
        $this->pageTitle = '公司介绍';
        
        $this->render('company');
    }
    public function actionContact()
    {
        $this->banner = '';
        $this->cssmain = 'baseMain';
        // $this->layout = '/layouts/base';
        $this->pageTitle = '联系我们';
        
        $this->render('contact');
    }
}
