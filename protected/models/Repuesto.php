<?php

/**
 * This is the model class for table "repuesto".
 *
 * The followings are the available columns in table 'repuesto':
 * @property integer $id
 * @property string $titulo
 * @property string $modelo
 * @property string $precio
 * @property string $codigo
 * @property integer $estado
 * @property string $image
 * @property string $created_at
 */
class Repuesto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'repuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, modelo, precio', 'required', 'message' => '{attribute} no debe estar vacio.'),
			array('estado', 'numerical', 'integerOnly'=>true,'message' => '{attribute} solo debe ser numeros.'),
			array('titulo, modelo, precio, codigo, image', 'length', 'max'=>255),
			array('created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titulo, modelo, precio, codigo, estado, image, created_at', 'safe', 'on'=>'search'),
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
			'titulo' => 'Titulo',
			'modelo' => 'Modelo',
			'precio' => 'Precio',
			'codigo' => 'Codigo',
			'estado' => 'Estado',
			'image' => 'Image',
			'created_at' => 'Created At',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('estado',$this->estado);

		$criteria->addCondition('estado = TRUE','AND');
		$criteria->compare('image',$this->image,true);
		$criteria->compare('created_at',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Repuesto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
