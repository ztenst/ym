<?php

/**
 * 后台模块admin控制器基类
 * @author tivon
 * @date 2015-04-20
 */
class AdminController extends Controller
{
    public $controlleName = '';
    public $siteName ='';

    /**
     * @var string 布局文件路径
     */
    public $layout = '/layouts/base';

    /**
     * @var array 当前访问页面的面包屑. 这个值将被赋值给links属性{@link CBreadcrumbs::links}.
     */
    public $breadcrumbs = array();

    /**
     * 过滤器
     */
    public function filters()
    {
        return array(
            'accessControl - admin/common/login,admin/common/logout,admin/common/init',
        );
    }

    /**
     * 自定义访问规则
     * @return array 返回一个类似{@link accessRules}中的规则数组
     */
    public function RBACRules()
    {
        return array();
    }

    /**
     * 访问控制规则，子类控制器中自定义规则需重写{@link RBACRules()}方法，返回的数组形式相同
     * @return array 访问控制规则
     */
    final public function accessRules()
    {
        $rules = array(
            array('deny',
                'users' => array('?')
            ),
        );
        return array_merge($this->RBACRules(), $rules);
    }

    /**
     * 自定义左侧菜单，设置方法与zii.widget.CMenu相似，详见CMenu.php
     * 使用技巧：
     * 1、系统会自动将'url'与当前访问路由匹配的菜单进行高亮，使用'active'可指定需要高亮的菜单项，只需设置'active'元素的值为一个布尔值的表达式即可。
     * 假设要访问非admin/index/index页面时使得该菜单项高亮，则进行如下设置：
     * array('label'=>'首页','url'=>array('/admin/index/index', 'active'=>$this->route=='admin/index/test'))
     * 这会使得在访问admin/index/test时，admin/index/index菜单项进行高亮
     */
    public function getVipMenu()
    {
        return [
            ['label'=>'管理中心','icon'=>'icon-settings','url'=>'/admin/common/index','active'=>$this->route=='vip/common/index'],
            ['label' => '文章管理','icon' => 'icon-speedometer', 'url' => ['/admin/news/list'],'active'=>$this->route=='vip/news/edit'||$this->route=='vip/news/list'],
            ['label' => '产品管理', 'icon' => 'icon-speedometer', 'items' => [
                ['label' => '发布产品', 'url' => ['/admin/product/edit']],
                ['label' => '产品列表', 'url' => ['/admin/product/list']],
            ]],
            ['label' => '订单管理','icon' => 'icon-speedometer', 'url' => ['/admin/order/list'],'active'=>$this->route=='vip/order/edit'||$this->route=='vip/order/list'],
            ['label'=>'标签管理','icon'=>'icon-speedometer','url'=>['/admin/tag/list'],'active'=>$this->route=='vip/tag/edit'],
            ['label'=>'用户采集','icon'=>'icon-speedometer','url'=>['/admin/user/list']],
            ['label'=>'站点配置','icon'=>'icon-speedometer','url'=>['/admin/site/list'],'active'=>$this->route=='vip/site/edit'||$this->route=='vip/site/list'],
            // ['label'=>'ahalist','icon'=>'icon-speedometer','url'=>['/admin/aha/list']],

            
        ];
    }

    /**
     * [getPersonalSalingNum 个人可以上架数目]
     * @return [type] [description]
     */
    public function getPersonalSalingNum($uid=0)
    {
        if(!$uid)
            return 0;
        $userPubNum = SM::resoldConfig()->resoldPersonalSaleNum();
        $salingEsfNum = ResoldEsfExt::model()->saling()->count(['condition'=>'uid=:uid','params'=>[':uid'=>$uid]]);
        $salingZfNum = ResoldZfExt::model()->saling()->count(['condition'=>'uid=:uid','params'=>[':uid'=>$uid]]);
        $salingQgNum = ResoldQgExt::model()->undeleted()->enabled()->count(['condition'=>'uid=:uid','params'=>[':uid'=>$uid]]);
        $salingQzNum = ResoldQzExt::model()->undeleted()->enabled()->count(['condition'=>'uid=:uid','params'=>[':uid'=>$uid]]);
        $totalCanSaleNum = $userPubNum -$salingEsfNum - $salingZfNum - $salingQgNum - $salingQzNum;
        $totalCanSaleNum < 0 && $totalCanSaleNum = 0;
        return $totalCanSaleNum;
    }

    public function init()
    {
        parent::init();
        $this->siteName = Yii::app()->file->sitename;
    }

}
