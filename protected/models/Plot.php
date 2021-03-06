<?php

/**
 * This is the model class for table "plot".
 *
 * The followings are the available columns in table 'plot':
 * @property integer $id
 * @property string $title
 * @property string $area
 * @property string $street
 * @property string $image
 * @property string $transit
 * @property string $peripheral
 * @property string $content
 * @property string $data_conf
 * @property integer $deleted
 * @property integer $created
 * @property integer $updated
 */
class Plot extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created', 'required'),
			array('deleted, created, updated', 'numerical', 'integerOnly'=>true),
			array('title, area, street, image', 'length', 'max'=>255),
			array('transit, peripheral, content, data_conf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, area, street, image, transit, peripheral, content, data_conf, deleted, created, updated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'area' => 'Area',
			'street' => 'Street',
			'image' => 'Image',
			'transit' => 'Transit',
			'peripheral' => 'Peripheral',
			'content' => 'Content',
			'data_conf' => 'Data Conf',
			'deleted' => 'Deleted',
			'created' => 'Created',
			'updated' => 'Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('transit',$this->transit,true);
		$criteria->compare('peripheral',$this->peripheral,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('data_conf',$this->data_conf,true);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('created',$this->created);
		$criteria->compare('updated',$this->updated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plot the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
