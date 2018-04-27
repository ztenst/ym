<?php
/**
 * 文章控制器
 * @author steven.allen <[<email address>]>
 * @date(2017.2.5)
 */
class NewsController extends AdminController{

	public $cates = [];

	/**
	 *相当于构造方法
	 */
	public function init()
	{
		parent::init();
		$this->cates = CHtml::listData(TagExt::model()->getTagByCate('wzlm')->normal()->findAll(),'id','name');
	}
	/**
	 * 文章列表
	 */
	public function actionList($type='title',$value='',$time_type='created',$time='',$cate='')
	{
		/**
		 * yii的db操作可以通过criteria类 用法超级简单
		 */
		$criteria = new CDbCriteria;
		$criteria->order = 'sort desc,updated desc';
		$criteria->addCondition('deleted=0');
		if($value = trim($value))
            if ($type=='title') {
                $criteria->addSearchCondition('title', $value);
            } 
        //添加时间、刷新时间筛选
        if($time_type!='' && $time!='')
        {
            list($beginTime, $endTime) = explode('-', $time);
            $beginTime = (int)strtotime(trim($beginTime));
            $endTime = (int)strtotime(trim($endTime));
            $criteria->addCondition("{$time_type}>=:beginTime");
            $criteria->addCondition("{$time_type}<:endTime");
            $criteria->params[':beginTime'] = TimeTools::getDayBeginTime($beginTime);
            $criteria->params[':endTime'] = TimeTools::getDayEndTime($endTime);

        }
		if($cate) {
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		//这个相当于M()->selecte当时封装了分页
		//其中 news->data是数据 news->pageination是分页
		$news = ArticleExt::model()->getList($criteria,20);
		// 这个是渲染页面
		$this->render('list',[
			'cates'=>$this->cates,
			'news'=>$news->data,
			'pager'=>$news->pagination,
			'type' => $type,
			'cates1'=>CHtml::listData(TagExt::model()->getTagByCate('hjlx')->normal()->findAll(),'id','name'),
            'value' => $value,
            'time' => $time,
            'time_type' => $time_type,
            'cate'=>$cate]);
	}

	/**
	 * 文章列表
	 */
	public function actionAboutlist($type='title',$value='',$time_type='created',$time='',$cate='')
	{
		/**
		 * yii的db操作可以通过criteria类 用法超级简单
		 */
		$criteria = new CDbCriteria;
		$criteria->order = 'sort desc,updated desc';
		$criteria->addCondition('deleted=0 and mid=1');
		if($value = trim($value))
            if ($type=='title') {
                $criteria->addSearchCondition('title', $value);
            } 
        //添加时间、刷新时间筛选
        if($time_type!='' && $time!='')
        {
            list($beginTime, $endTime) = explode('-', $time);
            $beginTime = (int)strtotime(trim($beginTime));
            $endTime = (int)strtotime(trim($endTime));
            $criteria->addCondition("{$time_type}>=:beginTime");
            $criteria->addCondition("{$time_type}<:endTime");
            $criteria->params[':beginTime'] = TimeTools::getDayBeginTime($beginTime);
            $criteria->params[':endTime'] = TimeTools::getDayEndTime($endTime);

        }
		if($cate) {
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		//这个相当于M()->selecte当时封装了分页
		//其中 news->data是数据 news->pageination是分页
		$news = ArticleExt::model()->getList($criteria,20);
		// 这个是渲染页面
		$this->render('list',[
			'cates'=>$this->cates,
			'news'=>$news->data,
			'pager'=>$news->pagination,
			'type' => $type,
			'cates1'=>CHtml::listData(TagExt::model()->getTagByCate('gywm')->normal()->findAll(),'id','name'),
            'value' => $value,
            'time' => $time,
            'time_type' => $time_type,
            'mid'=>1,
            'page_title'=>'关于我们列表',
            'cate'=>$cate]);
	}
	public function actionServelist($type='title',$value='',$time_type='created',$time='',$cate='')
	{
		/**
		 * yii的db操作可以通过criteria类 用法超级简单
		 */
		$criteria = new CDbCriteria;
		$criteria->order = 'sort desc,updated desc';
		$criteria->addCondition('deleted=0 and mid=2');
		if($value = trim($value))
            if ($type=='title') {
                $criteria->addSearchCondition('title', $value);
            } 
        //添加时间、刷新时间筛选
        if($time_type!='' && $time!='')
        {
            list($beginTime, $endTime) = explode('-', $time);
            $beginTime = (int)strtotime(trim($beginTime));
            $endTime = (int)strtotime(trim($endTime));
            $criteria->addCondition("{$time_type}>=:beginTime");
            $criteria->addCondition("{$time_type}<:endTime");
            $criteria->params[':beginTime'] = TimeTools::getDayBeginTime($beginTime);
            $criteria->params[':endTime'] = TimeTools::getDayEndTime($endTime);

        }
		if($cate) {
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		//这个相当于M()->selecte当时封装了分页
		//其中 news->data是数据 news->pageination是分页
		$news = ArticleExt::model()->getList($criteria,20);
		// 这个是渲染页面
		$this->render('list',[
			'cates'=>$this->cates,
			'news'=>$news->data,
			'pager'=>$news->pagination,
			'type' => $type,
			'cates1'=>CHtml::listData(TagExt::model()->getTagByCate('fw')->normal()->findAll(),'id','name'),
            'value' => $value,
            'time' => $time,
            'time_type' => $time_type,
            'mid'=>2,
            'page_title'=>'服务列表',
            'cate'=>$cate]);
	}
	public function actionNewslist($type='title',$value='',$time_type='created',$time='',$cate='')
	{
		/**
		 * yii的db操作可以通过criteria类 用法超级简单
		 */
		$criteria = new CDbCriteria;
		$criteria->order = 'sort desc,updated desc';
		$criteria->addCondition('deleted=0 and mid=3');
		if($value = trim($value))
            if ($type=='title') {
                $criteria->addSearchCondition('title', $value);
            } 
        //添加时间、刷新时间筛选
        if($time_type!='' && $time!='')
        {
            list($beginTime, $endTime) = explode('-', $time);
            $beginTime = (int)strtotime(trim($beginTime));
            $endTime = (int)strtotime(trim($endTime));
            $criteria->addCondition("{$time_type}>=:beginTime");
            $criteria->addCondition("{$time_type}<:endTime");
            $criteria->params[':beginTime'] = TimeTools::getDayBeginTime($beginTime);
            $criteria->params[':endTime'] = TimeTools::getDayEndTime($endTime);

        }
		if($cate) {
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		//这个相当于M()->selecte当时封装了分页
		//其中 news->data是数据 news->pageination是分页
		$news = ArticleExt::model()->getList($criteria,20);
		// 这个是渲染页面
		$this->render('list',[
			'cates'=>$this->cates,
			'news'=>$news->data,
			'pager'=>$news->pagination,
			'type' => $type,
			'cates1'=>CHtml::listData(TagExt::model()->getTagByCate('xw')->normal()->findAll(),'id','name'),
            'value' => $value,
            'time' => $time,
            'time_type' => $time_type,
            'mid'=>3,
            'page_title'=>'新闻列表',
            'cate'=>$cate]);
	}

	public function actionEdit($id=0,$mid=0)
	{
		$info = $id ? ArticleExt::model()->findByPk($id) : new ArticleExt;
		switch ($mid) {
			case '1':
				$cates1 = CHtml::listData(TagExt::model()->getTagByCate('gywm')->normal()->findAll(),'id','name');
				$url = 'aboutlist';
				$page_title = '关于我们';
				break;
			case '2':
				$cates1 = CHtml::listData(TagExt::model()->getTagByCate('fw')->normal()->findAll(),'id','name');
				$url = 'servelist';
				$page_title = '服务';
				break;
			case '3':
				$cates1 = CHtml::listData(TagExt::model()->getTagByCate('xw')->normal()->findAll(),'id','name');
				$url = 'newslist';
				$page_title = '新闻';
				break;
			default:
				$cates1 = [];
				$url = '';
				$page_title = '';
				break;
			}
		if(Yii::app()->request->getIsPostRequest()) {
			$info->attributes = Yii::app()->request->getPost('ArticleExt',[]);
			$info->mid = $mid;
			if($info->save()) {
				$this->setMessage('操作成功','success',[$url]);
			} else {
				$this->setMessage(array_values($info->errors)[0][0],'error');
			}
		} 
		
		$this->render('edit',['article'=>$info,'cates'=>$this->cates,'cates1'=>$cates1,'page_title'=>$page_title]);
	}

	public function actionAjaxSort($id=0,$sort=0)
	{
		if($id) {
			$model = ArticleExt::model()->findByPk($id);
			$model->sort = $sort;
			if($model->save()) {
				$this->setMessage('操作成功！','success');
				echo json_encode(['success'=>'1']);
			} else {
				echo json_encode(['success'=>'0']);
			}
		}
	}

	public function actionAjaxChangeStatus($id=0)
	{
		if($id) {
			$model = ArticleExt::model()->findByPk($id);
			$model->status = $model->status==1?0:1;
			if($model->save()) {
				$this->setMessage('操作成功！','success');
				echo json_encode(['success'=>'1']);
			} else {
				echo json_encode(['success'=>'0']);
			}
		}
	}

	public function actionAjaxDel($id=0)
	{
		if($id) {
			$model = ArticleExt::model()->findByPk($id);
			$model->deleted = 1;
			if($model->save()) {
				$this->setMessage('操作成功！','success');
				echo json_encode(['success'=>'1']);
			} else {
				echo json_encode(['success'=>'0']);
			}
		}
	}
}