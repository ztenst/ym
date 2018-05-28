<?php

/**
 * This is the model class for table "yx".
 *
 * The followings are the available columns in table 'yx':
 * @property integer $id
 * @property string $name
 * @property string $fm_title
 * @property string $fm_desc
 * @property string $fm_image
 * @property string $ts_title1
 * @property string $ts_title2
 * @property string $ts_title3
 * @property string $ts_title4
 * @property string $ts_image1
 * @property string $ts_image2
 * @property string $ts_image3
 * @property string $ts_image4
 * @property string $descp
 * @property string $content
 * @property string $image
 * @property integer $created
 * @property integer $updated
 */
class Yx extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'yx';
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
			array('created, updated', 'numerical', 'integerOnly'=>true),
			array('name, fm_title, fm_desc, ts_title1, ts_title2, ts_title3, ts_title4', 'length', 'max'=>100),
			array('fm_image, ts_image1, ts_image2, ts_image3, ts_image4, descp, image', 'length', 'max'=>255),
			array('content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, fm_title, fm_desc, fm_image, ts_title1, ts_title2, ts_title3, ts_title4, ts_image1, ts_image2, ts_image3, ts_image4, descp, content, image, created, updated', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'fm_title' => 'Fm Title',
			'fm_desc' => 'Fm Desc',
			'fm_image' => 'Fm Image',
			'ts_title1' => 'Ts Title1',
			'ts_title2' => 'Ts Title2',
			'ts_title3' => 'Ts Title3',
			'ts_title4' => 'Ts Title4',
			'ts_image1' => 'Ts Image1',
			'ts_image2' => 'Ts Image2',
			'ts_image3' => 'Ts Image3',
			'ts_image4' => 'Ts Image4',
			'descp' => 'Descp',
			'content' => 'Content',
			'image' => 'Image',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('fm_title',$this->fm_title,true);
		$criteria->compare('fm_desc',$this->fm_desc,true);
		$criteria->compare('fm_image',$this->fm_image,true);
		$criteria->compare('ts_title1',$this->ts_title1,true);
		$criteria->compare('ts_title2',$this->ts_title2,true);
		$criteria->compare('ts_title3',$this->ts_title3,true);
		$criteria->compare('ts_title4',$this->ts_title4,true);
		$criteria->compare('ts_image1',$this->ts_image1,true);
		$criteria->compare('ts_image2',$this->ts_image2,true);
		$criteria->compare('ts_image3',$this->ts_image3,true);
		$criteria->compare('ts_image4',$this->ts_image4,true);
		$criteria->compare('descp',$this->descp,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('image',$this->image,true);
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
	 * @return Yx the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
