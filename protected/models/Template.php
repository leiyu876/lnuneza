<?php

class Template extends CActiveRecord
{
	public function tableName()
	{
		return 'setup.template';
	}

	public function rules()
	{
		return array(			
			array('template_code, template_description', 'required'),			
			array('template_code', 'unique'),            
		);
	}

	public function attributeLabels()
	{
		return array(
			'template_code'        => 'Template Code',
			'template_description' => 'Template Description',			
		);
	}

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}

